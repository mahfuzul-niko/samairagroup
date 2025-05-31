<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single News - Samaira Group</title>
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



    <!-- Single News Section Start -->
    <section class="single-news-section pb-5 content-margin-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-news-main">
                        <div class="single-news-img-wrapper mb-4">
                            <img src="{{ $news->image ? Storage::url($news->image) : asset('assets/img/no-profile.png') }}"
                                alt="Grand Opening" class="single-news-img">
                        </div>
                        <div class="single-news-title-bar d-flex align-items-center mb-3">
                            <div>
                                <h1 class="single-news-title mb-1">{{ $news->title }}</h1>
                                <div class="single-news-meta">
                                    <span class="author-name"><i class="fa fa-user"></i> By
                                        <strong>{{ $news->name }}</strong></span>
                                    <span class="news-date ms-3"><i
                                            class="fa fa-calendar-alt"></i>{{  $news->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-news-content">
                            {!! $news->description !!}
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Single News Section End -->

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
            effect: 'coverflow',
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
