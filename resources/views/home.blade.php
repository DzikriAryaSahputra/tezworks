@extends('layouts.landing')

@section('title', 'TezWorks — Jasa Pembuatan Aplikasi & Website Profesional')

@section('content')
<!-- ======= HERO SECTION ======= -->
<section id="hero" class="relative overflow-hidden pt-12 pb-20 md:py-32 bg-light-bg dark:bg-dark-bg transition-colors duration-300">
  <!-- Glowing Background Grid -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:30px_30px] dark:bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)]"></div>
  
  <!-- Glowing Abstract Orbs -->
  <div class="absolute top-1/4 left-1/10 w-72 h-72 rounded-full bg-brand-blue/10 dark:bg-brand-blue/20 blur-3xl"></div>
  <div class="absolute bottom-1/4 right-1/10 w-96 h-96 rounded-full bg-brand-cyan/10 dark:bg-brand-cyan/20 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
      
      <!-- Left Content -->
      <div class="lg:col-span-7 text-left space-y-6">
        <!-- New Release Badge -->
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-semibold bg-brand-blue/5 border border-brand-blue/10 text-brand-blue dark:bg-brand-cyan/5 dark:border-brand-cyan/10 dark:text-brand-cyan">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Tersedia untuk Proyek Baru</span>
        </div>
        
        <!-- Slogan -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.1] text-light-text dark:text-dark-text">
          Wujudkan Ide Digital <br/>
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Tanpa Batas</span>
        </h1>
        
        <!-- Description -->
        <p class="text-lg text-light-text-sec dark:text-dark-text-sec leading-relaxed max-w-xl">
          Saya membantu individu, UMKM, dan mahasiswa mewujudkan ide digital mereka — dari <strong>website profesional</strong>, <strong>aplikasi mobile</strong>, <strong>instalasi windows</strong>, hingga <strong>joki tugas pemrograman</strong> — dengan pengerjaan yang cepat, transparan, dan harga yang jujur.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 pt-2">
          <a href="#contact" class="flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white px-8 py-4 rounded-xl font-bold shadow-lg shadow-brand-blue/30 hover:shadow-brand-blue-hover/40 transition-all duration-200 group">
            <span>Mulai Proyek Sekarang</span>
            <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
          <a href="{{ route('portfolio') }}" class="flex items-center justify-center gap-2 bg-light-bg dark:bg-dark-bg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec border border-light-border dark:border-dark-border px-8 py-4 rounded-xl font-bold transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"></path></svg>
            <span>Lihat Portfolio</span>
          </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6 pt-8 border-t border-light-border dark:border-dark-border max-w-lg">
          <div>
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">5+</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Proyek Selesai</span>
          </div>
          <div>
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">100%</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Klien Puas</span>
          </div>
          <div>
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">Solo</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Freelancer</span>
          </div>
        </div>

      </div>

      <!-- Right Visuals -->
      <div class="lg:col-span-5 relative hidden lg:block">
        
        <!-- Floating Visual Cards -->
        <div class="absolute -top-8 -left-8 bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce [animation-duration:6s] z-20">
          <div class="w-9 h-9 rounded-xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253"/></svg>
          </div>
          <div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Web Development</h4>
            <span class="text-xs text-light-text-sec dark:text-dark-text-sec font-medium">Responsive & Fast</span>
          </div>
        </div>

        <div class="absolute bottom-12 -right-6 bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce [animation-duration:8s] z-20">
          <div class="w-9 h-9 rounded-xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 8.25h3"/></svg>
          </div>
          <div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Mobile Application</h4>
            <span class="text-xs text-light-text-sec dark:text-dark-text-sec font-medium">iOS & Android</span>
          </div>
        </div>

        <div class="absolute top-1/2 -left-12 bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce [animation-duration:7s] z-20">
          <div class="w-9 h-9 rounded-xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
          </div>
          <div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Fast Delivery</h4>
            <span class="text-xs text-light-text-sec dark:text-dark-text-sec font-medium">On-Time Guaranteed</span>
          </div>
        </div>

        <!-- Hexagon Technology Shield Mockup -->
        <div class="relative w-80 h-80 mx-auto bg-gradient-to-tr from-brand-blue/10 to-brand-cyan/20 dark:from-brand-blue/20 dark:to-brand-cyan/10 border border-brand-blue/20 dark:border-brand-cyan/20 rounded-[40px] flex items-center justify-center p-8 backdrop-blur-sm">
          <div class="w-full h-full bg-light-bg/60 dark:bg-dark-bg/60 rounded-[30px] border border-light-border dark:border-dark-border flex flex-col justify-center items-center text-center p-6 gap-3">
            <svg class="w-16 h-16 text-brand-blue dark:text-brand-cyan" viewBox="0 0 32 32" fill="currentColor"><path d="M16 2L2 9.5v13L16 30l14-7.5v-13L16 2zm0 2.31L28 10.8v10.4L16 27.69 4 21.2V10.8L16 4.31z"/></svg>
            <h3 class="text-xl font-bold tracking-tight">TezWorks Studio</h3>
            <p class="text-xs text-light-text-sec dark:text-dark-text-sec max-w-[200px]">
              Menghubungkan Ide Anda dengan Keunggulan Teknologi Digital.
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ======= LAYANAN SECTION ======= -->
<section id="services" class="py-20 bg-light-bg-sec dark:bg-dark-bg-sec border-y border-light-border dark:border-dark-border transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
      <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Layanan Kami</span>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Solusi Digital <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Terlengkap</span></h2>
      <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
        Dari pembuatan website bisnis, aplikasi mobile, bantuan joki tugas coding mahasiswa, hingga instalasi OS komputer. Kami siap melayani online dan offline!
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach($services as $service)
      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 transition-all duration-300 flex flex-col justify-between group">
        <div class="space-y-4">
          <!-- Icon Circle -->
          <div class="w-14 h-14 bg-brand-blue/5 dark:bg-brand-cyan/5 rounded-2xl flex items-center justify-center text-brand-blue dark:text-brand-cyan border border-brand-blue/10 dark:border-brand-cyan/10 group-hover:scale-110 transition-transform duration-300">
            {!! $service->icon !!}
          </div>
          
          <h3 class="text-xl font-bold text-light-text dark:text-dark-text group-hover:text-brand-blue dark:group-hover:text-brand-cyan transition-colors">{{ $service->title }}</h3>
          
          <p class="text-light-text-sec dark:text-dark-text-sec text-sm leading-relaxed">{{ $service->description }}</p>

          @if($service->price_range)
          <div class="pt-2">
            <div class="inline-flex items-center gap-2 px-4 py-2.5 bg-gradient-to-r from-brand-blue to-brand-cyan text-white rounded-xl shadow-lg shadow-brand-blue/20 hover:scale-105 transition-transform duration-300">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <span class="font-extrabold tracking-wide text-sm">{{ $service->price_range }}</span>
            </div>
          </div>
          @endif
          
          <!-- Key Features list -->
          <ul class="space-y-2.5 pt-3">
            @if(is_array($service->features))
              @foreach($service->features as $feature)
              <li class="flex items-start gap-2.5 text-xs text-light-text-sec dark:text-dark-text-sec">
                <span class="text-brand-blue dark:text-brand-cyan">✓</span>
                <span class="font-medium">{{ $feature }}</span>
              </li>
              @endforeach
            @endif
          </ul>
        </div>

        <div class="pt-6 mt-6 border-t border-light-border/50 dark:border-dark-border/50 flex items-center justify-between text-xs font-semibold text-brand-blue dark:text-brand-cyan">
          <span>Konsultasi & Mulai</span>
          <a href="#contact" class="flex items-center gap-1 hover:underline group-hover:translate-x-1 transition-transform">
            <span>Hubungi Kami</span>
            <span>→</span>
          </a>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>

