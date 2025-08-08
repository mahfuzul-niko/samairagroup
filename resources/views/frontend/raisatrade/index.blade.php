<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raisa Trade International</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/raisa-trade/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/raisa-trade-international.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

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
    <div class="contact-slider-container">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="hero-content">
                            <h1 class="hero-title">
                                {{ $banner->title }}
                            </h1>
                            <p class="hero-text">{{ $banner->subtitle }}</p>
                            <a href="{{ $banner->url }}" class="join-btn">Join Us Today</a>
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

    <!-- Building Company Section Start -->
    <section class="building-company-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="building-title">Building Company</h2>
                <p class="building-subtitle">From renovations and room additions to masonry and other handyman services
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="bc-card">
                            <img src="{{ $service->image ? Storage::url($service->image) : asset('assets/img/no-profile.png') }}"
                                alt="Design-Build" class="bc-card-img">
                            <h5 class="bc-card-title">{{ $service->title }}</h5>
                            <p class="bc-card-text">{{ $service->discretion }}</p>
                            <!-- <a href="#" class="bc-card-link">MORE</a> -->
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Building Company Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-3 margin-bottom-100">
                <h2 class="section-title">Nothing less than excellent</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">{{ $review->review }}</p>
                                <div class="testimonial-author">
                                    <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Orlando Diggs" class="author-image">
                                    <div class="author-info">
                                        <h4>{{ $review->review }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
    <!-- Testimonials Section End -->

    <!-- Our Partners Logo start  -->
    <section class="sister-concern py-5">
        <div class="container text-center">
            <h3 class="mb-4">Our Partners Logo</h3>
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

                    <!-- Duplicate set of logos for seamless loop -->

                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners Logo End  -->

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

        // Initialize testimonial swiper
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.testimonial-next',
                prevEl: '.testimonial-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>
