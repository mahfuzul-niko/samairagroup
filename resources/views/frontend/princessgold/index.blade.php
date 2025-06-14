<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princess Gold & Diamond Cottage LTD</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-princess-gold/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-princess-gold.css" rel="stylesheet">
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
                                <div>
                                    {{-- <a href="#" class="sjb-hire-btn d-inline-block text-decoration-none">Learn
                                        More</a> --}}
                                    <a href="{{ $banner->url }}"
                                        class="sjb-hire-btn2 d-inline-block text-decoration-none">Sell
                                        Your
                                        Gold</a>
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

    <!-- Services Section Start -->
    <section class="pg-services-section">
        <div class="container">
            <h2 class="pg-services-title">Our Services</h2>
            <div class="pg-services-row">
                @foreach ($services as $service)
                    <div class="pg-service-card">
                        <div class="pg-service-icon">{!! $service->icon !!}</div>
                        <div class="pg-service-card-title">{{ $service->title }}</div>
                        <div class="pg-service-card-text">{{ $service->discretion }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Why Us Section Start -->
    <section class="whyus-section">
        <div class="container">
            <h2 class="whyus-title">Why Us</h2>
            <div class="whyus-row">
                @foreach ($why_we as $us)
                    <div class="whyus-card">
                        <div class="whyus-icon">{!! $us->icon !!}</div>
                        <div class="whyus-card-title">{{ $us->title }}</div>
                        <div class="whyus-card-text">{{ $us->discretion }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Why Us Section End -->

    <!-- Testimonial Slider Section Start -->
    <section class="testimonial-section-bg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="testimonial-title">What Our Clients Say About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-swiper swiper">
                <div class="swiper-wrapper">
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card-top">
                                    <div class="testimonial-avatar"><img
                                            src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                            alt="Testimonial 1"></div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-name">{{ $review->name }}</div>
                                        <div class="testimonial-date">{{ $review->created_at->format('d F Y') }}</div>
                                    </div>
                                </div>
                                <div class="testimonial-text">{{ $review->review }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Testimonial Slider Section End -->

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
                delay: 4000,
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
