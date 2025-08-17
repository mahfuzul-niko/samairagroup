<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.P.S Filling Station</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/sps-filling-station/sps.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-princess-gold.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/sps-filling-station.css" rel="stylesheet">
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
                                <div>
                                    <a href="{{ $banner->url }}"
                                        class="btn btn-outline-primary d-inline-block text-decoration-none">Button</a>
                                </div>
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

     <!-- Our Services -->
    <section class="soft-bg section-pad">
        <div class="container position-relative" style="z-index:1;">
        <div class="text-center mb-4">
            <h2 class="section-heading">Our Services</h2>
            <div class="underline-grad"></div>
            <p class="section-sub mt-3">Everything you need at one stop — fast, safe, and reliable.</p>
        </div>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-solid fa-gas-pump"></i></div>
                <h5 class="service-title">Fuel Pumping 24/7</h5>
                <p class="service-desc">High‑quality petrol and diesel with accurate metering, any time of the day.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-solid fa-oil-can"></i></div>
                <h5 class="service-title">Oil & Lubricants</h5>
                <p class="service-desc">Engine oils, coolants, and premium lubricants from trusted brands.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                <h5 class="service-title">Car Wash & Detailing</h5>
                <p class="service-desc">Quick wash to full detailing — spotless finish with eco‑friendly care.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-regular fa-circle-up"></i></div>
                <h5 class="service-title">Tyre Air & Nitrogen</h5>
                <p class="service-desc">Free air checks and optional nitrogen fill for longer tyre life.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-solid fa-store"></i></div>
                <h5 class="service-title">Convenience Store</h5>
                <p class="service-desc">Snacks, beverages, car accessories, and travel essentials on the go.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
            <a class="service-card" href="#">
                <div class="icon-ring"><i class="fa-solid fa-car-battery"></i></div>
                <h5 class="service-title">Battery Check & Jumpstart</h5>
                <p class="service-desc">On‑site diagnostics and emergency jumpstart assistance.</p>
                <span class="service-cta">Learn more <i class="fa-solid fa-arrow-right"></i></span>
            </a>
            </div>
        </div>
        </div>
    </section>

    <!-- Why Choose S.P.S -->
    <section class="section-pad">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-heading">Why Choose S.P.S</h2>
            <div class="underline-grad"></div>
            <p class="section-sub mt-3">We focus on quality, speed, and a hassle‑free experience.</p>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h5 class="why-title">Assured Quality Fuel</h5>
                <p class="why-desc mb-0">Sourced from certified depots with strict QA checks and BIS standards.</p>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                <h5 class="why-title">Accurate Metering</h5>
                <p class="why-desc mb-0">Calibrated pumps and routine audits ensure you get exactly what you pay for.</p>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-solid fa-gauge-high"></i></div>
                <h5 class="why-title">Fast Service</h5>
                <p class="why-desc mb-0">Optimized lanes and trained staff keep the queues moving quickly.</p>
            </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                <h5 class="why-title">Safe & Clean Premises</h5>
                <p class="why-desc mb-0">Regular sanitization and safety protocols for a pleasant stop every time.</p>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-solid fa-gift"></i></div>
                <h5 class="why-title">Loyalty & Rewards</h5>
                <p class="why-desc mb-0">Earn points and redeem for fuel or store discounts with our loyalty program.</p>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="why-tile h-100">
                <div class="why-icon"><i class="fa-regular fa-credit-card"></i></div>
                <h5 class="why-title">Easy Payments</h5>
                <p class="why-desc mb-0">Cashless options including cards, UPI/QR, and contactless wallets.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Testimonial Slider Section Start -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-3 margin-bottom-100">
                <h2 class="section-title">Nothing less than excellent</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="assets/images/samaira-skills/tuser1.png" alt="Orlando Diggs" class="author-image">
                                <div class="author-info">
                                    <h4>Orlando Diggs</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="assets/images/samaira-skills/tuser2.png" alt="Mollie Hall" class="author-image">
                                <div class="author-info">
                                    <h4>Mollie Hall</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="assets/images/samaira-skills/tuser3.png" alt="Lori Bryson" class="author-image">
                                <div class="author-info">
                                    <h4>Lori Bryson</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="assets/images/samaira-skills/tuser1.png" alt="Lori Bryson" class="author-image">
                                <div class="author-info">
                                    <h4>Lori Bryson</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation and Pagination Container -->
                <div class="testimonial-controls">
                    <div class="control-wrapper">
                        <div class="swiper-button-prev testimonial-prev">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="swiper-pagination testimonial-pagination"></div>
                        <div class="swiper-button-next testimonial-next">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Slider Section End -->

    <!-- Custom Footer Section Start -->
    <x-layouts.footer :content="$content" />
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

    <!-- Slider Animation  -->
    <script>
        var swiper = new Swiper('.about-swiper', {
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            speed: 1000,
        });
    </script>

    <!-- Testimonial Slider Animation  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.testimonial-swiper', {
                slidesPerView: 3,
                spaceBetween: 40,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.testimonial-section .swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    700: {
                        slidesPerView: 2
                    },
                    1100: {
                        slidesPerView: 3
                    }
                }
            });
        });
    </script>
</body>

</html>
