@extends('layouts.admin')

@section('title', 'Kelola Portofolio - Admin TezWorks')
@section('header', 'Kelola Portofolio')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
    <p class="text-light-text-sec dark:text-dark-text-sec">Kelola semua proyek portofolio Anda di sini.</p>
    <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand-blue hover:bg-brand-blue-hover text-white text-sm font-semibold rounded-xl shadow-lg shadow-brand-blue/20 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        Tambah Portofolio
    </a>
</div>

<div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border rounded-2xl shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-light-bg-sec dark:bg-dark-bg border-b border-light-border dark:border-dark-border">
                    <th class="px-6 py-4 text-xs font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider">Info Proyek</th>
                    <th class="px-6 py-4 text-xs font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider">Kategori & Tech</th>
                    <th class="px-6 py-4 text-xs font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-xs font-bold text-light-text-sec dark:text-dark-text-sec uppercase tracking-wider text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-light-border dark:divide-dark-border">
                @forelse ($portfolios as $portfolio)
                <tr class="hover:bg-light-bg-sec/50 dark:hover:bg-dark-bg/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-12 rounded-lg bg-light-border dark:bg-dark-border overflow-hidden shrink-0">
                                @if($portfolio->image_url)
                                    <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-light-text-sec dark:text-dark-text-sec">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h3 class="font-bold text-light-text dark:text-dark-text">{{ $portfolio->title }}</h3>
                                @if($portfolio->demo_url)
                                    <a href="{{ $portfolio->demo_url }}" target="_blank" class="text-xs text-brand-blue dark:text-brand-cyan hover:underline">Lihat Demo &rarr;</a>
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-light-bg dark:bg-dark-bg border border-light-border dark:border-dark-border text-light-text dark:text-dark-text mb-2">
                            {{ $portfolio->category }}
                        </span>
                        <div class="flex flex-wrap gap-1">
                            @if(is_array($portfolio->technology))
                                @foreach($portfolio->technology as $tech)
                                    <span class="text-[10px] uppercase font-bold tracking-wider text-light-text-sec dark:text-dark-text-sec bg-light-bg dark:bg-dark-bg px-1.5 py-0.5 rounded border border-light-border dark:border-dark-border">{{ $tech }}</span>
                                @endforeach
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @if($portfolio->is_featured)
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                Featured
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border text-light-text-sec dark:text-dark-text-sec">
                                Biasa
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="p-2 text-brand-blue dark:text-brand-cyan hover:bg-brand-blue/10 dark:hover:bg-brand-cyan/10 rounded-lg transition-colors" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                            <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus portofolio ini secara permanen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-500 hover:bg-red-500/10 rounded-lg transition-colors" title="Hapus">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-light-text-sec dark:text-dark-text-sec">
                        <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                        <p class="text-lg font-medium">Belum ada portofolio</p>
                        <p class="text-sm mt-1">Silakan tambah portofolio baru untuk menampilkannya di halaman depan.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
