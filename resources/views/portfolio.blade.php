@extends('layouts.landing')

@section('title', 'Portofolio Proyek Terkini — TezWorks')

@section('content')
<!-- ======= HERO HEADER ======= -->
<section class="relative overflow-hidden py-16 bg-light-bg dark:bg-dark-bg border-b border-light-border dark:border-dark-border transition-colors duration-300">
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808008_1px,transparent_1px),linear-gradient(to_bottom,#80808008_1px,transparent_1px)] bg-[size:30px_30px] dark:bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)]"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-brand-blue/5 dark:bg-brand-cyan/5 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
    <span class="text-xs font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Portofolio Kami</span>
    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-light-text dark:text-dark-text">Galeri Karya <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-blue to-brand-cyan">Terbaik TezWorks</span></h1>
    <p class="text-light-text-sec dark:text-dark-text-sec text-base leading-relaxed max-w-2xl mx-auto">
      Setiap proyek yang kami kerjakan adalah bukti nyata komitmen kami terhadap estetika desain modern, performa tinggi, dan kepuasan pelanggan.
    </p>
  </div>
</section>

<!-- ======= PORTFOLIO FILTER & GRID SECTION ======= -->
<section class="py-12 bg-light-bg dark:bg-dark-bg transition-colors duration-300 min-h-[500px]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Filter Buttons -->
    <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
      <button class="filter-btn active px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider border border-brand-blue/20 bg-brand-blue text-white shadow-md shadow-brand-blue/10 dark:border-brand-cyan/20 dark:bg-brand-cyan dark:text-dark-bg transition-all duration-200 cursor-pointer" data-filter="all">Semua</button>
      <button class="filter-btn px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider border border-light-border dark:border-dark-border hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 text-light-text-sec dark:text-dark-text-sec hover:text-light-text dark:hover:text-dark-text transition-all duration-200 cursor-pointer" data-filter="website">Website</button>
      <button class="filter-btn px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider border border-light-border dark:border-dark-border hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 text-light-text-sec dark:text-dark-text-sec hover:text-light-text dark:hover:text-dark-text transition-all duration-200 cursor-pointer" data-filter="mobile">Mobile App</button>
      <button class="filter-btn px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider border border-light-border dark:border-dark-border hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 text-light-text-sec dark:text-dark-text-sec hover:text-light-text dark:hover:text-dark-text transition-all duration-200 cursor-pointer" data-filter="joki">Joki Coding</button>
      <button class="filter-btn px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider border border-light-border dark:border-dark-border hover:border-brand-blue/30 dark:hover:border-brand-cyan/30 text-light-text-sec dark:text-dark-text-sec hover:text-light-text dark:hover:text-dark-text transition-all duration-200 cursor-pointer" data-filter="windows">OS Install</button>
    </div>

    <!-- Portfolio Cards Grid -->
    <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-300">
      @foreach($portfolios as $portfolio)
      <!-- Card Item -->
      <div class="portfolio-item group bg-light-bg-sec dark:bg-dark-bg-sec border border-light-border dark:border-dark-border rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:border-brand-blue/20 dark:hover:border-brand-cyan/20 transition-all duration-300 flex flex-col justify-between" 
           data-category="{{ $portfolio->category }}">
        
        <!-- visual mockup -->
        <div class="relative h-48 bg-gradient-to-br from-brand-blue/5 to-brand-cyan/5 dark:from-brand-blue/10 dark:to-brand-cyan/5 border-b border-light-border dark:border-dark-border flex items-center justify-center p-8 overflow-hidden group-hover:bg-brand-blue/10 dark:group-hover:bg-brand-cyan/10 transition-colors duration-300">
          @if($portfolio->image_url)
            <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-t from-light-bg-sec/90 via-transparent to-transparent dark:from-dark-bg-sec/90"></div>
          @else
            <div class="absolute w-44 h-44 rounded-full bg-brand-blue/5 dark:bg-brand-cyan/5 blur-xl group-hover:scale-125 transition-transform duration-500"></div>
            <div class="relative z-10 text-center space-y-2 group-hover:scale-105 transition-transform duration-300">
              <span class="text-4xl">⬡</span>
              <h4 class="font-extrabold text-base text-light-text dark:text-dark-text leading-snug">{{ $portfolio->title }}</h4>
            </div>
          @endif
          
          <span class="absolute top-4 right-4 z-20 inline-block text-[9px] uppercase font-bold tracking-widest px-2.5 py-0.5 bg-white/90 dark:bg-dark-bg/90 backdrop-blur-md border border-light-border dark:border-dark-border rounded-full text-light-text dark:text-dark-text shadow-sm">
            @if($portfolio->category === 'website') Website @elseif($portfolio->category === 'mobile') Mobile App @elseif($portfolio->category === 'joki') Joki Coding @else OS Install @endif
          </span>
        </div>

        <!-- Details Info -->
        <div class="p-6 space-y-4 flex-grow flex flex-col justify-between">
          <div class="space-y-2">
            <h3 class="text-lg font-bold text-light-text dark:text-dark-text group-hover:text-brand-blue dark:group-hover:text-brand-cyan transition-colors line-clamp-1">{{ $portfolio->title }}</h3>
            <p class="text-light-text-sec dark:text-dark-text-sec text-xs leading-relaxed line-clamp-3">
              {{ $portfolio->description }}
            </p>
          </div>

          <!-- Technologies pills -->
          <div class="space-y-4 pt-2">
            <div class="flex flex-wrap gap-1.5">
              @if(is_array($portfolio->technology))
                @foreach($portfolio->technology as $tech)
                <span class="px-2 py-0.5 bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border rounded-md text-[9px] font-semibold text-light-text-sec dark:text-dark-text-sec">
                  {{ $tech }}
                </span>
                @endforeach
              @endif
            </div>
            
            <!-- Dynamic data attributes for Modal usage -->
            <button class="detail-btn w-full bg-light-bg dark:bg-dark-bg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec border border-light-border dark:border-dark-border text-light-text dark:text-dark-text font-bold text-xs py-3 rounded-xl shadow-xs transition-colors cursor-pointer"
                    data-title="{{ $portfolio->title }}"
                    data-category="@if($portfolio->category === 'website') Website Development @elseif($portfolio->category === 'mobile') Application Mobile @elseif($portfolio->category === 'joki') Joki Tugas Pemrograman @else Instalasi Windows & Software @endif"
                    data-description="{{ $portfolio->description }}"
                    data-technology="{{ json_encode($portfolio->technology) }}"
                    data-demo-url="{{ $portfolio->demo_url }}">
              Detail Proyek
            </button>
          </div>
        </div>

      </div>
      @endforeach
    </div>

  </div>
</section>

<!-- ======= DYNAMIC DETAIL MODAL (REUSABLE ELEMENT) ======= -->
<div id="project-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-xs transition-all duration-300">
  <div class="bg-white dark:bg-dark-card border border-light-border dark:border-dark-border rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl relative p-6 sm:p-8 animate-scaleUp">
    
    <!-- Close Button -->
    <button id="modal-close-btn" class="absolute top-6 right-6 p-2 rounded-xl border border-light-border dark:border-dark-border hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec transition-colors cursor-pointer text-light-text-sec dark:text-dark-text-sec" aria-label="Close modal">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>

    <!-- Modal Content Grid -->
    <div class="space-y-6">
      
      <!-- Header -->
      <div class="space-y-2 pr-10 text-left">
        <span id="modal-category" class="inline-block text-[10px] font-bold uppercase tracking-wider text-brand-blue dark:text-brand-cyan">Website Development</span>
        <h2 id="modal-title" class="text-2xl sm:text-3xl font-extrabold text-light-text dark:text-dark-text leading-tight">Nexora Corp — Website Korporat</h2>
      </div>

      <!-- Tech stack header -->
      <div class="space-y-2.5 text-left border-y border-light-border/60 dark:border-dark-border/60 py-4">
        <h4 class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Teknologi yang Digunakan</h4>
        <div id="modal-tech-pills" class="flex flex-wrap gap-2">
          <!-- Populated by JS -->
        </div>
      </div>

      <!-- Description -->
      <div class="space-y-2 text-left">
        <h4 class="text-xs font-bold uppercase tracking-wider text-light-text dark:text-dark-text">Deskripsi Proyek</h4>
        <p id="modal-description" class="text-light-text-sec dark:text-dark-text-sec text-sm leading-relaxed">
          <!-- Populated by JS -->
        </p>
      </div>

      <!-- Footer Buttons -->
      <div class="pt-4 border-t border-light-border/60 dark:border-dark-border/60 flex flex-col sm:flex-row items-center justify-between gap-4">
        
        <!-- Live Demo (If available) -->
        <a id="modal-demo-link" href="#" target="_blank" rel="noopener" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-light-bg dark:bg-dark-bg hover:bg-light-bg-sec dark:hover:bg-dark-bg-sec border border-light-border dark:border-dark-border px-6 py-3 rounded-xl font-bold text-xs transition-colors">
          <span>Kunjungi Demo Live</span>
          <span>↗</span>
        </a>

        <!-- Custom Order CTA button (WhatsApp Business) -->
        <a id="modal-order-link" href="#" target="_blank" rel="noopener" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white px-8 py-3.5 rounded-xl font-bold text-xs shadow-lg shadow-brand-blue/10 transition-colors">
          <span>Pesan Jasa Serupa</span>
          <span>💬</span>
        </a>

      </div>

    </div>

  </div>
</div>

<!-- Scripts for Interactivity -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    
    // ============================================
    // 1. Client-Side Category Filtering
    // ============================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        // Toggle Active button class
        filterButtons.forEach(b => {
          b.classList.remove('active', 'bg-brand-blue', 'text-white', 'dark:bg-brand-cyan', 'dark:text-dark-bg', 'shadow-md', 'shadow-brand-blue/10');
          b.classList.add('border-light-border', 'dark:border-dark-border', 'text-light-text-sec', 'dark:text-dark-text-sec');
        });
        
        btn.classList.add('active', 'bg-brand-blue', 'text-white', 'dark:bg-brand-cyan', 'dark:text-dark-bg', 'shadow-md', 'shadow-brand-blue/10');
        btn.classList.remove('border-light-border', 'dark:border-dark-border', 'text-light-text-sec', 'dark:text-dark-text-sec');

        const filterValue = btn.getAttribute('data-filter');

        portfolioItems.forEach(item => {
          const itemCategory = item.getAttribute('data-category');

          if (filterValue === 'all' || itemCategory === filterValue) {
            // Show item with transition
            item.classList.remove('hidden');
            setTimeout(() => {
              item.style.opacity = '1';
              item.style.transform = 'scale(1)';
            }, 50);
          } else {
            // Hide item with transition
            item.style.opacity = '0';
            item.style.transform = 'scale(0.95)';
            setTimeout(() => {
              item.classList.add('hidden');
            }, 250);
          }
        });
      });
    });

    // ============================================
    // 2. Reusable Dynamic Detail Modal
    // ============================================
    const projectModal = document.getElementById('project-modal');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    
    const mCategory = document.getElementById('modal-category');
    const mTitle = document.getElementById('modal-title');
    const mTechPills = document.getElementById('modal-tech-pills');
    const mDescription = document.getElementById('modal-description');
    const mDemoLink = document.getElementById('modal-demo-link');
    const mOrderLink = document.getElementById('modal-order-link');

    const detailButtons = document.querySelectorAll('.detail-btn');

    detailButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        // Read attributes
        const title = btn.getAttribute('data-title');
        const category = btn.getAttribute('data-category');
        const description = btn.getAttribute('data-description');
        const technologies = JSON.parse(btn.getAttribute('data-technology'));
        const demoUrl = btn.getAttribute('data-demo-url');

        // Populate Modal Fields
        mCategory.textContent = category;
        mTitle.textContent = title;
        mDescription.textContent = description;

        // Populate tech pills
        mTechPills.innerHTML = '';
        technologies.forEach(tech => {
          const span = document.createElement('span');
          span.className = 'px-3 py-1 bg-light-bg-sec dark:bg-dark-bg-sec border border-light-border dark:border-dark-border rounded-lg text-xs font-bold text-light-text-sec dark:text-dark-text-sec shadow-xs';
          span.textContent = tech;
          mTechPills.appendChild(span);
        });

        // Toggle Live Demo link visibility
        if (demoUrl && demoUrl !== '#') {
          mDemoLink.setAttribute('href', demoUrl);
          mDemoLink.classList.remove('hidden');
        } else {
          mDemoLink.classList.add('hidden');
        }

        // Susun link pesan WA kustom untuk CTA di dalam modal
        const waNumber = '6281234567890';
        const waText = `Halo TezWorks! Saya tertarik dengan proyek "${title}" dan ingin berkonsultasi mengenai pemesanan jasa yang serupa.`;
        mOrderLink.setAttribute('href', `https://wa.me/${waNumber}?text=${encodeURIComponent(waText)}`);

        // Open Modal (Show modal)
        projectModal.classList.remove('hidden');
      });
    });

    // Close Modal event
    function closeModal() {
      projectModal.classList.add('hidden');
    }

    modalCloseBtn.addEventListener('click', closeModal);
    
    // Close Modal on clicking background overlay
    projectModal.addEventListener('click', (e) => {
      if (e.target === projectModal) {
        closeModal();
      }
    });

    // Close Modal on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !projectModal.classList.contains('hidden')) {
        closeModal();
      }
    });

  });
</script>

<style>
  /* Custom anim scaleUp for Modal pop-up */
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
  .animate-scaleUp {
    animation: scaleUp 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
</style>
@endsection