<!-- ======= TENTANG KAMI SECTION ======= -->
<section id="about" class="py-20 bg-light-bg dark:bg-dark-bg transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Visual left side -->
      <div class="lg:col-span-5 relative flex justify-center">
        <!-- Main Image Card Mockup -->
        <div class="relative w-80 h-96 bg-light-bg-sec dark:bg-dark-bg-sec border border-light-border dark:border-dark-border rounded-3xl p-6 shadow-xl overflow-hidden backdrop-blur-md">
          <div class="absolute inset-0 bg-gradient-to-tr from-brand-blue/5 to-brand-cyan/10"></div>
          
          <!-- Skill Badges Inside Visual Card -->
          <div class="relative z-10 flex flex-col justify-between h-full">
            <div class="space-y-3">
              <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Expertise Tech Stack</span>
              <h3 class="text-xl font-bold tracking-tight">Keahlian Kami</h3>
              <p class="text-xs text-light-text-sec dark:text-dark-text-sec">
                Kami selalu menggunakan teknologi modern yang scalable dan cepat.
              </p>
            </div>
            
            <div class="grid grid-cols-3 gap-2.5 pt-6">
              @foreach(['Java', 'React', 'PHP', 'Kotlin', 'Laravel', 'Flutter', 'Node.js', 'PostgreSQL', 'Python','JavaScript', 'MySQL', 'Firebase'] as $tech)
              <span class="px-2 py-1.5 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-lg text-[10px] font-bold text-center text-light-text dark:text-dark-text shadow-sm hover:scale-105 transition-transform duration-200">
                {{ $tech }}
              </span>
              @endforeach
            </div>
            
            <!-- Availability badge -->
            <div class="mt-4 p-3 bg-brand-blue text-white rounded-2xl flex items-center justify-between shadow-lg shadow-brand-blue/20">
              <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
              <div class="text-right">
                <span class="block text-sm font-extrabold">Tersedia Sekarang</span>
                <span class="text-[9px] text-brand-blue-soft font-semibold uppercase">Siap Terima Proyek Baru</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content right side -->
      <div class="lg:col-span-7 space-y-6">
        <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Tentang Saya</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Freelancer Teknologi yang <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Jujur & Terpercaya</span></h2>
        
        <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
          Halo, saya <strong>Dzikri</strong> — seorang freelancer developer independen yang berfokus pada pembuatan website, aplikasi mobile, bantuan joki tugas pemrograman, dan instalasi sistem Windows. Saya mengerjakan setiap proyek secara langsung tanpa perantara.
        </p>
        <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
          Saya percaya bahwa kejujuran adalah fondasi kepercayaan. Setiap proyek dikerjakan dengan serius, transparan sejak awal hingga selesai, dan dengan harga yang disepakati bersama tanpa biaya tersembunyi.
        </p>

        <!-- Values List -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-6 border-t border-light-border dark:border-dark-border">
          <div class="space-y-2">
            <div class="w-9 h-9 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
            </div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Cepat & Tepat</h4>
            <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
              Pengiriman pengerjaan tepat waktu dengan jaminan kualitas tinggi.
            </p>
          </div>
          <div class="space-y-2">
            <div class="w-9 h-9 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
            </div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Keamanan Terjamin</h4>
            <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
              Standar perlindungan data klien dan privasi source code yang ketat.
            </p>
          </div>
          <div class="space-y-2">
            <div class="w-9 h-9 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
            </div>
            <h4 class="font-bold text-sm text-light-text dark:text-dark-text">Inovasi Terkini</h4>
            <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
              Teknologi termodern untuk memastikan aplikasi berumur panjang.
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ======= KEUNGGULAN SECTION ======= -->
<section id="advantages" class="py-20 bg-light-bg-sec dark:bg-dark-bg-sec border-y border-light-border dark:border-dark-border transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
      <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Mengapa Memilih Kami</span>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Komitmen Keunggulan <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">TezWorks</span></h2>
      <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
        Kami menghadirkan integritas profesional penuh pada setiap baris kode pemrograman dan instalasi sistem yang kami kerjakan.
      </p>
    </div>

    <!-- Advantages Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm space-y-3">
        <div class="w-11 h-11 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
          <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/></svg>
        </div>
        <h3 class="font-bold text-base text-light-text dark:text-dark-text">Kode Bersih & Cepat</h3>
        <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Kode program ditulis dengan struktur standar enterprise, terdokumentasi rapi, ringan, dan sangat mudah dikembangkan ke depannya.
        </p>
      </div>

      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm space-y-3">
        <div class="w-11 h-11 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
          <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
        </div>
        <h3 class="font-bold text-base text-light-text dark:text-dark-text">Garansi & Support</h3>
        <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Setiap proyek bergaransi bebas dari bug (error). Kami juga selalu siap melayani dukungan teknis darurat kapan pun Anda butuhkan.
        </p>
      </div>

      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm space-y-3">
        <div class="w-11 h-11 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
          <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="font-bold text-base text-light-text dark:text-dark-text">Transparansi Proses</h3>
        <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Tidak ada kejutan di tengah jalan. Anda akan menerima update progress pengerjaan berkala secara transparan melalui Git repository maupun video.
        </p>
      </div>

      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm space-y-3">
        <div class="w-11 h-11 rounded-xl bg-brand-blue/5 dark:bg-brand-cyan/5 border border-brand-blue/10 dark:border-brand-cyan/10 flex items-center justify-center">
          <svg class="w-5 h-5 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-base text-light-text dark:text-dark-text">Jujur & Terjangkau</h3>
        <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Harga pengerjaan yang jujur, kompetitif, dan disepakati di awal tanpa biaya tambahan di tengah jalan.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ======= PORTFOLIO PREVIEW SECTION ======= -->
