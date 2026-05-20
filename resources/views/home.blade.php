@extends('layouts.app')

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
          Kami merancang dan membangun <strong>aplikasi mobile premium</strong> & <strong>website profesional</strong> kelas dunia — dari konsep hingga rilis, dengan proses yang cepat, aman, dan transparan.
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
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">150+</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Proyek Selesai</span>
          </div>
          <div>
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">98%</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Klien Puas</span>
          </div>
          <div>
            <span class="block text-3xl sm:text-4xl font-extrabold text-light-text dark:text-dark-text">5+</span>
            <span class="text-xs sm:text-sm text-light-text-sec dark:text-dark-text-sec">Tahun Pengalaman</span>
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
              @foreach(['React', 'Next.js', 'Laravel', 'Flutter', 'Node.js', 'PostgreSQL', 'Python', 'AWS', 'Firebase'] as $tech)
              <span class="px-2 py-1.5 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-lg text-[10px] font-bold text-center text-light-text dark:text-dark-text shadow-sm hover:scale-105 transition-transform duration-200">
                {{ $tech }}
              </span>
              @endforeach
            </div>
            
            <!-- Experience badge melayang -->
            <div class="mt-4 p-3 bg-brand-blue text-white rounded-2xl flex items-center justify-between shadow-lg shadow-brand-blue/20">
              <svg class="w-6 h-6 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
              <div class="text-right">
                <span class="block text-sm font-extrabold">5+ Tahun</span>
                <span class="text-[9px] text-brand-blue-soft font-semibold uppercase">Pengalaman Kerja</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content right side -->
      <div class="lg:col-span-7 space-y-6">
        <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Tentang Kami</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Partner Teknologi yang <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Berorientasi Solusi</span></h2>
        
        <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
          TezWorks adalah studio digital profesional dengan visi membantu menyederhanakan proses digitalisasi bagi para pelaku bisnis, UMKM, perkantoran, dan membantu mahasiswa teknik informatika dalam menuntaskan projek/tugas pemrograman mereka.
        </p>
        <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
          Kami tidak hanya sekadar membuat baris kode program, namun kami mendengarkan visi Anda, merancang arsitektur produk yang efisien, dan menghantarkan solusi teknologi yang nyata untuk perkembangan usaha jangka panjang Anda.
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
        <h3 class="font-bold text-base text-light-text dark:text-dark-text">Garansi & Support 24/7</h3>
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
        <div class="relative h-56 bg-gradient-to-br from-brand-blue/5 to-brand-cyan/5 dark:from-brand-blue/10 dark:to-brand-cyan/5 border-b border-light-border dark:border-dark-border flex items-center justify-center p-8 overflow-hidden">
          <!-- Glow Orb -->
          <div class="absolute w-48 h-48 rounded-full bg-brand-blue/10 dark:bg-brand-cyan/10 blur-2xl group-hover:scale-125 transition-transform duration-500"></div>
          
          <div class="relative z-10 text-center space-y-2 group-hover:scale-105 transition-transform duration-300">
            <span class="text-4xl">⬡</span>
            <h4 class="font-extrabold text-lg text-light-text dark:text-dark-text">{{ $portfolio->title }}</h4>
            <span class="inline-block text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 bg-white/80 dark:bg-dark-bg/80 border border-light-border dark:border-dark-border rounded-full text-light-text dark:text-dark-text">
              @if($portfolio->category === 'website') Website @elseif($portfolio->category === 'mobile') Mobile App @elseif($portfolio->category === 'joki') Joki Coding @else OS Install @endif
            </span>
          </div>
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

