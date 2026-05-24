<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Tampilkan Halaman Landing (Home)
     */
    public function home()
    {
        // Ambil semua layanan diurutkan berdasarkan berat urutan
        $services = Service::orderBy('order_weight', 'asc')->get();

        // Ambil portofolio unggulan untuk ditampilkan di preview (is_featured = true)
        $featuredPortfolios = Portfolio::where('is_featured', true)->get();

        return view('home', compact('services', 'featuredPortfolios'));
    }

    /**
     * Tampilkan Halaman Portofolio Khusus
     */
    public function portfolio(Request $request)
    {
        // Ambil semua portofolio
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();

        return view('portfolio', compact('portfolios'));
    }

    /**
     * Proses Formulir Kontak & Integrasi WhatsApp Business
     */
    public function submitContact(Request $request)
    {
        // 1. Validasi Input Form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:100',
            'message' => 'required|string',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'message.required' => 'Detail pesan proyek wajib diisi.',
        ]);

        // 2. Simpan Log Inquiry ke Database PostgreSQL
        $contactMessage = ContactMessage::create($validated);

        // 3. Format Pesan WhatsApp Business
        $whatsappNumber = '6283112540839'; // Nomor WA Business Tezworks lo (format kode negara tanpa +)
        
        $serviceLabel = match($request->service) {
            'website' => 'Pembuatan Website',
            'mobile' => 'Pembuatan Aplikasi Mobile',
            'joki' => 'Joki Tugas Pemrograman',
            'windows' => 'Instalasi Windows & Software',
            default => 'Konsultasi Teknologi Lainnya'
        };

        $budgetText = $request->budget ? $request->budget : 'Belum ditentukan';

        // Susun teks chat WA dengan emoji & kerapian ala profesional
        $text = "*Halo TezWorks! Saya ingin Konsultasi Proyek Baru* 🚀\n\n";
        $text .= "Berikut detail kebutuhan saya:\n";
        $text .= "----------------------------------------\n";
        $text .= "👤 *Nama:* " . $request->name . "\n";
        $text .= "📧 *Email:* " . $request->email . "\n";
        $text .= "🛠️ *Layanan:* " . $serviceLabel . "\n";
        $text .= "💰 *Estimasi Budget:* " . $budgetText . "\n";
        $text .= "📝 *Deskripsi Proyek:*\n" . $request->message . "\n";
        $text .= "----------------------------------------\n\n";
        $text .= "Mohon bantuannya untuk dianalisis ya. Terima kasih! 🙏";

        // Buat URL wa.me dengan urlencode teks pesannya
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($text);

        // Kembalikan respons sukses berupa JSON beserta URL redirect WhatsApp
        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil disimpan! Anda akan diarahkan ke WhatsApp untuk konsultasi langsung.',
            'redirect_url' => $whatsappUrl
        ]);
    }
}
