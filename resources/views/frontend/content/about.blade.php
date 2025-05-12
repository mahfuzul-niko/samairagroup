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
</head>

<body>
    <!-- Navbar Start -->
    <nav class="rg-navbar">
        <div class="rg-navbar-container">
            <a href="{{ route('page.home') }}" class="rg-navbar-logo"><img
                    src="{{ asset('assets/frontassets/') }}/images/logo.png" /></a>
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

                <li class="rg-navbar-has-mega">
                    <a href="#">Our Concern<span class="rg-navbar-chevron"><i
                                class="fa fa-chevron-down"></i></span></a>
                    <div class="rg-mega-menu">
                        <div class="row row-cols-6 ">
                            @foreach ($concerns as $concern)
                                <a href="{{ $concern->concern_link }}"><img
                                        src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                        alt="Teer" style="height: 50px; width: auto;"></a>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li><a href="">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Slider Start -->
    <div class="about-slider-container">
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
            <h1>About {{$about->name}}</h1>
            <h2>{{$about->title}}</h2>
          <p>{{$about->description}}</p>
        </section>
            
        @endif
        <!-- About Section Overlap -->
    </div>
    <!-- Slider End -->

    <!-- Logo and Description Column Start-->
    <div class="logo-description py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 text-center text-lg-start mb-4 mb-lg-0">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/frontassets/') }}/images/loader-logo.png" alt="Samaira Group Logo"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center text-lg-start mb-3 mb-lg-0">
                    <h5 class="follow-title mb-0">Follow Us</h5>
                </div>
                <div class="col-lg-4 col-md-12 text-center text-lg-start">
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo and Description Column End-->

    <!-- Footer Section Start -->
    <footer class="footer-section mt-5 pt-5">
        <div class="container">
            <div class="row">

                <!-- Discover Column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="mb-4">Discover</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Miami</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">New York</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Chicago</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Florida</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Los Angeles</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">San Diego</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="mb-4">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">About</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Contact</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">FAQ's</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Pricing
                                Plans</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Privacy
                                Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Terms &
                                Conditions</a></li>
                    </ul>
                </div>

                <!-- Contact Us Column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h4 class="mb-4">Contact Us</h4>
                    <p class="text-muted mb-2">hi@justhome.com</p>
                    <p class="text-muted mb-4">(123) 456-7890</p>
                    <h4 class="mb-3">Our Address</h4>
                    <p class="text-muted">99 Fifth Avenue, 3rd Floor<br>San Francisco, CA 1980</p>
                </div>

                <!-- Get the app Column -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4">Get the app</h4>
                    <div class="app-buttons">
                        <a href="#" class="store-link mb-3">
                            <img src="{{ asset('assets/frontassets/') }}/images/footer/link.png"
                                alt="Download on Apple Store" class="img-fluid w-100">
                        </a>
                        <a href="#" class="store-link">
                            <img src="{{ asset('assets/frontassets/') }}/images/footer/link1.png"
                                alt="Get it on Google Play" class="img-fluid w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bottom Footer Section Start -->
    <div class="bottom-footer py-3">
        <div class="container">
            <div class="text-left">
                <p class="mb-0">Copyright © 2025. Samaira Group</p>
            </div>
        </div>
    </div>
    <!-- Bottom Footer Section End -->

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
</body>

</html>