<!-- ======= TESTIMONI SECTION ======= -->
<section id="testimonials" class="py-20 bg-light-bg-sec dark:bg-dark-bg-sec border-y border-light-border dark:border-dark-border transition-colors duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
      <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Ulasan Klien</span>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Apa Kata <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Klien Kami?</span></h2>
      <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed">
        Kepuasan pelanggan adalah prioritas nomor satu kami. Berikut review asli ulasan dari klien-klien kami.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="text-amber-500 text-sm">★★★★★</div>
          <p class="text-light-text-sec dark:text-dark-text-sec text-xs leading-relaxed italic">
            "TezWorks merancang sistem aplikasi Fintech kami dengan sangat andal. Proses pengembangannya transparan dan terstruktur, timnya juga super responsif. Hasilnya melampaui ekspektasi kami!"
          </p>
        </div>
        <div class="flex items-center gap-3 pt-4 border-t border-light-border/40 dark:border-dark-border/40">
          <div class="w-10 h-10 rounded-full bg-brand-blue text-white font-extrabold text-sm flex items-center justify-center">
            AR
          </div>
          <div>
            <h4 class="font-bold text-xs text-light-text dark:text-dark-text">Ahmad Rizky</h4>
            <span class="text-[10px] text-light-text-sec dark:text-dark-text-sec">CEO, FinPay Indonesia</span>
          </div>
        </div>
      </div>

      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="text-amber-500 text-sm">★★★★★</div>
          <p class="text-light-text-sec dark:text-dark-text-sec text-xs leading-relaxed italic">
            "Pembuatan website profil korporat kami ditangani sangat profesional. Desainnya sangat modern, rapi, dan loading websitenya super cepat. Konversi traffic kami naik 300% setelah launch!"
          </p>
        </div>
        <div class="flex items-center gap-3 pt-4 border-t border-light-border/40 dark:border-dark-border/40">
          <div class="w-10 h-10 rounded-full bg-brand-cyan text-white font-extrabold text-sm flex items-center justify-center">
            SR
          </div>
          <div>
            <h4 class="font-bold text-xs text-light-text dark:text-dark-text">Sari Rahayu</h4>
            <span class="text-[10px] text-light-text-sec dark:text-dark-text-sec">Marketing Director, Nexora</span>
          </div>
        </div>
      </div>

      <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-6 rounded-2xl shadow-sm flex flex-col justify-between space-y-6">
        <div class="space-y-4">
          <div class="text-amber-500 text-sm">★★★★★</div>
          <p class="text-light-text-sec dark:text-dark-text-sec text-xs leading-relaxed italic">
            "Sangat merekomendasikan joki tugas pemrograman di TezWorks! Tugas praktikum UAS coding Python AI saya beres dengan nilai sempurna, kodenya bersih dengan penjelasan lengkap yang mudah saya pelajari."
          </p>
        </div>
        <div class="flex items-center gap-3 pt-4 border-t border-light-border/40 dark:border-dark-border/40">
          <div class="w-10 h-10 rounded-full bg-indigo-500 text-white font-extrabold text-sm flex items-center justify-center">
            DA
          </div>
          <div>
            <h4 class="font-bold text-xs text-light-text dark:text-dark-text">Diki Aditya</h4>
            <span class="text-[10px] text-light-text-sec dark:text-dark-text-sec">Mahasiswa Informatika, Universitas Indonesia</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======= CONTACT SECTION ======= -->
