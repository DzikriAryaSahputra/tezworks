<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Email Admin</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="w-full px-4 py-3.5 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-light-text dark:text-dark-text shadow-sm" placeholder="admin@tezworks.id" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-500 font-medium" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full px-4 py-3.5 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all text-light-text dark:text-dark-text shadow-sm" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-500 font-medium" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-light-border dark:border-dark-border text-brand-blue focus:ring-brand-blue dark:bg-dark-bg dark:focus:ring-offset-dark-card transition-colors" name="remember">
                <span class="ml-2 text-sm font-semibold text-light-text-sec dark:text-dark-text-sec group-hover:text-light-text dark:group-hover:text-dark-text transition-colors">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-bold text-brand-blue dark:text-brand-cyan hover:underline transition-colors" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full bg-gradient-to-r from-brand-blue to-brand-cyan text-white font-bold py-3.5 px-4 rounded-xl shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/40 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                <span>Masuk Sekarang</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
        </div>
    </form>
</x-guest-layout>