<section id="portfolio-preview" class="py-20 bg-light-bg dark:bg-dark-bg transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
      <div class="space-y-3 max-w-2xl text-left">
        <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Karya Terbaik</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Portofolio <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Terbaru Kami</span></h2>
        <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
          Lihat beberapa contoh proyek aplikasi dan website yang telah sukses kami selesaikan dengan standar kualitas premium.
        </p>
      </div>
      <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 bg-light-bg dark:bg-dark-bg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec border border-light-border dark:border-dark-border px-6 py-3.5 rounded-xl font-bold transition-all duration-200 self-start md:self-auto shrink-0 text-sm">
        <span>Lihat Semua Proyek</span>
        <span>→</span>
      </a>
    </div>

    <!-- Portfolio Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach($featuredPortfolios as $portfolio)
      <div class="group bg-light-bg-sec dark:bg-dark-bg-sec border border-light-border dark:border-dark-border rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:border-brand-blue/20 transition-all duration-300 flex flex-col justify-between">
        
        <!-- visual background mock -->
        <div class="relative h-56 bg-gradient-to-br from-brand-blue/5 to-brand-cyan/5 dark:from-brand-blue/10 dark:to-brand-cyan/5 border-b border-light-border dark:border-dark-border flex items-center justify-center p-8 overflow-hidden group-hover:bg-brand-blue/10 dark:group-hover:bg-brand-cyan/10 transition-colors duration-300">
          @if($portfolio->image_url)
            <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-t from-light-bg-sec/90 via-transparent to-transparent dark:from-dark-bg-sec/90"></div>
          @else
            <!-- Glow Orb -->
            <div class="absolute w-48 h-48 rounded-full bg-brand-blue/10 dark:bg-brand-cyan/10 blur-2xl group-hover:scale-125 transition-transform duration-500"></div>
            
            <div class="relative z-10 text-center space-y-2 group-hover:scale-105 transition-transform duration-300">
              <span class="text-4xl">⬡</span>
              <h4 class="font-extrabold text-lg text-light-text dark:text-dark-text">{{ $portfolio->title }}</h4>
            </div>
          @endif
          
          <span class="absolute top-4 right-4 z-20 inline-block text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 bg-white/80 dark:bg-dark-bg/80 backdrop-blur-md border border-light-border dark:border-dark-border rounded-full text-light-text dark:text-dark-text shadow-sm">
            @if($portfolio->category === 'website') Website @elseif($portfolio->category === 'mobile') Mobile App @elseif($portfolio->category === 'joki') Joki Coding @else OS Install @endif
          </span>
        </div>

        <!-- Info -->
        <div class="p-6 space-y-4 flex-grow flex flex-col justify-between">
          <div class="space-y-2">
            <h3 class="text-lg font-bold text-light-text dark:text-dark-text group-hover:text-brand-blue dark:group-hover:text-brand-cyan transition-colors">{{ $portfolio->title }}</h3>
            <p class="text-light-text-sec dark:text-dark-text-sec text-xs leading-relaxed line-clamp-3">
              {{ $portfolio->description }}
            </p>
          </div>

          <!-- Technologies -->
          <div class="space-y-3">
            <div class="flex flex-wrap gap-1.5">
              @if(is_array($portfolio->technology))
                @foreach($portfolio->technology as $tech)
                <span class="px-2.5 py-1 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-lg text-[9px] font-bold text-light-text-sec dark:text-dark-text-sec shadow-xs">
                  {{ $tech }}
                </span>
                @endforeach
              @endif
            </div>
            
            @if($portfolio->demo_url)
            <div class="pt-2 border-t border-light-border/40 dark:border-dark-border/40 flex justify-end">
              <a href="{{ $portfolio->demo_url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-[11px] font-bold text-brand-blue dark:text-brand-cyan hover:underline">
                <span>Kunjungi Demo</span>
                <span>↗</span>
              </a>
            </div>
            @endif
          </div>
        </div>

      </div>
      @endforeach
    </div>

  </div>
