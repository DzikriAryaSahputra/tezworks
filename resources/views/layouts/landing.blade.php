<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'TezWorks — Jasa Pembuatan Aplikasi & Website Profesional')</title>
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
  <meta name="description" content="TezWorks menghadirkan solusi pembuatan website, aplikasi mobile, joki tugas pemrograman, dan instalasi sistem OS Windows berkualitas tinggi secara online & offline." />
  <meta name="keywords" content="jasa pembuatan aplikasi, jasa pembuatan website, joki tugas pemrograman, instalasi windows, developer profesional, indonesia" />
  
  <!-- OpenGraph -->
  <meta property="og:title" content="TezWorks — Jasa Pembuatan Aplikasi & Website Profesional" />
  <meta property="og:description" content="Solusi digital terlengkap: Pembuatan Website, Aplikasi, Joki Coding, dan Instalasi OS secara online & offline." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />

  <!-- Google Fonts Connection -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Pre-load / Inline Script for Dark Mode to prevent white flashing (FOUC) -->
  <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
  </script>

  <!-- Vite Assets -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light-bg text-light-text dark:bg-dark-bg dark:text-dark-text min-h-screen flex flex-col font-sans transition-colors duration-300">

  <!-- ======= NAVBAR ======= -->
  <header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 border-b border-transparent bg-light-bg/80 dark:bg-dark-bg/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center gap-2 group">
        <svg class="w-8 h-8 text-brand-blue dark:text-brand-cyan transition-transform duration-300 group-hover:rotate-12" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M16 2L2 9.5v13L16 30l14-7.5v-13L16 2zm0 2.31L28 10.8v10.4L16 27.69 4 21.2V10.8L16 4.31z"/></svg>
        <span class="text-2xl font-extrabold tracking-tight">Tez<span class="text-brand-blue dark:text-brand-cyan">Works</span></span>
      </a>

      <!-- Desktop Nav Menu -->
      <nav class="hidden md:flex items-center gap-8 font-medium">
        <a href="{{ route('home') }}#services" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Layanan</a>
        <a href="{{ route('home') }}#about" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Tentang</a>
        <a href="{{ route('portfolio') }}" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Portfolio</a>
        <a href="{{ route('home') }}#contact" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Kontak</a>
      </nav>

      <!-- CTA & Buttons -->
      <div class="hidden md:flex items-center gap-4">
        <!-- Dark Mode Toggle Button -->
        <button id="theme-toggle" class="p-2.5 rounded-lg border border-light-border dark:border-dark-border text-light-text-sec dark:text-dark-text-sec hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-all duration-200" aria-label="Toggle dark mode">
          <!-- Sun Icon (Hidden by default, shown in dark mode) -->
          <svg id="theme-toggle-light-icon" class="hidden w-5 height-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          <!-- Moon Icon (Shown by default, hidden in dark mode) -->
          <svg id="theme-toggle-dark-icon" class="hidden w-5 height-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        </button>

        <a href="{{ route('home') }}#contact" class="bg-brand-blue hover:bg-brand-blue-hover text-white px-5 py-2.5 rounded-lg font-semibold shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/30 transition-all duration-200 text-sm">Konsultasi Gratis</a>
      </div>

      <!-- Hamburger & Theme Toggle on Mobile -->
      <div class="flex items-center gap-3 md:hidden">
        <button id="theme-toggle-mobile" class="p-2.5 rounded-lg border border-light-border dark:border-dark-border text-light-text-sec dark:text-dark-text-sec" aria-label="Toggle dark mode">
          <svg id="theme-toggle-light-icon-mob" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          <svg id="theme-toggle-dark-icon-mob" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        </button>

        <button id="mobile-menu-btn" class="p-2.5 rounded-lg border border-light-border dark:border-dark-border text-light-text-sec dark:text-dark-text-sec" aria-label="Open menu">
          <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path></svg>
          <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
      </div>

    </div>

    <!-- Mobile Nav Menu Panel -->
    <div id="mobile-menu" class="hidden md:hidden border-b border-light-border dark:border-dark-border bg-light-bg dark:bg-dark-bg transition-all duration-300">
      <div class="px-4 pt-2 pb-6 space-y-3 font-medium">
        <a href="{{ route('home') }}#services" class="block py-2.5 px-3 rounded-lg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-colors">Layanan</a>
        <a href="{{ route('home') }}#about" class="block py-2.5 px-3 rounded-lg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-colors">Tentang</a>
        <a href="{{ route('portfolio') }}" class="block py-2.5 px-3 rounded-lg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-colors">Portfolio</a>
        <a href="{{ route('home') }}#contact" class="block py-2.5 px-3 rounded-lg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-colors">Kontak</a>
        <a href="{{ route('home') }}#contact" class="block text-center bg-brand-blue hover:bg-brand-blue-hover text-white py-3 rounded-lg font-semibold shadow-lg shadow-brand-blue/10">Konsultasi Gratis</a>
      </div>
    </div>
  </header>

  <!-- ======= MAIN CONTENT ======= -->
  <main class="flex-grow pt-20">
    @yield('content')
  </main>

  <!-- ======= FOOTER ======= -->
  <footer class="bg-light-bg-sec dark:bg-dark-bg-sec border-t border-light-border dark:border-dark-border py-12 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        
        <!-- Brand -->
        <div class="space-y-4 md:col-span-1">
          <a href="{{ route('home') }}" class="flex items-center gap-2">
            <svg class="w-8 h-8 text-brand-blue dark:text-brand-cyan" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M16 2L2 9.5v13L16 30l14-7.5v-13L16 2zm0 2.31L28 10.8v10.4L16 27.69 4 21.2V10.8L16 4.31z"/></svg>
            <span class="text-2xl font-extrabold tracking-tight">Tez<span class="text-brand-blue dark:text-brand-cyan">Works</span></span>
          </a>
          <p class="text-light-text-sec dark:text-dark-text-sec text-sm leading-relaxed">
            Freelancer independen yang membantu individu, UMKM, dan mahasiswa mewujudkan ide digital mereka — website, aplikasi, joki tugas coding, dan instalasi Windows.
          </p>
          <!-- Social Icons -->
          <div class="flex gap-4">
            <a href="https://github.com/DzikriAryaSahputra" class="p-2 bg-light-bg dark:bg-dark-bg hover:text-brand-blue dark:hover:text-brand-cyan border border-light-border dark:border-dark-border rounded-lg text-light-text-sec dark:text-dark-text-sec transition-colors" aria-label="GitHub">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
            <a href="https://linktr.ee/Tezky" class="p-2 bg-light-bg dark:bg-dark-bg hover:text-brand-blue dark:hover:text-brand-cyan border border-light-border dark:border-dark-border rounded-lg text-light-text-sec dark:text-dark-text-sec transition-colors" aria-label="LinkedIn">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="https://www.instagram.com/dzkrri_/" class="p-2 bg-light-bg dark:bg-dark-bg hover:text-brand-blue dark:hover:text-brand-cyan border border-light-border dark:border-dark-border rounded-lg text-light-text-sec dark:text-dark-text-sec transition-colors" aria-label="Instagram">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
          </div>
        </div>

        <!-- Links: Services -->
        <div class="space-y-4">
          <h3 class="text-sm font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Layanan</h3>
          <ul class="space-y-2 text-sm text-light-text-sec dark:text-dark-text-sec">
            <li><a href="{{ route('home') }}#services" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Website Development</a></li>
            <li><a href="{{ route('home') }}#services" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Application Development</a></li>
            <li><a href="{{ route('home') }}#services" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Joki Tugas Pemrograman</a></li>
            <li><a href="{{ route('home') }}#services" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Instalasi Windows</a></li>
          </ul>
        </div>

        <!-- Links: Company -->
        <div class="space-y-4">
          <h3 class="text-sm font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Navigasi</h3>
          <ul class="space-y-2 text-sm text-light-text-sec dark:text-dark-text-sec">
            <li><a href="{{ route('home') }}#about" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Tentang Kami</a></li>
            <li><a href="{{ route('portfolio') }}" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Semua Portofolio</a></li>
            <li><a href="{{ route('home') }}#advantages" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Keunggulan</a></li>
            <li><a href="{{ route('home') }}#contact" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Hubungi Kami</a></li>
          </ul>
        </div>

        <!-- Links: Contact -->
        <div class="space-y-4">
          <h3 class="text-sm font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Kontak</h3>
          <ul class="space-y-2.5 text-sm text-light-text-sec dark:text-dark-text-sec">
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
              <span>Bagan Pete, Kec. Kota Baru, Kota Jambi, Jambi 36361 (Online/Offline)</span>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              <a href="mailto:hello@tezworks.my.id" class="hover:text-brand-blue dark:hover:text-brand-cyan">hello@tezworks.my.id</a>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.553 4.12 1.524 5.855L.057 23.571a.5.5 0 00.61.646l5.88-1.543A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.942 9.942 0 01-5.127-1.414l-.36-.214-3.742.982.998-3.648-.235-.374A9.945 9.945 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
              <a href="https://wa.me/6283112540839" target="_blank" rel="noopener" class="hover:text-brand-blue dark:hover:text-brand-cyan">WhatsApp Business</a>
            </li>
          </ul>
          <div class="pt-2">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-brand-blue/10 text-brand-blue dark:bg-brand-cyan/10 dark:text-brand-cyan border border-brand-blue/20 dark:border-brand-cyan/20">
              Top Rated Agency Nyawit 2026
            </span>
          </div>
        </div>

      </div>

      <div class="border-t border-light-border dark:border-dark-border mt-12 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-light-text-sec dark:text-dark-text-sec">
        <p>&copy; {{ date('Y') }} TezWorks. Hak Cipta Dilindungi.</p>
        <div class="flex gap-6">
          <a href="#" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Kebijakan Privasi</a>
          <a href="#" class="hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">Syarat & Ketentuan</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Script for interactivity -->
  <script>
    // Header Scroll Styling
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        navbar.classList.add('shadow-md', 'border-light-border', 'dark:border-dark-border', 'bg-light-bg/95', 'dark:bg-dark-bg/95');
        navbar.classList.remove('bg-light-bg/80', 'dark:bg-dark-bg/80');
      } else {
        navbar.classList.remove('shadow-md', 'border-light-border', 'dark:border-dark-border', 'bg-light-bg/95', 'dark:bg-dark-bg/95');
        navbar.classList.add('bg-light-bg/80', 'dark:bg-dark-bg/80');
      }
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuBtn.addEventListener('click', () => {
      const isExpanded = mobileMenu.classList.contains('hidden');
      if (isExpanded) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
      } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      }
    });

    // Dark Mode Toggle Logic
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleMobileBtn = document.getElementById('theme-toggle-mobile');

    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');
    const darkIconMob = document.getElementById('theme-toggle-dark-icon-mob');
    const lightIconMob = document.getElementById('theme-toggle-light-icon-mob');

    // Sync button icons based on current theme state
    function syncIcons() {
      const isDark = document.documentElement.classList.contains('dark');
      if (isDark) {
        lightIcon.classList.remove('hidden');
        darkIcon.classList.add('hidden');
        lightIconMob.classList.remove('hidden');
        darkIconMob.classList.add('hidden');
      } else {
        lightIcon.classList.add('hidden');
        darkIcon.classList.remove('hidden');
        lightIconMob.classList.add('hidden');
        darkIconMob.classList.remove('hidden');
      }
    }
    
    // Run sync on load
    syncIcons();

    function toggleTheme() {
      const isDark = document.documentElement.classList.contains('dark');
      if (isDark) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
      } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
      }
      syncIcons();
    }

    themeToggleBtn.addEventListener('click', toggleTheme);
    themeToggleMobileBtn.addEventListener('click', toggleTheme);
  </script>
    <!-- ======= COOKIE CONSENT BANNER ======= -->
    <div id="cookie-banner" class="fixed bottom-4 left-4 right-4 sm:left-auto sm:right-6 sm:bottom-6 sm:max-w-sm bg-white/90 dark:bg-dark-card/90 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-5 shadow-2xl shadow-brand-blue/10 z-[100] transform translate-y-[150%] transition-transform duration-700 ease-out flex flex-col gap-3 hidden">
        <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-blue to-brand-cyan flex items-center justify-center shrink-0">
                <span class="text-white text-xl">🍪</span>
            </div>
            <div>
                <h4 class="text-sm font-extrabold text-light-text dark:text-dark-text mb-1">Privasi & Cookie</h4>
                <p class="text-xs text-light-text-sec dark:text-dark-text-sec leading-relaxed">
                    Kami menggunakan cookie dan tracking dasar untuk menganalisis trafik demi memberikan pengalaman terbaik. Data Anda dijamin aman.
                </p>
            </div>
        </div>
        <div class="flex items-center gap-2 pt-2">
            <button id="btn-deny-cookie" class="flex-1 px-4 py-2 text-xs font-bold text-light-text-sec dark:text-dark-text-sec bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border hover:bg-light-border dark:hover:bg-dark-border rounded-xl transition-colors">Tolak</button>
            <button id="btn-accept-cookie" class="flex-1 px-4 py-2 text-xs font-bold text-white bg-gradient-to-r from-brand-blue to-brand-cyan shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/40 rounded-xl transition-all">Izinkan Semua</button>
        </div>
    </div>

    <!-- Script for Tracking & Cookies -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cookieBanner = document.getElementById('cookie-banner');
            const btnAccept = document.getElementById('btn-accept-cookie');
            const btnDeny = document.getElementById('btn-deny-cookie');
            
            // Check if cookie exists (value: 'accepted' or 'denied')
            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
                return null;
            }

            function setCookie(name, value, days) {
                let expires = "";
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }

            const consent = getCookie('cookie_consent');

            if (!consent) {
                // Show banner after 2 seconds
                cookieBanner.classList.remove('hidden');
                setTimeout(() => {
                    cookieBanner.classList.remove('translate-y-[150%]');
                }, 2000);
            }

            btnAccept.addEventListener('click', () => {
                setCookie('cookie_consent', 'accepted', 365);
                hideBanner();
            });

            btnDeny.addEventListener('click', () => {
                setCookie('cookie_consent', 'denied', 365);
                hideBanner();
            });

            function hideBanner() {
                cookieBanner.classList.add('translate-y-[150%]');
                setTimeout(() => {
                    cookieBanner.classList.add('hidden');
                }, 700);
            }

            // --- Click Tracking Logic ---
            // Track clicks on elements with 'data-track-click' attribute
            document.body.addEventListener('click', (e) => {
                const trackBtn = e.target.closest('.detail-btn, a');
                if (trackBtn && getCookie('cookie_consent') === 'accepted') {
                    
                    let elementName = trackBtn.getAttribute('data-title');
                    if (!elementName) {
                        // If it's a normal link, use its text or aria-label
                        elementName = trackBtn.innerText.trim() || trackBtn.getAttribute('aria-label') || trackBtn.href;
                        // Skip generic empty clicks or internal hashes
                        if (!elementName || elementName.startsWith('#') || trackBtn.href === window.location.href) return;
                        
                        // Limit string length
                        if (elementName.length > 50) elementName = elementName.substring(0, 50) + '...';
                    } else {
                        elementName = 'Detail Portofolio: ' + elementName;
                    }

                    // Send tracking via fetch API (fire and forget)
                    fetch('/track-click', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                        },
                        body: JSON.stringify({
                            element_name: elementName,
                            page_url: window.location.pathname
                        })
                    }).catch(err => console.error('Tracking error', err));
                }
            });
        });
    </script>
</body>
</html>
