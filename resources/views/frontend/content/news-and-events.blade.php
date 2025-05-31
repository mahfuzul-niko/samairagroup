<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Events</title>
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
    </div>
    <!-- Slider End -->

    <!-- News and Events Section Start -->
    <section class="news-events-section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="news-events-title mb-3">News and <span>Events</span></h2>
                    <div class="news-events-title-flourish mb-2">
                        <svg width="80" height="24" viewBox="0 0 80 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="10" width="80" height="4" rx="2" fill="#2293ce" />
                            <rect x="35" y="6" width="10" height="12" rx="5" fill="#fecc30" />
                        </svg>
                    </div>
                    <p class="lead text-muted">Stay updated with the latest news and events from Samaira Group.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($newses as $news)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card h-100">
                            <div class="blog-card-img-wrapper">
                                <img src="{{ $news->image ? Storage::url($news->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Blog 1" class="blog-card-img">
                            </div>
                            <div class="blog-card-body">
                                <a href="{{route('page.single.news',$news)}}" class="blog-card-title">{{ $news->title }}</a>
                                <p class="blog-card-text">
                                    {!! \Illuminate\Support\Str::words(strip_tags($news->description), 20, '...') !!}
                                </p>
                                <a href="{{route('page.single.news',$news)}}" class="blog-card-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $newses->links() }}
            </div>
        </div>
    </section>
    <!-- News and Events Section End -->

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
