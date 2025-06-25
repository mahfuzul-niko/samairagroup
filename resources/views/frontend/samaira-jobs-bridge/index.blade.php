<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Jobs Bridge Limited</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-jobs/logo.png" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-jobs.css" rel="stylesheet">
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

    <!-- Slider Start -->
    <div class="contact-slider-container samaira-skill-slider content-margin-top">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="hero-content">
                            <div class="sjb-hero-content">
                                <h1 class="font-weight-bold">{{ $banner->title }}</h1>
                                <p>{{ $banner->subtitle }}</p>
                                <a href="{{ $banner->url }}" class="sjb-hire-btn d-inline-block text-decoration-none"
                                    type="button">Hire a freelancer</a>
                            </div>
                        </div>
                        <div class="slide-bg-wrap">
                            <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                alt="Slide 1" class="slide-bg-img">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Slider End -->
    <main>
        <!-- Features Section Start -->
        <section class="sjb-features">
            <div class="sjb-feature-card">
                <div class="sjb-feature-icon sjb-feature-account">
                    <!-- Account SVG -->
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group1.png" alt="Account Icon">
                </div>
                <h3>Create Account</h3>
                <p>{{ system_key('system_job_create') }}</p>
            </div>
            <div class="sjb-feature-card">
                <div class="sjb-feature-icon sjb-feature-search">
                    <!-- Search SVG -->
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group2.png" alt="Search Icon">
                </div>
                <h3>Search work</h3>
                <p>{{ system_key('system_job_new_search') }}</p>
            </div>
            <div class="sjb-feature-card">
                <div class="sjb-feature-icon sjb-feature-save">
                    <!-- Save/Apply SVG -->
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group3.png" alt="Save Icon">
                </div>
                <h3>Save and apply</h3>
                <p>{{ system_key('system_job_apply') }}</p>
            </div>
        </section>
        <!-- Features Section End -->
        @if (!$jobAbout == null)
            <!-- Highlight Section Start -->
            <section class="sjb-highlight-section">
                <div class="sjb-highlight-container">
                    <div class="sjb-highlight-left">
                        <div class="sjb-highlight-img-wrapper">
                            <img src="{{ $jobAbout->image ? Storage::url($jobAbout->image) : asset('assets/img/no-profile.png') }}"
                                alt="Woman in blue suit" class="sjb-highlight-img">
                        </div>
                    </div>
                    <div class="sjb-highlight-right">
                        <h2>
                            {{ $jobAbout->title }}
                        </h2>
                        <p>
                            {{ $jobAbout->discretion }}
                        </p>
                    </div>
                </div>
            </section>
            <!-- Highlight Section End -->
        @endif

        <!-- Recent Works Section Start -->
        <section class="sjb-recent-works-section">
            <div class="container">
                <div class="sjb-recent-works-header">
                    <div>
                        <div class="sjb-recent-works-subtitle">The latest freelance work!</div>
                        <h2 class="sjb-recent-works-title">Recently Posted <span>Works</span></h2>
                    </div>
                    <div class="sjb-slider-nav">
                        <button class="sjb-slider-btn sjb-slider-prev"><i class="fa fa-arrow-left"></i></button>
                        <button class="sjb-slider-btn sjb-slider-next"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="sjb-slider-wrapper">
                    <div class="sjb-slider">
                        <!-- Slide 1 -->
                        @foreach ($works as $work)
                            <div class="sjb-work-card">
                                <div class="ribbon"><span>Deadline:
                                        {{ \Carbon\Carbon::parse($work->deadline)->format('d M ') }}
                                    </span></div>
                                <div class="sjb-work-icon"><img
                                        src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/MaterialUi.png"
                                        alt="Logo Design"></div>
                                <h3>{{ $work->title }}</h3>
                                <p>{{ $work->subtitle }}</p>
                                <div class="sjb-work-bid-row">
                                    <span class="sjb-work-bid-amount">BDT {{ $work->salary }}</span>
                                    <a href="{{ route('page.job.apply', $work) }}" class="sjb-work-apply">Apply now</a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Slide 2 -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Recent Works Section End -->

        <!-- Categories Section Start -->
        <section class="sjb-categories-section">
            <div class="container">
                <h2 class="sjb-categories-title">Our Completed <span>Projects</span></h2>
                <div class="sjb-categories-grid">
                    @foreach ($projects as $project)
                        <a href="#">
                            <div class="sjb-category-card"
                                style="background-image:url('{{ $project->image ? Storage::url($project->image) : asset('assets/img/no-profile.png') }}')">
                                <div class="sjb-category-overlay"></div>
                                <span>{{ $project->title }}</span>
                            </div>
                        </a>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Portfolio Slider Section Start -->
        {{-- <section class="sjb-portfolio-section">
            <div class="container">
                <div class="sjb-portfolio-header">
                    <div class="sjb-portfolio-subtitle">Logos, websites, book covers & more!</div>
                    <h2 class="sjb-portfolio-title">Checkout The Best <span>Portfolios</span> Here</h2>
                </div>
                <div class="sjb-portfolio-slider-wrapper">
                    <div class="sjb-portfolio-slider">
                        <!-- Slide 1 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Bunny.design</div>
                                    <div class="sjb-portfolio-role">UI/UX Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Bhaskar Tiwari</div>
                                    <div class="sjb-portfolio-role">Graphic Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Aksara Joshi</div>
                                    <div class="sjb-portfolio-role">Graphic Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Riya Sen</div>
                                    <div class="sjb-portfolio-role">Web Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 1 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Bunny.design</div>
                                    <div class="sjb-portfolio-role">UI/UX Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Bhaskar Tiwari</div>
                                    <div class="sjb-portfolio-role">Graphic Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Aksara Joshi</div>
                                    <div class="sjb-portfolio-role">Graphic Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="sjb-portfolio-card">
                            <div class="sjb-portfolio-img"
                                style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')">
                            </div>
                            <div class="sjb-portfolio-info">
                                <div>
                                    <div class="sjb-portfolio-name">Riya Sen</div>
                                    <div class="sjb-portfolio-role">Web Designer</div>
                                </div>
                                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sjb-portfolio-dots"></div>
                </div>
            </div>
        </section> --}}
        <!-- Portfolio Slider Section End -->

        <!-- Newsletter Subscription Section Start -->
        <section class="sjb-newsletter-section">
            <div class="container">
                <h2 class="sjb-newsletter-title">Newsletter Subscription</h2>
                <div class="sjb-newsletter-subtitle">Subscribe to our newsletter to get new freelance work and projects
                </div>
                <form class="sjb-newsletter-form" action="{{ route('system.store.newsletter') }}" method="POST">
                    @csrf
                     <input type="hidden" name="key" value="job">
                    <input type="email" class="sjb-newsletter-input" name="email" placeholder="Enter your email address"
                        required />
                    <button type="submit" class="sjb-newsletter-btn">Subscribe</button>
                </form>
            </div>
        </section>
        <!-- Newsletter Subscription Section End -->

        <!-- Sister Concern start  -->
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
        <!-- Sister Concern End  -->

        <!-- Custom Footer Section Start -->
        <x-layouts.footer />
        <!-- Custom Footer Section End -->
    </main>


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
        document.addEventListener('DOMContentLoaded', function() {
            // Recent Works Slider (existing)
            const slider = document.querySelector('.sjb-slider');
            const cards = document.querySelectorAll('.sjb-work-card');
            const prevBtn = document.querySelector('.sjb-slider-prev');
            const nextBtn = document.querySelector('.sjb-slider-next');
            let currentIndex = 0;
            let cardsPerView = 3;
            // let autoSlideInterval = null;
            let isHovered = false;

            function updateCardsPerView() {
                if (window.innerWidth <= 700) {
                    cardsPerView = 1;
                } else if (window.innerWidth <= 900) {
                    cardsPerView = 2;
                } else {
                    cardsPerView = 3;
                }
            }

            function updateSlider() {
                const sliderStyles = window.getComputedStyle(slider);
                const gap = parseInt(sliderStyles.gap) || 24;
                const cardWidth = cards[0].offsetWidth + gap;
                slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }

            function checkButtons() {
                prevBtn.disabled = currentIndex === 0;
                nextBtn.disabled = currentIndex >= cards.length - cardsPerView;
            }

            function goToNext() {
                if (currentIndex < cards.length - cardsPerView) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
                checkButtons();
            }

            function goToPrev() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = cards.length - cardsPerView;
                }
                updateSlider();
                checkButtons();
            }

            prevBtn.addEventListener('click', function() {
                goToPrev();
            });

            nextBtn.addEventListener('click', function() {
                goToNext();
            });

            function startAutoSlide() {
                if (autoSlideInterval) clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(function() {
                    if (!isHovered) {
                        goToNext();
                    }
                }, 3000);
            }

            slider.addEventListener('mouseenter', function() {
                isHovered = true;
            });
            slider.addEventListener('mouseleave', function() {
                isHovered = false;
            });

            window.addEventListener('resize', function() {
                updateCardsPerView();
                if (currentIndex > cards.length - cardsPerView) {
                    currentIndex = Math.max(0, cards.length - cardsPerView);
                }
                updateSlider();
                checkButtons();
            });

            // Initial setup
            updateCardsPerView();
            updateSlider();
            checkButtons();
            // startAutoSlide();

            // --- Portfolio Slider ---
            const pfSlider = document.querySelector('.sjb-portfolio-slider');
            const pfCards = document.querySelectorAll('.sjb-portfolio-card');
            const pfDotsContainer = document.querySelector('.sjb-portfolio-dots');
            let pfCurrent = 0;
            let pfCardsPerView = 3;
            let pfAutoSlide = null;
            let pfIsHovered = false;

            function updatePfCardsPerView() {
                if (window.innerWidth <= 700) {
                    pfCardsPerView = 1;
                } else if (window.innerWidth <= 900) {
                    pfCardsPerView = 2;
                } else {
                    pfCardsPerView = 3;
                }
            }

            function updatePfSlider() {
                const pfSliderStyles = window.getComputedStyle(pfSlider);
                const pfGap = parseInt(pfSliderStyles.gap) || 28;
                const pfCardWidth = pfCards[0].offsetWidth + pfGap;
                pfSlider.style.transform = `translateX(-${pfCurrent * pfCardWidth}px)`;
            }

            function updatePfDots() {
                pfDotsContainer.innerHTML = '';
                const total = pfCards.length - pfCardsPerView + 1;
                for (let i = 0; i < total; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'sjb-portfolio-dot' + (i === pfCurrent ? ' active' : '');
                    dot.addEventListener('click', function() {
                        pfCurrent = i;
                        updatePfSlider();
                        updatePfDots();
                    });
                    pfDotsContainer.appendChild(dot);
                }
            }

            function pfGoToNext() {
                if (pfCurrent < pfCards.length - pfCardsPerView) {
                    pfCurrent++;
                    updatePfSlider();
                    updatePfDots();
                }
                // else {
                //   pfCurrent = 0;
                // }

            }

            function pfGoToPrev() {
                if (pfCurrent > 0) {
                    pfCurrent--;
                    updatePfSlider();
                    updatePfDots();
                }
                // else {
                //   pfCurrent = pfCards.length - pfCardsPerView;
                // }

            }

            function pfStartAutoSlide() {
                if (pfAutoSlide) clearInterval(pfAutoSlide);
                pfAutoSlide = setInterval(function() {
                    if (!pfIsHovered) pfGoToNext();
                }, 3000);
            }
            pfSlider.addEventListener('mouseenter', function() {
                pfIsHovered = true;
            });
            pfSlider.addEventListener('mouseleave', function() {
                pfIsHovered = false;
            });
            window.addEventListener('resize', function() {
                updatePfCardsPerView();
                if (pfCurrent > pfCards.length - pfCardsPerView) {
                    pfCurrent = Math.max(0, pfCards.length - pfCardsPerView);
                }
                updatePfSlider();
                updatePfDots();
            });
            // Touch/drag support
            let pfStartX = 0,
                pfIsDragging = false;
            pfSlider.addEventListener('touchstart', function(e) {
                pfStartX = e.touches[0].clientX;
                pfIsDragging = true;
            });
            pfSlider.addEventListener('touchmove', function(e) {
                if (!pfIsDragging) return;
                let dx = e.touches[0].clientX - pfStartX;
                if (Math.abs(dx) > 50) {
                    if (dx < 0) pfGoToNext();
                    else pfGoToPrev();
                    pfIsDragging = false;
                }
            });
            pfSlider.addEventListener('touchend', function() {
                pfIsDragging = false;
            });
            // Initial setup
            updatePfCardsPerView();
            updatePfSlider();
            updatePfDots();
            pfStartAutoSlide();
        });
    </script>

    <script>
        // Bootstrap Dropdown initialization (if available)
        if (window.bootstrap && window.bootstrap.Dropdown) {
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
        }
        // Manual fallback for offcanvas dropdowns
        document.querySelectorAll('.offcanvas .dropdown-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                // Only for offcanvas
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    var parent = this.closest('.dropdown');
                    parent.classList.toggle('show');
                    var menu = parent.querySelector('.dropdown-menu');
                    if (menu) {
                        menu.classList.toggle('show');
                    }
                }
            });
        });
    </script>

    <!-- Slider Animation  -->
    <script>
        var swiper = new Swiper('.about-swiper', {
            direction: 'vertical',
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            speed: 1000,
        });
    </script>
</body>

</html>