<section id="contact" class="py-20 bg-light-bg dark:bg-dark-bg transition-colors duration-300 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-start">
      
      <!-- Info Left Side -->
      <div class="lg:col-span-5 space-y-6">
        <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Hubungi Kami</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Siap Memulai <br/>
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Proyek Impian Anda?</span>
        </h2>
        
        <p class="text-light-text-sec dark:text-dark-text-sec text-sm leading-relaxed max-w-md">
          Konsultasikan kebutuhan Anda gratis tanpa dipungut biaya apa pun. Silakan ceritakan ide proyek digital Anda atau bantuan coding yang Anda inginkan, kami akan menganalisisnya secara profesional.
        </p>

        <div class="space-y-4 pt-4">
          <!-- WhatsApp Channel -->
          <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 border border-light-border dark:border-dark-border hover:border-emerald-500/30 rounded-2xl bg-light-bg-sec dark:bg-dark-bg-sec hover:bg-emerald-500/5 transition-all duration-300 group">
            <div class="p-2.5 bg-emerald-500/10 rounded-xl">
              <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.553 4.12 1.524 5.855L.057 23.571a.5.5 0 00.61.646l5.88-1.543A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.942 9.942 0 01-5.127-1.414l-.36-.214-3.742.982.998-3.648-.235-.374A9.945 9.945 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            </div>
            <div>
              <strong class="block text-sm text-light-text dark:text-dark-text group-hover:text-emerald-500 transition-colors">WhatsApp Business</strong>
              <span class="text-xs text-light-text-sec dark:text-dark-text-sec">+62 812-3456-7890</span>
            </div>
          </a>

          <!-- Email Channel -->
          <a href="mailto:hello@tezworks.id" class="flex items-center gap-4 p-4 border border-light-border dark:border-dark-border hover:border-brand-blue/30 rounded-2xl bg-light-bg-sec dark:bg-dark-bg-sec hover:bg-brand-blue/5 transition-all duration-300 group">
            <div class="p-2.5 bg-brand-blue/10 rounded-xl">
              <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
            </div>
            <div>
              <strong class="block text-sm text-light-text dark:text-dark-text group-hover:text-brand-blue transition-colors">Email Studio</strong>
              <span class="text-xs text-light-text-sec dark:text-dark-text-sec">hello@tezworks.id</span>
            </div>
          </a>

          <!-- Location Channel -->
          <div class="flex items-center gap-4 p-4 border border-light-border dark:border-dark-border rounded-2xl bg-light-bg-sec dark:bg-dark-bg-sec transition-all duration-300">
            <div class="p-2.5 bg-indigo-500/10 rounded-xl">
              <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
            </div>
            <div>
              <strong class="block text-sm text-light-text dark:text-dark-text">Lokasi Layanan</strong>
              <span class="text-xs text-light-text-sec dark:text-dark-text-sec">Jakarta, Indonesia (Online & Offline)</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Interactive Form Right Side -->
      <div class="lg:col-span-7 bg-light-bg-sec dark:bg-dark-bg-sec border border-light-border dark:border-dark-border p-6 sm:p-8 rounded-3xl shadow-lg backdrop-blur-md relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/2 to-brand-cyan/2"></div>
        
        <form id="contact-form" class="relative z-10 space-y-5">
          @csrf
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="space-y-1.5 text-left">
              <label for="name" class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Nama Lengkap</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Budi Santoso" class="w-full px-4 py-3 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm focus:outline-none transition-colors" required />
            </div>
            
            <div class="space-y-1.5 text-left">
              <label for="email" class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Email Aktif</label>
              <input type="email" id="email" name="email" placeholder="Contoh: budi@email.com" class="w-full px-4 py-3 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm focus:outline-none transition-colors" required />
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="space-y-1.5 text-left">
              <label for="service" class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Jenis Layanan</label>
              <select id="service" name="service" class="w-full px-4 py-3 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm focus:outline-none transition-colors">
                <option value="">Pilih layanan...</option>
                <option value="website">Website Development</option>
                <option value="mobile">Application Development</option>
                <option value="joki">Joki Tugas Pemrograman</option>
                <option value="windows">Instalasi Windows & Software</option>
              </select>
            </div>
            
            <div class="space-y-1.5 text-left">
              <label for="budget" class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Estimasi Budget</label>
              <select id="budget" name="budget" class="w-full px-4 py-3 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm focus:outline-none transition-colors">
                <option value="">Pilih rentang budget...</option>
                <option value="<5jt">&lt; Rp 5 Juta</option>
                <option value="5-15jt">Rp 5 – 15 Juta</option>
                <option value="15-50jt">Rp 15 – 50 Juta</option>
                <option value=">50jt">&gt; Rp 50 Juta</option>
              </select>
            </div>
          </div>

          <div class="space-y-1.5 text-left">
            <label for="message" class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Ceritakan Detail Proyek / Kebutuhan</label>
            <textarea id="message" name="message" rows="4" placeholder="Contoh: Saya butuh website landing page e-commerce lengkap dengan payment gateway untuk berjualan sepatu..." class="w-full px-4 py-3 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border focus:border-brand-blue dark:focus:border-brand-cyan rounded-xl text-sm focus:outline-none transition-colors" required></textarea>
          </div>

          <!-- Alert / Error container -->
          <div id="form-alert" class="hidden p-4 rounded-xl text-xs font-semibold"></div>

          <!-- Submit Button -->
          <button type="submit" id="submit-btn" class="w-full flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white py-4 rounded-xl font-bold shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/30 transition-all duration-200 cursor-pointer">
            <span id="btn-text">Kirim & Lanjut ke WhatsApp Business</span>
            <svg id="btn-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            <!-- Loading Spinner (Hidden by default) -->
            <svg id="btn-spinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
          </button>

          <!-- Success Modal (Hidden by default) -->
          <div id="success-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
            <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border p-8 rounded-3xl max-w-md w-full text-center space-y-4 shadow-2xl relative animate-scaleUp">
              <div class="w-16 h-16 mx-auto rounded-full bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center">
                <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
              </div>
              <h3 class="text-2xl font-extrabold text-light-text dark:text-dark-text">Pesan Berhasil Terkirim</h3>
              <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
                Data proyek Anda telah kami simpan. Anda akan dialihkan ke WhatsApp Business TezWorks dalam beberapa detik untuk memulai konsultasi.
              </p>
              <div class="w-full bg-light-border dark:bg-dark-border h-1 rounded-full overflow-hidden">
                <div class="bg-emerald-500 h-full w-full animate-loader"></div>
              </div>
            </div>
          </div>

        </form>
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
