<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
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
    <x-layouts.header />
    <!-- Top Header Section End -->




    <!-- Navbar Start -->
    <x-layouts.navbar>

        <x-slot name="nav">

        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

   {{-- <div class="about-slider-container content-margin-top" style="background: url('{{ asset('assets/frontassets/') }}/images/samaira-princess-gold/slider1.jpeg') no-repeat center center; background-size: cover;">
        <img src="{{ isset($privacy['background_image']) ? Storage::url($privacy['background_image']) : asset('assets/img/no-profile.png') }}"
            alt="" class="img-fluid">

        <section class="about-overlap">
            <h1>Privacy</h1>
            <h2>{{ $privacy['title'] ?? '' }}</h2>
            <p>{{ $privacy['discription'] ?? '' }}</p>
        </section>
    </div>  --}}
    <div class="about-slider-container content-margin-top">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                {{-- @foreach ($banners as $banner)
                    <div class="swiper-slide"><img
                            src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                            alt="Slide 1"></div>
                @endforeach --}}
            </div>
        </div>
        <section class="about-overlap">
            <h1>Privacy</h1>
            <h2>{{ $privacy['title'] ?? '' }}</h2>
            <p>{{ $privacy['discription'] ?? '' }}</p>
        </section>
        <!-- About Section Overlap -->
    </div>
    <!-- Slider End -->
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
                delay: 4000,
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
