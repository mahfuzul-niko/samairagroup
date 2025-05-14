<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
@php
    use Illuminate\Support\Facades\Route;
    $contactRoute = match (true) {
        Route::is('page.home.about') => route('page.home.contact'),
        Route::is('page.ssdi.about') => route('page.ssdi.contact'),
        default => route('page.home.contact'),
    };
    $aboutRoute = match (true) {
        Route::is('page.home.contact') => route('page.home.about'),
        Route::is('page.ssdi.contact') => route('page.ssdi.about'),
        default => route('page.home.about'),
    };
@endphp

<body>

    <!-- Navbar Start -->
    <nav class="rg-navbar">
        <div class="rg-navbar-container">
            <a href="#" class="rg-navbar-logo"><img
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
                    <a href="#">Brands <span class="rg-navbar-chevron"><i
                                class="fa fa-chevron-down"></i></span></a>
                    <div class="rg-mega-menu">
                        <div class="rg-mega-menu-content">
                            @foreach ($concerns as $concern)
                                <a href="#"><img
                                        src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                        alt="Teer"></a>
                            @endforeach
                        </div>
                    </div>
                </li>


                <li><a href="{{ $aboutRoute }}">About Us</a></li>
                <li><a href="{{ $contactRoute }}">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Slider Start -->
    <div class="contact-slider-container">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $item)
                <div class="swiper-slide"><img src="{{$item->image ? Storage::url($item->image) : asset('assets/img/no-profile.png')}}"
                        alt="Slide 1"></div>
                @endforeach
            </div>
        </div>
        <section class="contact-overlap">
            <div class="contact-container">
                <!-- Left: Other ways to connect -->
                <div class="contact-info">
                    <h2>Other ways to connect</h2>
                    <p>We'd love to hear from you. Our friendly team is always here to chat.</p>
                    <div class="contact-method">
                        <i class="fa fa-envelope"></i>
                        <div>
                            <strong>Reach us on email</strong>
                            <div>Our friendly team is here to help.</div>
                            <a href="mailto:{{ $info->reach_mail }}">{{ $info->reach_mail }}</a>
                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-briefcase"></i>
                        <div>
                            <strong>For Careers</strong>
                            <div>Send your resume on</div>
                            <a href="mailto:{{ $info->careers_mail }}">{{ $info->careers_mail }}</a>
                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-phone"></i>
                        <div>
                            <strong>Phone</strong>
                            <div>Mon-Fri from 9.30am to 6.00pm.</div>
                            @foreach (json_decode($info->phone, true) as $phone)
                                <a href="tel:{{ trim($phone) }}">{{ trim($phone) }}</a><br>
                            @endforeach
                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-map-marker-alt"></i>
                        <div>
                            <strong>Office</strong>
                            <div>{{ $info->address_title }}</div>
                            <a href="#">{{ $info->address }}</a>
                        </div>
                    </div>
                </div>
                <!-- Right: Contact Form -->
                <form class="contact-form">
                    <h2>Love to hear from you,<br>Get in touch <span class="wave">👋</span></h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" placeholder="Edward Snowden" required>
                        </div>
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="email" placeholder="itanexmple@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone No.</label>
                            <div class="phone-input">
                                <input type="tel" placeholder="Enter your phone no.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What you are interested</label>
                            <select>
                                <option selected disabled>Select Subject</option>
                                @foreach ($info->subjects as $subject)
                                <option>{{$subject->subject}}</option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="3" placeholder="Let tell us know your project about"></textarea>
                    </div>
                    <button type="submit" class="send-btn">Send message <i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
        </section>
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
</body>

</html>
