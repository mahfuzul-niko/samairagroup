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
    <div class="contact-slider-container content-margin-top">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $item)
                    <div class="swiper-slide"><img
                            src="{{ $item->image ? Storage::url($item->image) : asset('assets/img/no-profile.png') }}"
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
                            <a href="mailto:{{ $info->reach_mail ?? '' }}">{{ $info->reach_mail ?? '' }}</a>
                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-briefcase"></i>
                        <div>
                            <strong>For Careers</strong>
                            <div>Send your resume on</div>
                            <a href="mailto:{{ $info->careers_mail ?? '' }}">{{ $info->careers_mail ?? '' }}</a>
                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-phone"></i>
                        <div>
                            <strong>Phone</strong>
                            <div>Mon-Fri from 9.30am to 6.00pm.</div>
                            @if (!is_null($info) && !is_null($info->phone))
                                @foreach (json_decode($info->phone, true) as $phone)
                                    <a href="tel:{{ trim($phone) }}">{{ trim($phone) }}</a><br>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="contact-method">
                        <i class="fa fa-map-marker-alt"></i>
                        <div>
                            <strong>Office</strong>
                            @if ($info)
                                <div>{{ $info->address_title }}</div>
                                <a href="#">{{ $info->address }}</a>
                            @endif

                        </div>
                    </div>
                </div>
                @if ($info)
                    <!-- Right: Contact Form -->
                    <form class="contact-form" action="{{ route('content.store.contact') }}" method="POST">
                        @csrf
                        <h2>Love to hear from you,<br>Get in touch <span class="wave">👋</span></h2>
                        <input type="hidden" name="key" value="{{ $info->key }}">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" placeholder="Your Name" required name="name">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" placeholder="Your Email" required name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Phone No.</label>
                                <div class="phone-input">
                                    <input type="tel" placeholder="Enter your phone no." name="phone">
                                </div>
                            </div>
                            @if (!empty($info->subjects))
                                <div class="form-group">
                                    <label>What you are interested in</label>
                                    <select class="form-control" name="subject" required>
                                        <option disabled>Select Subject</option>
                                        @foreach ($info->subjects as $subject)
                                            <option value="{{ $subject->subject }}">{{ $subject->subject }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea rows="3" placeholder="Let tell us know your project about" name="message"></textarea>
                        </div>
                        <button type="submit" class="send-btn">Send message <i class="fa fa-arrow-right"></i></button>
                    </form>
                @else
                    <h2>You Can't Contact This Page Currently</h2>
                @endif
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
