<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Page</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-joypur-homes.css">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/extra-page.css">
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
    {{-- <div class="about-slider-container content-margin-top">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide"><img
                            src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                            alt="Slide 1"></div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Slider End -->

    <!-- Awards and Achievements Section Start -->
    <section class="awards-section py-5 download-section">
        <div class="container">
            <h2 class="awards-title text-center mb-2">Download</h2>
            <p class="text-center">Download our E-Catalogues, Find our latest Brand updates</p>
            <div class="awards-title-flourish text-center mb-2">
                <svg width="80" height="24" viewBox="0 0 80 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 12C10 2 30 22 40 12C50 2 70 22 78 12" stroke="url(#grad1)" stroke-width="3"
                        stroke-linecap="round" />
                    <defs>
                        <linearGradient id="grad1" x1="0" y1="12" x2="80" y2="12"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#2293ce" />
                            <stop offset="1" stop-color="#fecc30" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="row g-4 mt-3">

                @foreach ($downloads as $download)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <a class="doc-card" href="{{ Storage::url($download->file) }}" target="_blank" rel="noopener"
                        download>
                        <div class="doc-card-top">
                            <span class="file-icon">
                                <i class="fa-regular fa-file-lines"></i>
                            </span>
                        </div>
                        <div class="doc-card-footer">
                            <i class="fa-solid fa-download"></i>
                            {{ $download->title }}
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Awards and Achievements Section End -->




    <!-- Footer Section Start -->
    <x-layouts.footer />
    <!-- Footer Section End -->

    <!-- jQuery -->
    <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
    <!-- Lightbox JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

    <!-- About Slider Script -->
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
</body>

</html>