</section>

<!-- ======= KEPERCAYAAN SECTION ======= -->
<section id="testimonials" class="py-16 sm:py-24 bg-light-bg-sec dark:bg-dark-bg-sec border-y border-light-border dark:border-dark-border transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center max-w-2xl mx-auto space-y-4 mb-12 sm:mb-16">
      <span class="text-sm font-bold uppercase tracking-widest text-brand-blue dark:text-brand-cyan">Komitmen Saya</span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-light-text dark:text-dark-text">
        Kenapa Percayakan ke <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Saya?</span>
      </h2>
      <p class="text-light-text-sec dark:text-dark-text-sec text-base sm:text-lg leading-relaxed">
        Masih dalam tahap awal perjalanan freelance, namun saya memegang teguh kualitas, transparansi, dan tanggung jawab penuh di setiap proyek.
      </p>
    </div>

    <!-- Trust Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
      
      <!-- Card 1 -->
      <div class="group bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-8 rounded-3xl shadow-sm hover:shadow-md hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 transition-all duration-300">
        <div class="w-14 h-14 rounded-2xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center mb-6 group-hover:-translate-y-1 transition-transform duration-300">
          <svg class="w-7 h-7 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
        </div>
        <h3 class="font-bold text-lg text-light-text dark:text-dark-text mb-3">Dikerjakan Langsung</h3>
        <p class="text-sm text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Setiap baris kode saya tulis sendiri. Tidak ada perantara atau pihak ketiga, sehingga komunikasi lebih akurat dan hasil lebih terjamin sesuai harapan Anda.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="group bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-8 rounded-3xl shadow-sm hover:shadow-md hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 transition-all duration-300">
        <div class="w-14 h-14 rounded-2xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center mb-6 group-hover:-translate-y-1 transition-transform duration-300">
          <svg class="w-7 h-7 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-lg text-light-text dark:text-dark-text mb-3">Harga & Deadline Pasti</h3>
        <p class="text-sm text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Kita sepakati budget dan waktu pengerjaan di awal. Tidak ada biaya siluman atau kemunduran jadwal pengerjaan secara sepihak tanpa persetujuan Anda.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="group bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-8 rounded-3xl shadow-sm hover:shadow-md hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 transition-all duration-300">
        <div class="w-14 h-14 rounded-2xl bg-brand-blue/10 dark:bg-brand-cyan/10 flex items-center justify-center mb-6 group-hover:-translate-y-1 transition-transform duration-300">
          <svg class="w-7 h-7 text-brand-blue dark:text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
        </div>
        <h3 class="font-bold text-lg text-light-text dark:text-dark-text mb-3">Source Code Hak Anda</h3>
        <p class="text-sm text-light-text-sec dark:text-dark-text-sec leading-relaxed">
          Setelah proyek selesai dan dilunasi, seluruh hak cipta, akses, dan source code diserahkan sepenuhnya kepada Anda. Tidak ada vendor lock-in.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ======= CONTACT SECTION ======= -->
