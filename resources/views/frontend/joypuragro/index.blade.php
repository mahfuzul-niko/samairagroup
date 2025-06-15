<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Joypur Agro Trading</title>
      <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/joypur-agro/logo.png" type="image/png">
      
      <!-- Bootstrap CSS -->
      <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
      
      <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">
    
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />
    
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/joypur-agro-trading.css">
      <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">
    </head>

<body>
    
    <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->

    <!-- Navbar Start -->
    <x-layouts.navbar>

        <x-slot name="nav">

        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

  <!-- Hero Slider Section Start -->
  <section class="hero-slider content-margin-top">
    <div class="swiper hero-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="slide-bg">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/bg1.png" alt="Farming">
          </div>
          <div class="container">
            <div class="hero-content">
              <span class="welcome-text">WELCOME TO AGRIOS FARMING</span>
              <h1>Agriculture<br>Eco Farming</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
              <a href="#" class="discover-btn">Discover More</a>
              <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/leaf.png" alt="leaf" class="ms-3">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
            <div class="slide-bg">
              <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/bg.png" alt="Farming">
            </div>
            <div class="container">
              <div class="hero-content">
                <span class="welcome-text">WELCOME TO AGRIOS FARMING</span>
                <h1>Agriculture<br>Eco Farming</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                <a href="#" class="discover-btn">Discover More</a>
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/leaf.png" alt="leaf" class="ms-3">
              </div>
            </div>
          </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
            <div class="slide-bg">
              <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/bg.png" alt="Farming">
            </div>
            <div class="container">
              <div class="hero-content">
                <span class="welcome-text">WELCOME TO AGRIOS FARMING</span>
                <h1>Agriculture<br>Eco Farming</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                <a href="#" class="discover-btn">Discover More</a>
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/leaf.png" alt="leaf" class="ms-3">
              </div>
            </div>
          </div>


      <!-- Slider Navigation -->
      <div class="slider-nav"></div>
    </div>

    <!-- Feature Boxes -->
    <div class="feature-boxes">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 margin-bottom-40">
            <div class="feature-box">
              <div class="feature-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/container.png" alt="New Technology">
              </div>
              <h3 class="mt-3">We're using a<br>new technology</h3>
            </div>
          </div>
          <div class="col-lg-4 margin-bottom-40">
            <div class="feature-box">
              <div class="feature-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/container1.png" alt="Organic Services">
              </div>
              <h3 class="mt-3">Good in smart<br>organic services</h3>
            </div>
          </div>
          <div class="col-lg-4 margin-bottom-40">
            <div class="feature-box">
              <div class="feature-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/container2.png" alt="Systems">
              </div>
              <h3 class="mt-3">Reforming<br>in the systems</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Slider Section End -->

  <!-- Introduction Section Start -->
  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="intro-images">
            <div class="intro-main-image">
              <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/main.png" alt="Agriculture Field">
            </div>
            <div class="intro-small-image">
              <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/small.png" alt="Organic Products">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="intro-content">
            <span class="intro-subtitle">Our Introduction</span>
            <h2 class="intro-title">Agriculture & Organic Product Farm</h2>
            <h6>Agrios is the largest global organic farm.</h6>
            <p class="intro-description">Agrios is the largest global organic farm. There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humor or random word which don't look even.</p>
            
            <div class="intro-features">
              <div class="intro-feature-item">
                <div class="intro-feature-icon">
                  <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/Icon.svg" alt="Growing fruits">
                </div>
                <span class="intro-feature-text">Growing fruits vegetables</span>
              </div>
              <div class="intro-feature-item">
                <div class="intro-feature-icon">
                  <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/Icon1.svg" alt="Tips">
                </div>
                <span class="intro-feature-text">Tips for ripening your fruits</span>
              </div>
            </div>

            <div class="intro-list">
              <div class="intro-list-item">
                <i class="fas fa-check-circle"></i>
                <span>Lorem Ipsum is not simply random text.</span>
              </div>
              <div class="intro-list-item">
                <i class="fas fa-check-circle"></i>
                <span>Making this the first true generator on the internet.</span>
              </div>
            </div>

            <a href="#" class="discover-more-btn">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Introduction Section End -->

  <!-- Explore Projects Section Start -->
  <section class="explore-projects">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-subtitle">Recently Completed</span>
        <h2 class="section-title">Explore Projects</h2>
      </div>
    </div>
    
    <div class="project-cards-wrapper">
      <div class="container">
        <div class="row">
          <!-- Project Card 1 -->
          <div class="col-lg-3 col-md-6 margin-bottom-40">
            <div class="project-card">
              <div class="project-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/explore.png" alt="Agriculture Products">
              </div>
              <div class="project-content">
                <h3 class="project-title">Agriculture Products</h3>
              </div>
            </div>
          </div>

          <!-- Project Card 2 -->
          <div class="col-lg-3 col-md-6 margin-bottom-40">
            <div class="project-card">
              <div class="project-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/explore.png" alt="Agriculture Products">
              </div>
              <div class="project-content">
                <h3 class="project-title">Agriculture Products</h3>
              </div>
            </div>
          </div>

          <!-- Project Card 3 -->
          <div class="col-lg-3 col-md-6 margin-bottom-40">
            <div class="project-card">
              <div class="project-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/explore.png" alt="Agriculture Products">
              </div>
              <div class="project-content">
                <h3 class="project-title">Agriculture Products</h3>
              </div>
            </div>
          </div>

          <!-- Project Card 4 -->
          <div class="col-lg-3 col-md-6">
            <div class="project-card">
              <div class="project-image">
                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/explore.png" alt="Agriculture Products">
              </div>
              <div class="project-content">
                <h3 class="project-title">Agriculture Products</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Explore Projects Section End -->

  <!-- Why Choose Section Start -->
  <section class="why-choose-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="why-choose-image">
            <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/agro.png" alt="Agriculture Field">
            <div class="leader-badge">
              <h4>Agriculture Professional Leader</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why-choose-content">
            <span class="why-choose-subtitle">Our Farm Benefits</span>
            <h2 class="why-choose-title">Why Choose Agro Market</h2>
            <p class="why-choose-description">There are many variations of passages of available but the majority have suffered alteration in some form by injected humor or random word which don't look even.</p>
            
            <div class="benefits-list">
              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-check"></i>
                </div>
                <div class="benefit-content">
                  <h4>Quality Organic Food</h4>
                  <p>There are variation You need to be sure there is anything hidden in the middle of text.</p>
                </div>
              </div>

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-check"></i>
                </div>
                <div class="benefit-content">
                  <h4>Professional Farmers</h4>
                  <p>There are variation You need to be sure there is anything hidden in the middle of text.</p>
                </div>
              </div>

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-check"></i>
                </div>
                <div class="benefit-content">
                  <h4>Quality Products</h4>
                  <p>There are variation You need to be sure there is anything hidden in the middle of text.</p>
                </div>
              </div>
            </div>

            <a href="#" class="discover-more-btn">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Choose Section End -->

  <!-- We are certified By start  -->
  <section class="sister-concern py-5">
    <div class="container text-center">
      <h3 class="mb-4">We are certified By</h3>
      <div class="logos-wrapper">
        <div class="logos-slider">
          <!-- First set of logos -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
          <!-- Duplicate set of logos for seamless loop -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- We are certified By End  -->

  <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

  <!-- jQuery -->
  <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
  <!-- Swiper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>
  <script>
    // Initialize Swiper
    var heroSwiper = new Swiper('.hero-swiper', {
      speed: 1000,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      on: {
        init: function() {
          // Create navigation buttons dynamically
          const sliderNav = document.querySelector('.slider-nav');
          sliderNav.innerHTML = ''; // Clear existing buttons
          
          // Create buttons based on number of slides
          for(let i = 0; i < this.slides.length; i++) {
            const button = document.createElement('button');
            button.className = 'nav-button' + (i === 0 ? ' active' : '');
            button.setAttribute('data-slide', i);
            button.innerHTML = '<span class="nav-circle"></span>';
            sliderNav.appendChild(button);
          }

          // Add click handlers
          const navButtons = document.querySelectorAll('.nav-button');
          navButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
              heroSwiper.slideTo(index);
              updateActiveButton(index);
            });
          });
        }
      }
    });

    // Update active button
    function updateActiveButton(index) {
      const navButtons = document.querySelectorAll('.nav-button');
      navButtons.forEach(button => button.classList.remove('active'));
      navButtons[index].classList.add('active');
    }

    // Update buttons on slide change
    heroSwiper.on('slideChange', function() {
      updateActiveButton(heroSwiper.realIndex);
    });

    // Mobile Menu Toggle
    document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
      document.querySelector('.nav-menu').classList.toggle('active');
      this.classList.toggle('active');
    });

    // Handle Dropdown Menus
    const dropdownItems = document.querySelectorAll('.has-dropdown');
    let currentDropdown = null;

    function closeDropdown(dropdown) {
      if (dropdown) {
        dropdown.classList.remove('show-dropdown');
      }
    }

    dropdownItems.forEach(item => {
      if (window.innerWidth >= 992) {
        // Desktop hover behavior
        item.addEventListener('mouseenter', function() {
          if (currentDropdown && currentDropdown !== this) {
            closeDropdown(currentDropdown);
          }
          this.classList.add('show-dropdown');
          currentDropdown = this;
        });

        item.addEventListener('mouseleave', function() {
          closeDropdown(this);
          currentDropdown = null;
        });
      } else {
        // Mobile click behavior
        item.addEventListener('click', function(e) {
          e.preventDefault();
          if (currentDropdown && currentDropdown !== this) {
            closeDropdown(currentDropdown);
          }
          this.classList.toggle('show-dropdown');
          currentDropdown = this.classList.contains('show-dropdown') ? this : null;
        });
      }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.has-dropdown') && currentDropdown) {
        closeDropdown(currentDropdown);
        currentDropdown = null;
      }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
      const isDesktop = window.innerWidth >= 992;
      
      dropdownItems.forEach(item => {
        // Remove existing event listeners
        const clone = item.cloneNode(true);
        item.parentNode.replaceChild(clone, item);
        
        if (isDesktop) {
          // Add desktop hover behavior
          clone.addEventListener('mouseenter', function() {
            if (currentDropdown && currentDropdown !== this) {
              closeDropdown(currentDropdown);
            }
            this.classList.add('show-dropdown');
            currentDropdown = this;
          });

          clone.addEventListener('mouseleave', function() {
            closeDropdown(this);
            currentDropdown = null;
          });
        } else {
          // Add mobile click behavior
          clone.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentDropdown && currentDropdown !== this) {
              closeDropdown(currentDropdown);
            }
            this.classList.toggle('show-dropdown');
            currentDropdown = this.classList.contains('show-dropdown') ? this : null;
          });
        }
      });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
      if (window.innerWidth < 992) {
        if (!e.target.closest('.nav-menu') && !e.target.closest('.mobile-menu-btn')) {
          document.querySelector('.nav-menu').classList.remove('active');
          document.querySelector('.mobile-menu-btn').classList.remove('active');
          if (currentDropdown) {
            closeDropdown(currentDropdown);
            currentDropdown = null;
          }
        }
      }
    });
  </script>


</body>

</html>

