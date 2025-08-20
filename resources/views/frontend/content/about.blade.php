<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/about.css">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">

</head>
@php

@endphp

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
    <div class="about-slider-container content-margin-top">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide"><img
                            src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                            alt="Slide 1"></div>
                @endforeach
            </div>
        </div>
        @if (!is_null($about))
            <section class="about-overlap">
                <h1>{{ $about->name }}</h1>
                <h2>{{ $about->title }}</h2>
                <p>{{ $about->description }}</p>
            </section>
        @endif
        <!-- About Section Overlap -->
    </div>
    <!-- Slider End -->

    {{-- Mission Vission Start --}}
    <section class="section-pad about-info-section">
        <div class="container p-4 p-md-5">
            <div class="row g-4 position-relative" style="z-index:1;">
                <!-- Mission -->
                <div class="col-12 col-md-6 mission-col">
                    <div class="info-card" style="--accent:#1e88e5; background: #ebebec;">
                        <span class="top-strip"></span>
                        <div class="fill"></div>

                        <div class="content">
                            <div class="icon-badge"><i class="fa-solid fa-bullseye"></i></div>
                            <h4 class="info-title">Our Mission</h4>
                            <p class="info-text">
                                {{ $mission->mission_description ?? system_key('system_about_us_mission') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-12 col-md-6 vission-col">
                    <div class="info-card" style="--accent:#F7B729;">
                        <span class="top-strip"></span>
                        <div class="fill"></div>

                        <div class="content">
                            <div class="icon-badge"><i class="fa-regular fa-lightbulb"></i></div>
                            <h4 class="info-title">Our Vision</h4>
                            <p class="info-text">
                               {{ $mission->vision_description ?? system_key('system_about_us_vision') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Mission Vission End --}}
    <x-layouts.footer />

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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.about-overlap');
            const hero = document.querySelector('.about-slider-container');
            const applySpace = () => {
                if (!card || !hero) return;
                const overlap = 60; // jehetu top/bottom diya overlap korchen (px)
                const extra = Math.max(0, card.offsetHeight - overlap);
                hero.style.marginBottom = (extra + 24) + 'px';
            };
            applySpace();
            window.addEventListener('resize', applySpace);
        });
    </script>
</body>

</html>
