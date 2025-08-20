<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Group</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">
</head>

<body>
    <style>
        .rg-navbar-menu li a {
            font-size: 1.2em !important;
            font-weight: 500 !important;
            position: relative;
        }

        .rg-navbar-menu li a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2.2px;
            background: #fff;
            transition: width 0.5s ease;
        }

        .rg-navbar-menu li a:hover {
            color: #fff !important;
        }

        .rg-navbar-menu li a:hover::after {
            width: 100%;
        }

        .rg-navbar-has-dropdown .rg-dropdown-menu a {
            font-size: 14px !important;
            font-weight: 500 !important;
        }
    </style>

    <!-- Loader -->
    <div id="loader"
        style="background:url({{ asset('assets/frontassets/') }}/images/loding-page.jpg) no-repeat center center; background-size: cover; loading:lazy;">
        <div class="animated-text font-weight-bold text-uppercase">
            <!-- <img src="assets/images/loding-page.jpg" alt="Samaira Group Logo" class="img-fluid"> -->
        </div>
    </div>

    <section class="rg-hero-slider">
        <div class="swiper rg-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1: Power (col-wise) -->
                @foreach ($banners as $banner)
                    <div class="swiper-slide rg-slide"
                        data-bg="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                        data-slice="row">
                        <div class="rg-slices rg-slices-rows">
                            <div class="rg-slice" data-index="0"></div>
                            <div class="rg-slice" data-index="1"></div>
                            <div class="rg-slice" data-index="2" style="margin-top:-1px;"></div>
                        </div>
                        <div class="rg-hero-content">
                            <h2 class="fw-bold">{{ $banner->title }}</h2>
                            <p>{{ $banner->description }}</p>
                            <a href="{{ $banner->link }}" class="rg-explore">EXPLORE MORE <span>&rarr;</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Responsive Transparent Navbar with Mega Menu -->
    <nav class="rg-navbar">
        <div class="rg-navbar-container">
            <a href="#" class="rg-navbar-logo"><img
                    src="{{ system_key('samaira_group_logo') ? Storage::url(system_key('samaira_group_logo')) : asset('assets/img/no-profile.png') }}" /></a>
            <button class="rg-navbar-toggle" aria-label="Toggle menu">
                <span class="rg-navbar-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="rg-navbar-close"><i class="fa fa-times"></i></span>
            </button>
            <ul class="rg-navbar-menu">
                <li><a href="{{ route('page.home') }}">Home</a></li>

                <li class="rg-navbar-has-mega" id="brands-trigger">
                    <a href="#">Our Concern <span class="rg-navbar-chevron"><i
                                class="fa fa-chevron-down"></i></span></a>
                    <!-- Mobile Mega Menu (inside <li>) -->
                    <div class="rg-mega-menu mobile-mega-menu" id="brands-mega-menu-mobile">
                        <div class="rg-mega-menu-content">
                            @foreach ($concerns as $concern)
                                <a href="{{ $concern->concern_link }}">
                                    <img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                        alt="concern">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </li>



                <li class="rg-navbar-has-dropdown">
                    <a href="#">About <span class="rg-navbar-chevron"><i
                                class="fa fa-chevron-down"></i></span></a>
                    <div class="rg-dropdown-menu">
                        <a href="{{ route('page.home.about') }}">About Us</a>
                        <a href="{{ route('page.awards') }}">Awards and Achievements</a>
                        <a href="{{ route('page.chairman') }}">About Manageing Director</a>
                        <a href="{{ route('page.news') }}">News & Events</a>
                        <a href="{{ route('page.download') }}">Download</a>
                        <a href="{{ route('page.gallery') }}">Gallery</a>
                    </div>
                </li>
                <li><a href="{{ route('page.home.contact') }}">Contact Us</a></li>
            </ul>
            <!-- Desktop Mega Menu (outside <li>) -->
            <div class="rg-mega-menu desktop-mega-menu" id="brands-mega-menu-desktop">
                <div class="rg-mega-menu-content">
                    @foreach ($concerns as $concern)
                        <a href="{{ $concern->concern_link }}">
                            <img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                alt="concern">
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </nav>

    {{-- Countdown Timer Section Start --}}
    <section class="stats-counter py-5">
        <div class="container-fluid">
            <div class="row text-center justify-content-center gy-5">

                <!-- Counter Item 1 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <i class="fa-solid fa-calendar-days icon"></i>
                        <h3 class="counter-number" data-target="{{ $count->legacy ?? 0 }}">0</h3>
                        <p class="counter-label">Years of Legacy</p>
                    </div>
                </div>

                <!-- Counter Item 2 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <i class="fa-solid fa-globe icon"></i>
                        <h3 class="counter-number" data-target="{{ $count->countries ?? 0 }}">0</h3>
                        <p class="counter-label">Countries</p>
                    </div>
                </div>

                <!-- Counter Item 3 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <i class="fa-solid fa-people-roof icon"></i>
                        <h3 class="counter-number" data-target="{{ $count->units ?? 0 }}">0</h3>
                        <p class="counter-label">Business Units</p>
                    </div>
                </div>

                <!-- Counter Item 4 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <i class="fa-solid fa-snowflake icon"></i>
                        <h3 class="counter-number" data-target="{{ $count->brands ?? 0 }}">0</h3>
                        <p class="counter-label">Brands</p>
                    </div>
                </div>

                <!-- Counter Item 5 -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="counter-item">
                        <i class="fa-solid fa-user-plus icon"></i>
                        <h3 class="counter-number" data-target="{{ $count->employees ?? 0 }}">0</h3>
                        <p class="counter-label">Employees</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- Countdown Timer Section End --}}

    <!-- Brands Section -->
    <section class="rg-brands-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center g-4">
                <h2 class="text-center mb-2">Our Sister Concerns</h2>
                @foreach ($concerns as $concern)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
                        <div class="rg-brand-card h-100 d-flex flex-column">
                            <div class="rg-brand-logo mx-auto">
                                <img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                    alt="TEER">
                            </div>
                            <div class="rg-brand-content d-flex flex-column flex-grow-1">
                                <p>{{ \Illuminate\Support\Str::limit($concern->concern_text, 200, '...') }}</p>
                                <a href="{{ $concern->concern_link }}" class="rg-brand-btn mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Awards Section Start -->
    <section class="awards-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Column: Text Content -->
                <div class="col-lg-5 col-md-12">
                    <div class="awards-text-content">
                        <h2 class="section-title">News & Events</h2>
                        <!-- This Title and Description will be updated by JavaScript -->
                        <h3 id="award-title"></h3>
                        <p id="award-description"></p>
                        <a href="{{ route('page.news') }}" class="view-all-link">View All</a>
                    </div>
                </div>

                <!-- Right Column: Slider -->
                <div class="col-lg-7 col-md-12">
                    <div class="awards-slider-wrapper">
                        <!-- Swiper container -->
                        <div class="swiper awards-slider">
                            <div class="swiper-wrapper" id="awards-swiper-wrapper">
                                <!-- Slides will be dynamically injected here by JavaScript -->
                            </div>
                        </div>
                        <!-- Slider Navigation Arrows -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Awards Section End -->

    <section class="parallax-section"
        style="background: url({{ system_key('samaira_group_news_backgroup') ? Storage::url(system_key('samaira_group_news_backgroup')) : asset('assets/img/no-profile.png') }})">
        <div class="container-fluid">
            <h1 class="animated-title">Making Business Possible</h1>
            <div class="subscribe-wrapper">
                <div class="paper-plane-icon">
                    <i class="fas fa-paper-plane"></i>
                </div>

                <div class="bg-left-circles"></div>
                <div class="bg-right-circles"></div>
                <div class="bg-dots"></div>

                <h2 class="subscribe-title">
                    Subscribe to get information
                </h2>

                <form action="{{ route('system.store.newsletter') }}" method="POST"
                    class="d-flex input-group-custom align-items-center justify-content-center position-relative gap-3 flex-wrap">
                    @csrf
                    <div class="position-relative flex-grow-1 me-2">

                        <i class="fas fa-envelope input-icon"></i>
                        <input type="hidden" name="key" value="group">
                        <input type="email" class="form-control ps-5" placeholder="Your email" name="email"
                            required>
                    </div>
                    <button type="submit" class="subscribe-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Subscribe Section Start-->
    {{-- <section class="subscribe-wrapper container">
        <div class="paper-plane-icon">
            <i class="fas fa-paper-plane"></i>
        </div>

        <div class="bg-left-circles"></div>
        <div class="bg-right-circles"></div>
        <div class="bg-dots"></div>

        <h2 class="subscribe-title">
            Subscribe to get information
        </h2>

        <form action="{{ route('system.store.newsletter') }}" method="POST"
            class="d-flex input-group-custom align-items-center justify-content-center position-relative gap-3 flex-wrap">
            @csrf
            <div class="position-relative flex-grow-1 me-2">

                <i class="fas fa-envelope input-icon"></i>
                <input type="hidden" name="key" value="group">
                <input type="email" class="form-control ps-5" placeholder="Your email" name="email" required>
            </div>
            <button type="submit" class="subscribe-btn">Subscribe</button>
        </form>
    </section> --}}
    <!-- Subscribe Section End-->

    <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

    <!-- Whatsapp icon -->
    <a id="whatsappFab" class="whatsapp-fab text-decoration-none" href="#" target="_blank" rel="noopener"
        aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

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
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.classList.add('loaded');
                document.getElementById('content').style.display = 'block';
            }, 500);
        });
        // document.addEventListener('DOMContentLoaded', () => {
        // setTimeout(() => {
        // document.body.classList.add('loaded');
        // const content = document.getElementById('content');
        // if (content) content.style.display = 'block';
        // }, 500);
        // });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fab = document.getElementById('whatsappFab');

            // 1) Configure your number (international format, no +, spaces or dashes)
            const PHONE_NUMBER = '01313770461';

            // 2) Optional pre-filled message (includes page title and URL)
            const message = `Hello! I need help regarding: ${document.title} — ${location.href}`;
            const url = `https://wa.me/${PHONE_NUMBER}?text=${encodeURIComponent(message)}`;
            fab.href = url;

            // 3) Show the FAB after scrolling a bit
            const threshold = 150; // px
            const toggleFab = () => {
                if (window.scrollY > threshold) {
                    fab.classList.add('show');
                } else {
                    fab.classList.remove('show');
                }
            };
            toggleFab(); // initial
            window.addEventListener('scroll', toggleFab, {
                passive: true
            });
        });
    </script>
    <script>
        /*--------------------------------------------------------------
                    # Custom JS for the Count-Up Animation
                    --------------------------------------------------------------*/
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.counter-number');
            const animationDuration = 2000; // Animation duration in milliseconds
            const frameDuration = 1000 / 60; // 60 frames per second

            // Function to animate a single counter
            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const totalFrames = Math.round(animationDuration / frameDuration);
                const increment = target / totalFrames;
                let current = 0;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        clearInterval(timer);
                        counter.innerText = target.toLocaleString() + '+';
                    } else {
                        counter.innerText = Math.ceil(current).toLocaleString();
                    }
                }, frameDuration);
            };

            // Use Intersection Observer to trigger the animation when the element is visible
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target); // Animate only once
                    }
                });
            }, {
                threshold: 0.1 // Trigger when 10% of the element is visible
            });

            // Observe each counter
            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
    <script>
        // --- Awards SLider ---
        document.addEventListener("DOMContentLoaded", () => {
            const awardsData = [
                @foreach ($homenews as $news)
                    {
                        imgSrc: '{{ Storage::url($news->image) }}',
                        title: '{{ $news->title }}',
                        // description: '{{ $news->description }}'
                    }
                    @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            ];

            // 2. Function to dynamically create slider items from the data
            const swiperWrapper = document.getElementById('awards-swiper-wrapper');
            awardsData.forEach(award => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide');
                slide.innerHTML = `<img src="${award.imgSrc}" alt="${award.title}">`;
                swiperWrapper.appendChild(slide);
            });


            // 3. Select the HTML elements we need to update
            const awardTitleElement = document.getElementById('award-title');
            const awardDescriptionElement = document.getElementById('award-description');

            // 4. Function to update the text content based on the active slide
            function updateAwardInfo(activeIndex) {
                const currentAward = awardsData[activeIndex];

                // Add a fade-out effect for a smooth transition
                awardTitleElement.style.opacity = 0;
                awardDescriptionElement.style.opacity = 0;

                setTimeout(() => {
                    awardTitleElement.textContent = currentAward.title;
                    awardDescriptionElement.textContent = currentAward.description;
                    // Fade the text back in
                    awardTitleElement.style.opacity = 1;
                    awardDescriptionElement.style.opacity = 1;
                }, 300); // This delay should match the CSS transition duration
            }

            // 5. Initialize Swiper.js
            const swiper = new Swiper('.awards-slider', {
                // How many slides to show
                slidesPerView: 1, // Default for mobile
                spaceBetween: 20,

                // Make the slider continuous
                loop: true,

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // Responsive settings
                breakpoints: {
                    // When window width is >= 768px (tablets)
                    768: {
                        slidesPerView: 2, // Show 2 slides
                        spaceBetween: 30
                    }
                },

                // Events - This is the core of the functionality
                on: {
                    // When the slider is first created
                    init: function() {
                        // 'this.realIndex' gives the correct index even in a loop
                        updateAwardInfo(this.realIndex);
                    },
                    // When the slide changes
                    slideChange: function() {
                        updateAwardInfo(this.realIndex);
                    },
                },
            });
        });
    </script>
</body>

</html>
