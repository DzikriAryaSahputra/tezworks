@extends('layouts.admin')

@section('title', 'Dashboard - Admin TezWorks')
@section('header', 'Dashboard Analitik')

@section('content')
<div class="space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Hari Ini -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 shadow-xl shadow-brand-blue/5 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                <svg class="w-24 h-24 text-brand-blue" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
            </div>
            <div class="relative z-10">
                <h3 class="text-sm font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider mb-2">Pengunjung Hari Ini</h3>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-extrabold text-light-text dark:text-dark-text">{{ $todayVisitors }}</span>
                    <span class="text-sm font-medium text-emerald-500">Hits</span>
                </div>
            </div>
        </div>

        <!-- Bulan Ini -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 shadow-xl shadow-brand-blue/5 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                <svg class="w-24 h-24 text-brand-cyan" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="relative z-10">
                <h3 class="text-sm font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider mb-2">Bulan Ini</h3>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-extrabold text-light-text dark:text-dark-text">{{ $monthVisitors }}</span>
                    <span class="text-sm font-medium text-brand-blue">Hits</span>
                </div>
            </div>
        </div>

        <!-- Total -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 shadow-xl shadow-brand-blue/5 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                <svg class="w-24 h-24 text-purple-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="relative z-10">
                <h3 class="text-sm font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider mb-2">Total Kunjungan</h3>
                <div class="flex items-baseline gap-2">
                    <span class="text-4xl font-extrabold text-light-text dark:text-dark-text">{{ $totalVisitors }}</span>
                    <span class="text-sm font-medium text-purple-500">Hits</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Lists -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <!-- Top Pages -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 shadow-xl shadow-brand-blue/5">
            <h3 class="text-lg font-extrabold text-light-text dark:text-dark-text mb-4">Halaman Sering Dikunjungi</h3>
            
            <div class="space-y-3">
                @forelse($topPages as $page)
                <div class="flex items-center justify-between p-3 rounded-2xl bg-light-bg-sec/50 dark:bg-dark-bg/50 border border-light-border/50 dark:border-dark-border/50">
                    <span class="text-sm font-medium text-light-text-sec dark:text-dark-text-sec truncate max-w-[70%]">{{ Str::limit($page->page_url, 40) }}</span>
                    <span class="px-3 py-1 bg-brand-blue/10 text-brand-blue dark:bg-brand-cyan/10 dark:text-brand-cyan rounded-lg text-xs font-bold">{{ $page->total }}</span>
                </div>
                @empty
                <div class="text-center py-6 text-sm text-light-text-sec dark:text-dark-text-sec">Belum ada data kunjungan.</div>
                @endforelse
            </div>
        </div>

        <!-- Top Clicks -->
        <div class="bg-white/80 dark:bg-dark-card/80 backdrop-blur-2xl border border-light-border/50 dark:border-dark-border/50 rounded-3xl p-6 shadow-xl shadow-brand-blue/5">
            <h3 class="text-lg font-extrabold text-light-text dark:text-dark-text mb-4">Interaksi Tombol (Klik)</h3>
            
            <div class="space-y-3">
                @forelse($topClicks as $click)
                <div class="flex items-center justify-between p-3 rounded-2xl bg-light-bg-sec/50 dark:bg-dark-bg/50 border border-light-border/50 dark:border-dark-border/50">
                    <span class="text-sm font-medium text-light-text-sec dark:text-dark-text-sec truncate">{{ $click->element_name }}</span>
                    <span class="px-3 py-1 bg-purple-500/10 text-purple-600 dark:bg-purple-500/20 dark:text-purple-400 rounded-lg text-xs font-bold">{{ $click->total }}</span>
                </div>
                @empty
                <div class="text-center py-6 text-sm text-light-text-sec dark:text-dark-text-sec">Belum ada data interaksi klik.</div>
                @endforelse
            </div>
        </div>

    </div>
</div>
@endsection
