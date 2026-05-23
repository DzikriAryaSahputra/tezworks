<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TezWorks') }} - Login Admin</title>

    <!-- Fonts -->
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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-light-bg-sec text-light-text dark:bg-dark-bg text-dark-text min-h-screen relative flex items-center justify-center p-4">
    
    <!-- Background Patterns -->
    <div class="fixed inset-0 pointer-events-none z-0 bg-[linear-gradient(to_right,#80808008_1px,transparent_1px),linear-gradient(to_bottom,#80808008_1px,transparent_1px)] bg-[size:30px_30px] dark:bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)]"></div>
    <div class="fixed top-1/4 left-1/4 w-96 h-96 bg-brand-blue/10 dark:bg-brand-cyan/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
    <div class="fixed bottom-1/4 right-1/4 w-96 h-96 bg-brand-cyan/10 dark:bg-brand-blue/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

    <div class="w-full max-w-md relative z-10">
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-blue to-brand-cyan flex items-center justify-center shadow-lg shadow-brand-blue/20 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M16 2L2 9.5v13L16 30l14-7.5v-13L16 2zm0 2.31L28 10.8v10.4L16 27.69 4 21.2V10.8L16 4.31z"/></svg>
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Tez<span class="text-brand-blue dark:text-brand-cyan">Works</span></span>
            </a>
            <p class="text-light-text-sec dark:text-dark-text-sec text-sm mt-3 font-medium">Masuk ke Portal Admin untuk mengelola portofolio.</p>
        </div>

        <!-- Glass Card -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 shadow-2xl shadow-brand-blue/5 rounded-3xl p-8 sm:p-10">
            {{ $slot }}
        </div>
        
        <!-- Footer info -->
        <div class="text-center mt-8 text-xs text-light-text-sec dark:text-dark-text-sec">
            &copy; {{ date('Y') }} TezWorks CMS. Secure Auth.
        </div>
    </div>
</body>
</html>
