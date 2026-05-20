<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->truncate(); // Bersihkan data lama jika ada

        DB::table('portfolios')->insert([
            [
                'title' => 'FinPay — Aplikasi Fintech',
                'slug' => 'finpay-aplikasi-fintech',
                'category' => 'mobile',
                'description' => 'Dompet digital (e-wallet) canggih dengan fitur pembayaran real-time menggunakan QRIS, transfer bank gratis, investasi reksa dana terintegrasi, dan analitik laporan keuangan personal bulanan klien yang interaktif.',
                'image_url' => 'finpay.png',
                'demo_url' => 'https://github.com/tezworks/finpay',
                'technology' => json_encode(['Flutter', 'Dart', 'Node.js', 'Express', 'PostgreSQL', 'Socket.io']),
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nexora Corp — Website Korporat',
                'slug' => 'nexora-corp-website-korporat',
                'category' => 'website',
                'description' => 'Website profil perusahaan (company profile) berkinerja tinggi untuk Nexora Corp. Dilengkapi panel admin (CMS kustom) yang sangat mudah digunakan, animasi transisi premium modern, dan optimasi SEO Google yang mencapai skor 100 di Lighthouse.',
                'image_url' => 'nexora.png',
                'demo_url' => 'https://nexora.co.id',
                'technology' => json_encode(['Next.js', 'React', 'Prisma ORM', 'Tailwind CSS', 'Vercel', 'PostgreSQL']),
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ShopNova — Platform E-Commerce',
                'slug' => 'shopnova-platform-e-commerce',
                'category' => 'website',
                'description' => 'Platform toko online B2C skala besar yang mampu menangani puluhan ribu produk. Memiliki fitur filter produk real-time, sinkronisasi inventori dinamis, integrasi payment gateway Midtrans (Virtual Account, E-Wallet, Card), serta dashboard analitik penjualan.',
                'image_url' => 'shopnova.png',
                'demo_url' => 'https://shopnova.com',
                'technology' => json_encode(['React', 'Laravel', 'Tailwind CSS', 'Midtrans API', 'AWS S3', 'MySQL']),
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'MediCare — Kesehatan Digital',
                'slug' => 'medicare-kesehatan-digital',
                'category' => 'mobile',
                'description' => 'Aplikasi mobile telemedicine yang menghubungkan pasien langsung dengan dokter spesialis secara real-time. Memiliki fitur video call terenkripsi, chat konsultasi, pemesanan obat online, serta manajemen rekam medis digital (EHR).',
                'image_url' => 'medicare.png',
                'demo_url' => 'https://github.com/tezworks/medicare',
                'technology' => json_encode(['React Native', 'Firebase', 'WebRTC', 'Redux Toolkit', 'Node.js', 'MongoDB']),
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SmartGrading — Sistem Penilaian Ujian Otomatis',
                'slug' => 'smartgrading-sistem-penilaian-ujian-otomatis',
                'category' => 'joki',
                'description' => 'Bantuan pengerjaan tugas proyek akhir mahasiswa berupa aplikasi web cerdas untuk menilai dan mendeteksi kesamaan jawaban (plagiarisme) ujian coding mahasiswa secara otomatis. Menggunakan library NLP Python.',
                'image_url' => 'smartgrading.png',
                'demo_url' => null,
                'technology' => json_encode(['Python', 'Django', 'Tailwind CSS', 'NLTK (NLP)', 'SQLite', 'Pandas']),
                'is_featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Workspace OS Migration — Clean Install & Tuning 25 PC',
                'slug' => 'workspace-os-migration-clean-install-tuning-25-pc',
                'category' => 'windows',
                'description' => 'Layanan migrasi sistem operasi Windows 11 Professional Original secara clean install untuk 25 unit komputer kerja di kantor startup. Termasuk pembersihan total drive lama, setting up active directory lokal, lisensi resmi, serta optimalisasi performa Windows.',
                'image_url' => 'windows_deploy.png',
                'demo_url' => null,
                'technology' => json_encode(['Windows 11 Pro', 'Active Directory', 'Registry Optimizations', 'Driver Update', 'Remote AnyDesk']),
                'is_featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
