document.querySelectorAll('.rg-slide').forEach(slide => {
    const bg = slide.getAttribute('data-bg');
    const sliceType = slide.getAttribute('data-slice');
    const slices = slide.querySelectorAll('.rg-slice');
    slices.forEach((slice, i) => {
      slice.style.backgroundImage = `url('${bg}')`;
      if (sliceType === 'col') {
        slice.style.backgroundPosition = `${i * 50}% center`;
        slice.style.backgroundSize = '300% 100%';
      } else if (sliceType === 'row') {
        slice.style.backgroundPosition = `center ${i * 50}%`;
        slice.style.backgroundSize = '100% 300%';
      }
      slice.style.backgroundRepeat = 'no-repeat';
    });
  });
  
  
  function animateCurrentSlide(swiper) {
    document.querySelectorAll('.rg-slide').forEach(slide => slide.classList.remove('rg-animate'));
    const active = swiper.slides[swiper.activeIndex];
    if (active) {
      setTimeout(() => {
        active.classList.add('rg-animate');
      }, 10);
    }
  }
  
  var swiper = new Swiper('.rg-swiper', {
    loop: true,
    effect: 'fade',
    speed: 1000,
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      bulletClass: 'rg-bullet',
      bulletActiveClass: 'rg-bullet-active',
      renderBullet: function (index, className) {
        return '<span class="' + className + '"></span>';
      }
    },
    on: {
      init: function() { animateCurrentSlide(this); },
      slideChangeTransitionStart: function() { animateCurrentSlide(this); }
    }
  });
  
  // Responsive Navbar Hamburger & Mega Menu Toggle
  (function() {
    const toggle = document.querySelector('.rg-navbar-toggle');
    const menu = document.querySelector('.rg-navbar-menu');
    const megaParent = document.querySelector('.rg-navbar-has-mega');
    const megaMenu = document.querySelector('.rg-mega-menu');
    const mq = window.matchMedia('(max-width: 992px)');
  
    if (toggle && menu) {
      toggle.addEventListener('click', function() {
        menu.classList.toggle('rg-navbar-menu-open');
        toggle.classList.toggle('menu-open', menu.classList.contains('rg-navbar-menu-open'));
      });
    }
  
    // Desktop: Add 'open' class on hover/focus for chevron rotation
    if (megaParent && megaMenu) {
      megaParent.addEventListener('mouseenter', function() {
        if (!mq.matches) megaParent.classList.add('open');
      });
      megaParent.addEventListener('mouseleave', function() {
        if (!mq.matches) megaParent.classList.remove('open');
      });
      megaParent.addEventListener('focusin', function() {
        if (!mq.matches) megaParent.classList.add('open');
      });
      megaParent.addEventListener('focusout', function() {
        if (!mq.matches) megaParent.classList.remove('open');
      });
    }
  
    // Mobile: Show mega menu on click
    if (mq.matches && megaParent && megaMenu) {
      megaParent.addEventListener('click', function(e) {
        e.stopPropagation();
        megaMenu.style.display = megaMenu.style.display === 'block' ? 'none' : 'block';
        megaParent.classList.toggle('open', megaMenu.style.display === 'block');
      });
      // Hide mega menu when clicking outside
      document.addEventListener('click', function(e) {
        if (!megaParent.contains(e.target)) {
          megaMenu.style.display = 'none';
          megaParent.classList.remove('open');
        }
      });
    }
  
    // Dropdown for Home (mobile)
    const dropdownToggles = document.querySelectorAll('.rg-navbar-has-dropdown');
  
  function setChevron(dropdown, up) {
    const chevron = dropdown.querySelector('.rg-navbar-chevron i');
    if (chevron) {
      chevron.classList.toggle('fa-chevron-down', !up);
      chevron.classList.toggle('fa-chevron-up', up);
    }
  }
  
  function toggleDropdown(dropdown, show) {
    const menu = dropdown.querySelector('.rg-dropdown-menu');
    if (menu) {
      menu.style.display = show ? 'block' : 'none';
    }
  }
  
  if (mq.matches && dropdownToggles.length > 0) {
    dropdownToggles.forEach(dropdown => {
      let isOpen = false;
  
      // Initially hide all menus
      toggleDropdown(dropdown, false);
  
      dropdown.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
  
        // Close other dropdowns
        dropdownToggles.forEach(other => {
          if (other !== dropdown) {
            other.classList.remove('open');
            setChevron(other, false);
            toggleDropdown(other, false);
          }
        });
  
        // Toggle current dropdown
        isOpen = !dropdown.classList.contains('open');
        dropdown.classList.toggle('open', isOpen);
        setChevron(dropdown, isOpen);
        toggleDropdown(dropdown, isOpen);
      });
    });
  
    // Close dropdowns on outside click
    document.addEventListener('click', function(e) {
      dropdownToggles.forEach(dropdown => {
        if (!dropdown.contains(e.target)) {
          dropdown.classList.remove('open');
          setChevron(dropdown, false);
          toggleDropdown(dropdown, false);
        }
      });
    });
  }
  
  
  })(); 
  