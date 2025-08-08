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
   <x-layouts.header :content="$content" />
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
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-bg">
                            <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                alt="Farming">
                        </div>
                        <div class="container">
                            <div class="hero-content">
                                <span class="welcome-text">WELCOME TO Joypur Agro</span>
                                <h1>{{ $banner->title }}</h1>
                                <p>{{ $banner->subtitle }}</p>
                                <a href="{{ $banner->url }}" class="discover-btn">Discover More</a>
                                <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/leaf.png"
                                    alt="leaf" class="ms-3">
                            </div>
                        </div>
                    </div>
                @endforeach



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
                                    <img src="{{ system_key('system_agro_image_one') ? Storage::url(system_key('system_agro_image_one')) : asset('asset/img/no-profile.png') }}"
                                        alt="New Technology">
                                </div>
                                <h3 class="mt-3">{{ system_key('system_agro_text_one') }}</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-40">
                            <div class="feature-box">
                                <div class="feature-image">
                                    <img src="{{ system_key('system_agro_image_two') ? Storage::url(system_key('system_agro_image_two')) : asset('asset/img/no-profile.png') }}"
                                        alt="Organic Services">
                                </div>
                                <h3 class="mt-3">{{ system_key('system_agro_text_two') }}</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-40">
                            <div class="feature-box">
                                <div class="feature-image">
                                    <img src="{{ system_key('system_agro_image_three') ? Storage::url(system_key('system_agro_image_three')) : asset('asset/img/no-profile.png') }}"
                                        alt="Systems">
                                </div>
                                <h3 class="mt-3">{{ system_key('system_agro_text_three') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Slider Section End -->
    @if (!$introduction == null)
        <!-- Introduction Section Start -->
        <section class="intro-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="intro-images">
                            <div class="intro-main-image">
                                <img src="{{ $introduction->image_1 ? Storage::url($introduction->image_1) : asset('asset/img/no-profile.png') }}"
                                    alt="Agriculture Field">
                            </div>
                            <div class="intro-small-image">
                                <img src="{{ $introduction->image_2 ? Storage::url($introduction->image_2) : asset('asset/img/no-profile.png') }}"
                                    alt="Organic Products">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="intro-content">
                            <span class="intro-subtitle">Our Introduction</span>
                            <h2 class="intro-title">{{ $introduction->title }}</h2>
                            <h6>{{ $introduction->subtitle }}.</h6>
                            <p class="intro-description">{{ $introduction->discription }}</p>



                            <a href="{{ $introduction->url }}" class="discover-more-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Introduction Section End -->
    @endif

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
                    @foreach ($projects as $project)
                        <!-- Project Card 1 -->
                        <div class="col-lg-3 col-md-6 margin-bottom-40">
                            <div class="project-card">
                                <div class="project-image">
                                    <img src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Agriculture Products">
                                </div>
                                <div class="project-content">
                                    <h3 class="project-title">{{ $project->title }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Projects Section End -->
    @if (!$benefit == null)
        <!-- Why Choose Section Start -->
        <section class="why-choose-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="why-choose-image">
                            <img src="{{ $benefit->image ? Storage::url($benefit->image) : asset('asset/img/no-profile.png') }}"
                                alt="Agriculture Field">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose-content">
                            <span class="why-choose-subtitle">Our Farm Benefits</span>
                            <h2 class="why-choose-title">{{ $benefit->title }}</h2>
                            <p class="why-choose-description">{{ $benefit->subtitle }}</p>

                            <div class="benefits-list">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>{{ $benefit->list_1_title }}</h4>
                                        <p>{{ $benefit->list_1_subtitle }}</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>{{ $benefit->list_2_title }}</h4>
                                        <p>{{ $benefit->list_2_subtitle }}</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>{{ $benefit->list_3_title }}</h4>
                                        <p>{{ $benefit->list_3_subtitle }}</p>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ $benefit->url }}" class="discover-more-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section End -->
    @endif

    <!-- We are certified By start  -->
    <section class="sister-concern py-5">
        <div class="container text-center">
            <h3 class="mb-4">Our Partners</h3>
            <div class="logos-wrapper">
                <div class="logos-slider">
                    <!-- First set of logos -->
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach

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
                    for (let i = 0; i < this.slides.length; i++) {
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
