/* =========================================
   TezWorks — JavaScript
   ========================================= */

(function () {
  'use strict';

  // ---- NAVBAR SCROLL ----
  const navbar = document.getElementById('navbar');
  function handleNavbarScroll() {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', handleNavbarScroll, { passive: true });
  handleNavbarScroll();

  // ---- HAMBURGER MENU ----
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('nav-links');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('open');
  });

  // Close menu on nav link click
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinks.classList.remove('open');
    });
  });

  // ---- SMOOTH SCROLL ----
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navbarHeight = navbar.offsetHeight;
        const targetTop = target.getBoundingClientRect().top + window.scrollY - navbarHeight - 16;
        window.scrollTo({ top: targetTop, behavior: 'smooth' });
      }
    });
  });

  // ---- SCROLL REVEAL ----
  const revealElements = document.querySelectorAll('.service-card, .portfolio-card, .pricing-card, .testimonial-card, .process-step, .about-content, .about-visual, .contact-info, .contact-form-wrap');

  revealElements.forEach(el => el.classList.add('reveal'));

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, index * 60);
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  revealElements.forEach(el => revealObserver.observe(el));

  // ---- PROCESS STEPS ANIMATION ----
  const processSteps = document.querySelectorAll('.process-step');
  const stepObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, i * 150);
        stepObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  processSteps.forEach(step => stepObserver.observe(step));

  // ---- COUNTER ANIMATION ----
  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target'));
    const duration = 1800;
    const start = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target);
      if (progress < 1) requestAnimationFrame(update);
      else el.textContent = target;
    }

    requestAnimationFrame(update);
  }

  const statNumbers = document.querySelectorAll('.stat-number');
  let countersStarted = false;

  const counterObserver = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && !countersStarted) {
      countersStarted = true;
      statNumbers.forEach(animateCounter);
      counterObserver.disconnect();
    }
  }, { threshold: 0.5 });

  const heroStats = document.querySelector('.hero-stats');
  if (heroStats) counterObserver.observe(heroStats);

  // ---- PORTFOLIO FILTER ----
  const filterBtns = document.querySelectorAll('.filter-btn');
  const portfolioCards = document.querySelectorAll('.portfolio-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Update active state
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      portfolioCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = '';
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => {
            card.style.transition = 'all 0.4s ease';
            card.style.opacity = '1';
            card.style.transform = 'scale(1)';
          }, 20);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => { card.style.display = 'none'; }, 300);
        }
      });
    });
  });

  // ---- PRICING TOGGLE ----
  const pricingToggle = document.getElementById('pricing-toggle-input');
  const pricingWebsite = document.getElementById('pricing-website');
  const pricingApp = document.getElementById('pricing-app');

  if (pricingToggle) {
    pricingToggle.addEventListener('change', () => {
      if (pricingToggle.checked) {
        pricingWebsite.classList.add('hidden');
        pricingApp.classList.remove('hidden');
      } else {
        pricingWebsite.classList.remove('hidden');
        pricingApp.classList.add('hidden');
      }
    });
  }

  // ---- CONTACT FORM ----
  const contactForm = document.getElementById('contact-form');
  const formSuccess = document.getElementById('form-success');
  const formSubmitBtn = document.getElementById('form-submit-btn');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = document.getElementById('form-name').value.trim();
      const email = document.getElementById('form-email').value.trim();
      const message = document.getElementById('form-message').value.trim();

      if (!name || !email || !message) {
        // Shake animation for empty fields
        [document.getElementById('form-name'), document.getElementById('form-email'), document.getElementById('form-message')].forEach(field => {
          if (!field.value.trim()) {
            field.style.borderColor = '#f87171';
            field.style.boxShadow = '0 0 0 3px rgba(248, 113, 113, 0.15)';
            setTimeout(() => {
              field.style.borderColor = '';
              field.style.boxShadow = '';
            }, 2000);
          }
        });
        return;
      }

      // Simulate submission
      const btn = formSubmitBtn;
      btn.disabled = true;
      btn.querySelector('span').textContent = 'Mengirim...';

      setTimeout(() => {
        formSuccess.classList.remove('hidden');
        contactForm.reset();
        btn.disabled = false;
        btn.querySelector('span').textContent = 'Kirim Pesan';
        setTimeout(() => {
          formSuccess.classList.add('hidden');
        }, 5000);
      }, 1500);
    });
  }

  // ---- BACK TO TOP ----
  const backToTop = document.getElementById('back-to-top');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 600) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  }, { passive: true });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // ---- HERO DEVICE PARALLAX ----
  const heroDevice = document.querySelector('.hero-device');
  if (heroDevice) {
    window.addEventListener('mousemove', (e) => {
      const rect = heroDevice.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const dx = (e.clientX - centerX) / window.innerWidth;
      const dy = (e.clientY - centerY) / window.innerHeight;
      heroDevice.style.transform = `perspective(1000px) rotateY(${dx * 5}deg) rotateX(${-dy * 5}deg)`;
    });

    window.addEventListener('mouseleave', () => {
      heroDevice.style.transform = '';
    });
  }

  // ---- SERVICE CARD HOVER GLOW ----
  document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;
      card.style.setProperty('--mouse-x', x + '%');
      card.style.setProperty('--mouse-y', y + '%');
    });
  });

  // ---- TYPING ANIMATION in HERO ----
  const typingTarget = document.querySelector('.hero-subtitle');
  if (typingTarget) {
    // Subtle cursor blink on hero
  }

  // ---- SCROLL PROGRESS ----
  const progressBar = document.createElement('div');
  progressBar.style.cssText = `
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    width: 0%;
    background: linear-gradient(90deg, #38bdf8, #6366f1, #a855f7);
    z-index: 9999;
    transition: width 0.1s ease;
    pointer-events: none;
  `;
  document.body.appendChild(progressBar);

  window.addEventListener('scroll', () => {
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = totalHeight > 0 ? (window.scrollY / totalHeight) * 100 : 0;
    progressBar.style.width = progress + '%';
  }, { passive: true });

  // ---- ACTIVE NAV LINK HIGHLIGHTING ----
  const sections = document.querySelectorAll('section[id]');
  const navLinkElements = document.querySelectorAll('.nav-link');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - navbar.offsetHeight - 40;
      if (window.scrollY >= sectionTop) {
        current = section.getAttribute('id');
      }
    });

    navLinkElements.forEach(link => {
      link.classList.remove('active-nav');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active-nav');
      }
    });
  }, { passive: true });

  // Add active nav style
  const navStyle = document.createElement('style');
  navStyle.textContent = `.nav-link.active-nav { color: var(--accent-cyan) !important; }`;
  document.head.appendChild(navStyle);

  // ---- FLOATING CARD MOUSE PARALLAX ----
  const floatingCards = document.querySelectorAll('.floating-card');
  window.addEventListener('mousemove', (e) => {
    const cx = window.innerWidth / 2;
    const cy = window.innerHeight / 2;
    const dx = (e.clientX - cx) / cx;
    const dy = (e.clientY - cy) / cy;

    floatingCards.forEach((card, i) => {
      const factor = (i + 1) * 6;
      card.style.transform = `translate(${dx * factor}px, ${dy * factor}px)`;
    });
  });

  console.log('%cTezWorks 🚀', 'font-size: 24px; font-weight: bold; background: linear-gradient(135deg, #38bdf8, #a855f7); -webkit-background-clip: text; color: transparent;');
  console.log('%cJasa Pembuatan Aplikasi & Website Profesional', 'color: #94a3b8; font-size: 12px;');

})();