<section id="contact" class="py-24 lg:py-32 bg-light-bg-sec dark:bg-dark-bg-sec relative overflow-hidden transition-colors duration-300">
  
  <!-- Subtle Background Glow -->
  <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-brand-blue/10 dark:bg-brand-cyan/5 rounded-full blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <span class="text-sm font-bold uppercase tracking-widest text-brand-blue dark:text-brand-cyan">Hubungi Saya</span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-light-text dark:text-dark-text">
        Mari Mulai <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Proyek Anda</span>
      </h2>
      <p class="text-light-text-sec dark:text-dark-text-sec text-base sm:text-lg leading-relaxed">
        Ceritakan ide brilian Anda atau sampaikan kebutuhan IT Anda. Saya siap membantu mewujudkannya dengan solusi terbaik.
      </p>
    </div>

    <!-- The Premium Unified Card -->
    <div class="bg-white dark:bg-dark-card rounded-3xl shadow-2xl overflow-hidden border border-light-border dark:border-dark-border flex flex-col lg:flex-row">
      
      <!-- Left Side: Info & Map -->
      <div class="w-full lg:w-5/12 bg-light-bg dark:bg-dark-bg flex flex-col border-b lg:border-b-0 lg:border-r border-light-border dark:border-dark-border">
        
        <!-- Text & Info -->
        <div class="p-8 sm:p-12 flex-grow space-y-10">
          <div>
            <h3 class="text-2xl font-bold text-light-text dark:text-dark-text mb-3">Informasi Kontak</h3>
            <p class="text-light-text-sec dark:text-dark-text-sec text-sm leading-relaxed">
              Jangan ragu untuk menghubungi saya secara langsung melalui WhatsApp atau Email untuk respon yang lebih cepat.
            </p>
          </div>

          <div class="space-y-6">
            <!-- WhatsApp -->
            <a href="https://wa.me/6283112540839" target="_blank" rel="noopener" class="flex items-center gap-5 group">
              <div class="w-12 h-12 rounded-full bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.553 4.12 1.524 5.855L.057 23.571a.5.5 0 00.61.646l5.88-1.543A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.942 9.942 0 01-5.127-1.414l-.36-.214-3.742.982.998-3.648-.235-.374A9.945 9.945 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
              </div>
              <div>
                <strong class="block text-sm font-bold text-light-text dark:text-dark-text group-hover:text-emerald-500 transition-colors">WhatsApp</strong>
                <span class="text-sm text-light-text-sec dark:text-dark-text-sec">+62 831-1254-0839</span>
              </div>
            </a>
            
            <!-- Email -->
            <a href="mailto:hello@tezworks.my.id" class="flex items-center gap-5 group">
              <div class="w-12 h-12 rounded-full bg-brand-blue/10 dark:bg-brand-cyan/10 text-brand-blue dark:text-brand-cyan flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white dark:group-hover:bg-brand-cyan transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              </div>
              <div>
                <strong class="block text-sm font-bold text-light-text dark:text-dark-text group-hover:text-brand-blue dark:group-hover:text-brand-cyan transition-colors">Email</strong>
                <span class="text-sm text-light-text-sec dark:text-dark-text-sec">hello@tezworks.my.id</span>
              </div>
            </a>

            <!-- Location Label -->
            <div class="flex items-center gap-5">
              <div class="w-12 h-12 rounded-full bg-indigo-500/10 text-indigo-500 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              </div>
              <div>
                <strong class="block text-sm font-bold text-light-text dark:text-dark-text">Lokasi</strong>
                <span class="text-sm text-light-text-sec dark:text-dark-text-sec">Tersedia Online & Offline</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Integrated Full-Width Map with Dark Mode Filter -->
        <div class="h-64 sm:h-72 w-full relative bg-light-border dark:bg-dark-border">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d498.51921771018283!2d103.5616506!3d-1.6551156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258799a9b47297%3A0x9b8e8f85972f1d2d!2sTezworks%20-%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1779373032910!5m2!1sid!2sid" 
            class="absolute inset-0 w-full h-full opacity-90 hover:opacity-100 dark:invert dark:grayscale dark:contrast-125 transition-all duration-300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Right Side: Contact Form -->
      <div class="w-full lg:w-7/12 p-8 sm:p-12 lg:p-16 relative">
        <form id="contact-form" class="space-y-6">
          @csrf
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="name" class="text-[11px] font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec">Nama Lengkap</label>
              <input type="text" id="name" name="name" placeholder="Budi Santoso" class="w-full px-4 py-3.5 bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm text-light-text dark:text-dark-text focus:outline-none focus:ring-2 focus:ring-brand-blue/20 dark:focus:ring-brand-cyan/20 transition-all placeholder:text-light-text-sec/40 dark:placeholder:text-dark-text-sec/40" required />
            </div>
            
            <div class="space-y-2">
              <label for="email" class="text-[11px] font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec">Email Aktif</label>
              <input type="email" id="email" name="email" placeholder="budi@email.com" class="w-full px-4 py-3.5 bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm text-light-text dark:text-dark-text focus:outline-none focus:ring-2 focus:ring-brand-blue/20 dark:focus:ring-brand-cyan/20 transition-all placeholder:text-gray-400 dark:placeholder:text-gray-600" required />
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="service" class="text-[11px] font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec">Jenis Layanan</label>
              <select id="service" name="service" class="w-full px-4 py-3.5 bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm text-light-text dark:text-dark-text focus:outline-none focus:ring-2 focus:ring-brand-blue/20 dark:focus:ring-brand-cyan/20 transition-all appearance-none cursor-pointer">
                <option value="" class="text-light-text-sec/40 dark:text-dark-text-sec/40">-- Pilih layanan --</option>
                <option value="website" class="bg-white dark:bg-dark-card">Website Development</option>
                <option value="mobile" class="bg-white dark:bg-dark-card">Application Development</option>
                <option value="joki" class="bg-white dark:bg-dark-card">Joki Tugas Pemrograman</option>
                <option value="windows" class="bg-white dark:bg-dark-card">Instalasi Windows & Software</option>
              </select>
            </div>
            
            <div class="space-y-2">
              <label for="budget" class="text-[11px] font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec">Estimasi Budget</label>
              <input type="text" id="budget" name="budget" placeholder="Misal: Rp 5.000.000" class="w-full px-4 py-3.5 bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm text-light-text dark:text-dark-text focus:outline-none focus:ring-2 focus:ring-brand-blue/20 dark:focus:ring-brand-cyan/20 transition-all placeholder:text-gray-400 dark:placeholder:text-gray-600" />
            </div>
          </div>

          <div class="space-y-2">
            <label for="message" class="text-[11px] font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec">Detail Proyek / Pesan</label>
            <textarea id="message" name="message" rows="4" placeholder="Jelaskan kebutuhan aplikasi, website, atau tugas Anda..." class="w-full px-4 py-3.5 bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm text-light-text dark:text-dark-text focus:outline-none focus:ring-2 focus:ring-brand-blue/20 dark:focus:ring-brand-cyan/20 transition-all resize-y placeholder:text-gray-400 dark:placeholder:text-gray-600" required></textarea>
          </div>

          <!-- Alert Container -->
          <div id="form-alert" class="hidden p-4 rounded-xl text-sm font-semibold"></div>

          <!-- Submit Button -->
          <button type="submit" id="submit-btn" class="w-full flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white py-4 rounded-xl font-bold shadow-lg shadow-brand-blue/20 transition-all duration-300 cursor-pointer mt-4 group">
            <span id="btn-text">Kirim & Mulai Konsultasi</span>
            <svg id="btn-icon" class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            <svg id="btn-spinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
          </button>
        </form>

        <!-- Success Modal (Hidden by default) -->
        <div id="success-modal" class="hidden absolute inset-0 z-50 flex items-center justify-center p-6 bg-white/95 dark:bg-dark-card/95 backdrop-blur-sm">
          <div class="text-center space-y-4 max-w-sm w-full animate-scaleUp">
            <div class="w-16 h-16 mx-auto rounded-full bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center">
              <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
            </div>
            <h3 class="text-2xl font-extrabold text-light-text dark:text-white">Pesan Terkirim!</h3>
            <p class="text-sm text-light-text-sec dark:text-gray-400 leading-relaxed">
              Data Anda telah tersimpan dengan aman. Anda akan segera dialihkan ke WhatsApp...
            </p>
            <div class="w-full bg-light-border dark:bg-[#2A3547] h-1.5 rounded-full overflow-hidden mt-6">
              <div class="bg-emerald-500 h-full w-full animate-loader"></div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Inline AJAX Form Submission Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnIcon = document.getElementById('btn-icon');
    const btnSpinner = document.getElementById('btn-spinner');
    const formAlert = document.getElementById('form-alert');
    const successModal = document.getElementById('success-modal');

    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      // Reset State
      formAlert.classList.add('hidden');
      formAlert.innerHTML = '';
      
      // Loading state
      submitBtn.disabled = true;
      btnText.textContent = 'Menyimpan Detail Proyek...';
      btnIcon.classList.add('hidden');
      btnSpinner.classList.remove('hidden');

      const formData = new FormData(contactForm);

      try {
        const response = await fetch("{{ route('contact.submit') }}", {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });

        const data = await response.json();

        if (response.ok && data.success) {
          // Tampilkan ulasan sukses modal
          successModal.classList.remove('hidden');
          
          // Reset Form input
          contactForm.reset();

          // Tunggu 2 detik, lalu redirect ke WhatsApp
          setTimeout(() => {
            window.open(data.redirect_url, '_blank');
            successModal.classList.add('hidden');
          }, 2000);

        } else {
          throw new Error(data.message || 'Terjadi kesalahan sistem, silakan coba lagi.');
        }

      } catch (err) {
        // Tampilkan Error
        formAlert.classList.remove('hidden');
        formAlert.className = 'p-4 rounded-xl text-xs font-semibold bg-rose-500/10 text-rose-500 border border-rose-500/20';
        formAlert.textContent = err.message || 'Terjadi masalah jaringan, mohon coba kembali.';
      } finally {
        // Kembalikan Button state
        submitBtn.disabled = false;
        btnText.textContent = 'Kirim & Lanjut ke WhatsApp Business';
        btnIcon.classList.remove('hidden');
        btnSpinner.classList.add('hidden');
      }
    });
  });
</script>

<style>
  /* Custom simple animations for success modal */
  @keyframes scaleUp {
    from {
      transform: scale(0.9);
      opacity: 0;
    }
    to {
      transform: scale(1);
      opacity: 1;
    }
  }
  @keyframes loader {
    from { width: 0%; }
    to { width: 100%; }
  }
  .animate-scaleUp {
    animation: scaleUp 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  .animate-loader {
    animation: loader 2s linear forwards;
  }
</style>
@endsection
