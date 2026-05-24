<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard - TezWorks')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light-bg-sec text-light-text dark:bg-dark-bg text-dark-text min-h-screen font-sans antialiased relative">
    
    <!-- Background Pattern -->
    <div class="fixed inset-0 pointer-events-none z-0 bg-[linear-gradient(to_right,#80808008_1px,transparent_1px),linear-gradient(to_bottom,#80808008_1px,transparent_1px)] bg-[size:24px_24px] dark:bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)]"></div>
    <div class="fixed top-0 left-1/4 w-96 h-96 bg-brand-blue/10 dark:bg-brand-cyan/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

    <div class="flex h-screen overflow-hidden relative z-10 p-3 sm:p-4 gap-4">
        
        <!-- Floating Sidebar -->
        <aside class="w-64 bg-white/90 dark:bg-dark-card/90 backdrop-blur-xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl shadow-xl shadow-brand-blue/5 flex flex-col hidden md:flex transition-all duration-300">
            <div class="h-24 flex items-center px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-blue to-brand-cyan flex items-center justify-center shadow-lg shadow-brand-blue/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M16 2L2 9.5v13L16 30l14-7.5v-13L16 2zm0 2.31L28 10.8v10.4L16 27.69 4 21.2V10.8L16 4.31z"/></svg>
                    </div>
                    <span class="text-xl font-extrabold tracking-tight">Admin<span class="text-brand-blue dark:text-brand-cyan">Panel</span></span>
                </a>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-3">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 text-sm font-bold rounded-2xl transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-brand-blue to-brand-cyan text-white shadow-lg shadow-brand-blue/25 translate-x-1' : 'text-light-text-sec dark:text-dark-text-sec hover:bg-light-bg-sec dark:hover:bg-dark-bg hover:translate-x-1' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.portfolio.index') }}" class="flex items-center gap-3 px-4 py-3.5 text-sm font-bold rounded-2xl transition-all duration-300 {{ request()->routeIs('admin.portfolio.*') ? 'bg-gradient-to-r from-brand-blue to-brand-cyan text-white shadow-lg shadow-brand-blue/25 translate-x-1' : 'text-light-text-sec dark:text-dark-text-sec hover:bg-light-bg-sec dark:hover:bg-dark-bg hover:translate-x-1' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    Portofolio
                </a>
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3.5 text-sm font-bold rounded-2xl transition-all duration-300 {{ request()->routeIs('profile.*') ? 'bg-gradient-to-r from-brand-blue to-brand-cyan text-white shadow-lg shadow-brand-blue/25 translate-x-1' : 'text-light-text-sec dark:text-dark-text-sec hover:bg-light-bg-sec dark:hover:bg-dark-bg hover:translate-x-1' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profil
                </a>
            </nav>

            <div class="p-4 mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-3 px-4 py-3 text-sm font-bold text-red-500 hover:text-white hover:bg-red-500 border border-red-500/20 hover:border-red-500 rounded-2xl shadow-sm transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col h-full overflow-hidden bg-white/60 dark:bg-dark-card/60 backdrop-blur-3xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl shadow-xl shadow-brand-blue/5">
            
            <!-- Glassmorphism Topbar -->
            <header class="h-24 flex items-center justify-between px-6 lg:px-10 shrink-0 border-b border-light-border/50 dark:border-dark-border/50">
                <div class="flex items-center gap-4">
                    <h1 class="text-2xl font-extrabold tracking-tight text-light-text dark:text-dark-text">@yield('header')</h1>
                </div>
                
                <div class="flex items-center gap-4">
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" class="p-3 rounded-2xl bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border text-light-text-sec dark:text-dark-text-sec hover:text-brand-blue dark:hover:text-brand-cyan hover:shadow-md transition-all duration-300">
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    </button>
                    
                    <!-- User Profile Badge -->
                    <div class="flex items-center gap-3 pl-4 border-l border-light-border dark:border-dark-border">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-brand-blue to-brand-cyan text-white flex items-center justify-center font-extrabold text-lg shadow-lg shadow-brand-blue/20">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-extrabold text-light-text dark:text-dark-text">{{ auth()->user()->name }}</p>
                            <p class="text-xs font-medium text-light-text-sec dark:text-dark-text-sec">Super Admin</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Scrollable Page Content -->
            <div class="flex-1 overflow-y-auto p-6 lg:p-10 custom-scrollbar">
                <!-- Alerts -->
                @if (session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/20 text-emerald-600 dark:text-emerald-400 font-medium flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ session('success') }}
                    </div>
                @endif
                
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Theme Script -->
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        function syncIcons() {
            if (document.documentElement.classList.contains('dark')) {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            } else {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            }
        }
        syncIcons();

        themeToggleBtn.addEventListener('click', function() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
            syncIcons();
        });
    </script>
</body>
</html>
