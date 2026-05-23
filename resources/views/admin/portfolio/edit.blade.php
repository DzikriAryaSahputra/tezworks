@extends('layouts.admin')

@section('title', 'Edit Portofolio - Admin TezWorks')
@section('header', 'Edit Portofolio')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.portfolio.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-light-text-sec dark:text-dark-text-sec hover:text-brand-blue dark:hover:text-brand-cyan transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Kembali ke Daftar
    </a>
</div>

<div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border rounded-2xl shadow-sm p-6 sm:p-8">
    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Kolom Kiri -->
            <div class="space-y-6">
                <!-- Judul -->
                <div>
                    <label for="title" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Nama Proyek *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $portfolio->title) }}" required class="w-full px-4 py-3 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all dark:text-dark-text" placeholder="Misal: Aplikasi Kasir Cafe">
                    @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Kategori -->
                <div>
                    <label for="category" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Kategori *</label>
                    <input type="text" id="category" name="category" value="{{ old('category', $portfolio->category) }}" required class="w-full px-4 py-3 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all dark:text-dark-text" placeholder="Misal: Web App, Landing Page">
                    @error('category') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- URL Demo -->
                <div>
                    <label for="demo_url" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">URL Demo (Opsional)</label>
                    <input type="url" id="demo_url" name="demo_url" value="{{ old('demo_url', $portfolio->demo_url) }}" class="w-full px-4 py-3 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all dark:text-dark-text" placeholder="https://...">
                    @error('demo_url') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Technology -->
                <div>
                    <label for="technology" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Teknologi (Pisahkan dengan koma)</label>
                    <input type="text" id="technology" name="technology" value="{{ old('technology', is_array($portfolio->technology) ? implode(', ', $portfolio->technology) : '') }}" class="w-full px-4 py-3 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all dark:text-dark-text" placeholder="Laravel, Vue, Tailwind CSS">
                    <p class="text-xs text-light-text-sec dark:text-dark-text-sec mt-1.5">Contoh: Laravel, Vue, Tailwind CSS</p>
                    @error('technology') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-6">
                <!-- Gambar -->
                <div>
                    <label for="image" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Gambar Portofolio</label>
                    <div class="w-full relative border-2 border-dashed border-light-border dark:border-dark-border rounded-2xl overflow-hidden group hover:border-brand-blue dark:hover:border-brand-cyan transition-colors bg-light-bg-sec dark:bg-dark-bg h-64 flex flex-col items-center justify-center cursor-pointer">
                        <input type="file" id="image" name="image" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="previewImage(this)">
                        
                        <div id="image-placeholder" class="text-center p-4 {{ $portfolio->image_url ? 'hidden' : '' }}">
                            <svg class="w-10 h-10 mx-auto text-light-text-sec dark:text-dark-text-sec mb-3 group-hover:text-brand-blue dark:group-hover:text-brand-cyan transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <p class="text-sm font-semibold text-light-text dark:text-dark-text">Upload gambar baru (opsional)</p>
                            <p class="text-xs text-light-text-sec dark:text-dark-text-sec mt-1">Kosongkan jika tidak ingin mengubah foto</p>
                        </div>
                        
                        <img id="image-preview" src="{{ $portfolio->image_url }}" alt="Preview" class="absolute inset-0 w-full h-full object-cover {{ $portfolio->image_url ? '' : 'hidden' }}">
                        
                        @if($portfolio->image_url)
                        <div class="absolute inset-0 bg-black/50 hidden group-hover:flex flex-col items-center justify-center z-0">
                            <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-white text-sm font-semibold">Ganti Gambar</span>
                        </div>
                        @endif
                    </div>
                    @error('image') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="description" class="block text-sm font-bold uppercase tracking-wider text-light-text-sec dark:text-dark-text-sec mb-2">Deskripsi Proyek *</label>
                    <textarea id="description" name="description" rows="5" required class="w-full px-4 py-3 bg-light-bg-sec dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-xl focus:ring-2 focus:ring-brand-blue/50 focus:border-brand-blue transition-all dark:text-dark-text resize-y" placeholder="Jelaskan detail proyek Anda...">{{ old('description', $portfolio->description) }}</textarea>
                    @error('description') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Is Featured -->
                <div class="flex items-center gap-3 p-4 border border-light-border dark:border-dark-border rounded-xl bg-light-bg-sec/50 dark:bg-dark-bg/50">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $portfolio->is_featured) ? 'checked' : '' }} class="w-5 h-5 text-brand-blue border-light-border dark:border-dark-border rounded focus:ring-brand-blue dark:bg-dark-bg focus:ring-offset-dark-card">
                    <label for="is_featured" class="text-sm font-bold text-light-text dark:text-dark-text cursor-pointer">
                        Jadikan Portofolio Unggulan (Featured)
                        <span class="block text-xs font-normal text-light-text-sec dark:text-dark-text-sec mt-0.5">Proyek ini akan ditandai bintang dan lebih ditonjolkan.</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="pt-6 border-t border-light-border dark:border-dark-border flex justify-end gap-4">
            <a href="{{ route('admin.portfolio.index') }}" class="px-6 py-3 text-sm font-bold text-light-text-sec dark:text-dark-text-sec hover:bg-light-bg-sec dark:hover:bg-dark-bg rounded-xl transition-colors">Batal</a>
            <button type="submit" class="px-6 py-3 bg-brand-blue hover:bg-brand-blue-hover text-white text-sm font-bold rounded-xl shadow-lg shadow-brand-blue/20 transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    function previewImage(input) {
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('image-placeholder');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                if(placeholder) placeholder.classList.add('hidden');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
