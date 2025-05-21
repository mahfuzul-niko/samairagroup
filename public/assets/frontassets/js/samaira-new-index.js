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
      delay: 5000,
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
  
    // Dropdown for Home (responsive, only dropdown, not mega menu)
    (function() {
      const DROPDOWN_CLASS = 'rg-navbar-has-dropdown';
      let dropdownToggles = [];
      let mq = window.matchMedia('(max-width: 992px)');
      let listeners = [];

      function clearDropdownListeners() {
        dropdownToggles.forEach((dropdown, i) => {
          if (listeners[i]) {
            listeners[i].forEach(({type, fn}) => {
              dropdown.removeEventListener(type, fn);
            });
          }
        });
        listeners = [];
      }

      function setupDropdownMenus() {
        dropdownToggles = Array.from(document.querySelectorAll('.' + DROPDOWN_CLASS));
        clearDropdownListeners();
        mq = window.matchMedia('(max-width: 992px)');
        listeners = dropdownToggles.map(dropdown => []);

        if (mq.matches) {
          // MOBILE: click to open/close
          dropdownToggles.forEach((dropdown, idx) => {
            const menu = dropdown.querySelector('.rg-dropdown-menu');
            if (menu) menu.style.display = 'none';
            dropdown.classList.remove('open');
            const clickFn = function(e) {
              e.preventDefault();
              e.stopPropagation();
              // Close other dropdowns
              dropdownToggles.forEach(other => {
                if (other !== dropdown) {
                  other.classList.remove('open');
                  const otherMenu = other.querySelector('.rg-dropdown-menu');
                  if (otherMenu) otherMenu.style.display = 'none';
                }
              });
              // Toggle current
              const isOpen = !dropdown.classList.contains('open');
              dropdown.classList.toggle('open', isOpen);
              if (menu) menu.style.display = isOpen ? 'block' : 'none';
            };
            dropdown.addEventListener('click', clickFn);
            listeners[idx].push({type: 'click', fn: clickFn});
          });
          // Close on outside click
          if (!window._dropdownOutsideClick) {
            window._dropdownOutsideClick = function(e) {
              dropdownToggles.forEach(dropdown => {
                if (!dropdown.contains(e.target) && !e.target.closest('.rg-navbar-has-mega')) {
                  dropdown.classList.remove('open');
                  const menu = dropdown.querySelector('.rg-dropdown-menu');
                  if (menu) menu.style.display = 'none';
                }
              });
            };
            document.addEventListener('click', window._dropdownOutsideClick);
          }
        } else {
          // DESKTOP: hover to open/close
          dropdownToggles.forEach((dropdown, idx) => {
            const menu = dropdown.querySelector('.rg-dropdown-menu');
            if (menu) {
              menu.style.display = 'none';
            }
            dropdown.classList.remove('open');

            const mouseEnterFn = function() {
              dropdown.classList.add('open');
              if (menu) {
                menu.style.display = 'flex';
              }
            };

            const mouseLeaveFn = function() {
              dropdown.classList.remove('open');
              if (menu) {
                menu.style.display = 'none';
              }
            };

            dropdown.addEventListener('mouseenter', mouseEnterFn);
            dropdown.addEventListener('mouseleave', mouseLeaveFn);
            listeners[idx].push({type: 'mouseenter', fn: mouseEnterFn});
            listeners[idx].push({type: 'mouseleave', fn: mouseLeaveFn});
          });

          // Remove mobile outside click if present
          if (window._dropdownOutsideClick) {
            document.removeEventListener('click', window._dropdownOutsideClick);
            window._dropdownOutsideClick = null;
          }
        }
      }

      // Initial setup
      setupDropdownMenus();
      // Re-setup on resize
      window.addEventListener('resize', setupDropdownMenus);
    })();
  
  // Dual mega menu logic for desktop and mobile
  function setupMegaMenu() {
    const brandsTrigger = document.getElementById('brands-trigger');
    const desktopMegaMenu = document.getElementById('brands-mega-menu-desktop');
    const mobileMegaMenu = document.getElementById('brands-mega-menu-mobile');
    if (!brandsTrigger) return;
    let isMobile = window.innerWidth <= 992;
    let hoverTimeout;

    // Remove all previous listeners
    brandsTrigger.onmouseenter = null;
    brandsTrigger.onmouseleave = null;
    if (desktopMegaMenu) {
      desktopMegaMenu.onmouseenter = null;
      desktopMegaMenu.onmouseleave = null;
      desktopMegaMenu.classList.remove('show');
    }
    if (mobileMegaMenu) {
      mobileMegaMenu.classList.remove('show');
      mobileMegaMenu.onmouseenter = null;
      mobileMegaMenu.onmouseleave = null;
      brandsTrigger.onclick = null;
    }

    // Remove any previous outside click handler
    document.removeEventListener('click', window._mobileMegaMenuOutsideClick);

    if (isMobile && mobileMegaMenu) {
      // Mobile: open/close on click
      brandsTrigger.onclick = function(e) {
        e.preventDefault();
        const isOpen = mobileMegaMenu.classList.contains('show');
        mobileMegaMenu.classList.toggle('show');
        if (!isOpen) {
          // Add outside click handler
          window._mobileMegaMenuOutsideClick = function(ev) {
            if (!brandsTrigger.contains(ev.target) && !mobileMegaMenu.contains(ev.target)) {
              mobileMegaMenu.classList.remove('show');
              document.removeEventListener('click', window._mobileMegaMenuOutsideClick);
            }
          };
          setTimeout(() => { // Delay to avoid immediate close on open
            document.addEventListener('click', window._mobileMegaMenuOutsideClick);
          }, 0);
        } else {
          document.removeEventListener('click', window._mobileMegaMenuOutsideClick);
        }
      };
    } else if (desktopMegaMenu) {
      // Desktop: open on hover/focus
      brandsTrigger.onmouseenter = showDesktopMegaMenu;
      brandsTrigger.onmouseleave = hideDesktopMegaMenu;
      desktopMegaMenu.onmouseenter = showDesktopMegaMenu;
      desktopMegaMenu.onmouseleave = hideDesktopMegaMenu;
    }

    function showDesktopMegaMenu() {
      desktopMegaMenu.classList.add('show');
      clearTimeout(hoverTimeout);
    }
    function hideDesktopMegaMenu() {
      hoverTimeout = setTimeout(() => {
        desktopMegaMenu.classList.remove('show');
      }, 100);
    }
  }

  window.addEventListener('DOMContentLoaded', setupMegaMenu);
  window.addEventListener('resize', setupMegaMenu);
  
  // Align dropdown menus to container width and prevent overflow (desktop)
  function alignDropdownMenus() {
    const navbarContainer = document.querySelector('.rg-navbar-container');
    const dropdownMenus = document.querySelectorAll('.rg-dropdown-menu');
    if (!navbarContainer) return;
    const containerRect = navbarContainer.getBoundingClientRect();

    dropdownMenus.forEach(menu => {
      // save old styles
  const oldDisplay = menu.style.display;
  const oldVisibility = menu.style.visibility;

  // show off-screen invisibly so we can measure
  menu.style.display = 'block';
  menu.style.visibility = 'hidden';

  // restore original
  menu.style.display = oldDisplay;
  menu.style.visibility = oldVisibility;

      // Only align on desktop
      if (window.innerWidth <= 992) {
        menu.style.left = '';
        menu.style.right = '';
        menu.style.width = '';
        return;
      }
      // Reset styles
      menu.style.left = '';
      menu.style.right = '';
      menu.style.width = '';

      // don’t align menus that aren’t visible right now
      if (menu.offsetParent === null) return;

      // Set width to min-width or content width
      const minWidth = menu.offsetWidth;
      menu.style.width = minWidth + 'px';

      // Get menu trigger's position
      const trigger = menu.parentElement;
      const triggerRect = trigger.getBoundingClientRect();

      // Calculate left offset relative to container
      let left = triggerRect.left - containerRect.left;

      // If menu would overflow right, align to right edge
      if (left + menu.offsetWidth > containerRect.width) {
        left = containerRect.width - menu.offsetWidth;
      }
      if (left < 0) left = 0;

      menu.style.left = left + 'px';
    });
  }

  window.addEventListener('DOMContentLoaded', alignDropdownMenus);
  window.addEventListener('resize', alignDropdownMenus);
  
  
  })(); 
  