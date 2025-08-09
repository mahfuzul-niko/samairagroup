<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joypur Homes Limited</title>
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
</head>

<body>
    <!-- Top Header Section Start -->
    <x-layouts.header :content="$content" />
    <!-- Top Header Section End -->



    <!-- Navbar Start -->
    <x-layouts.navbar>

        <x-slot name="nav">
            <a type="button" data-bs-toggle="modal" data-bs-target="#agentrequestmodal"
                class="become-real-estate-agent btn agent-btn">Become An Agent <span class="ms-1">&#8594;</span></a>
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

    <!-- Find Properties in These Cities Section Start -->
    <section class="joypur-cities-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <div>
                    <h2 class="joypur-cities-title mb-1">Find Properties in These Category</h2>
                </div>

            </div>
            <div class="row justify-content-center g-3 mt-4">
                @foreach ($categories as $category)
                    <div class="col-md-4 col-lg-3">
                        <a href="{{ route('page.jphomes.properties', $category) }}" class="text-decoration-none">
                            <div class="joypur-city-card">
                                <img src="{{ $category->image ? Storage::url($category->image) : asset('assets/img/no-profile.png') }}"
                                    alt="New York" class="joypur-city-img">
                                <div>
                                    <div class="joypur-city-name">{{ $category->title }}</div>
                                    <div class="joypur-city-count">{{ $category->properties->count() }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Find Properties in These Cities Section End -->

    <!-- Featured Properties Section Start -->
    <section class="joypur-featured-properties-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <div>
                    <h2 class="joypur-featured-title mb-1">Our Properties</h2>
                </div>
            </div>
            <div class="row joypur-featured-cards g-4 mt-2">
                @foreach ($properties as $property)
                    <!-- Property Card 1 -->
                    <div class="col-lg-4 joypur-featured-card" data-status="sale">
                        <div class="property-card">
                            <div class="property-img-wrapper">
                                <img src="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}"
                                    alt="{{ $property->title }}" class="property-img">
                                <div class="property-badges">
                                    <span
                                        class="badge badge-sale">{{ $property->category ? $property->category->title : '' }}
                                    </span>
                                </div>
                            </div>
                            <div class="property-body">
                                <div class="property-title-price-row">
                                    <a href="{{ route('page.jphomes.SingleProperty', $property) }}"
                                        class="text-decoration-none">
                                        <div class="property-title">{{ $property->title }}</div>
                                    </a>
                                    <div class="property-price text-sale">{{ $property->price }} Taka</div>
                                </div>
                                <div class="property-address"><i class="fa fa-map-marker-alt"></i>
                                    {{ $property->address }}</div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="property-meta">
                                        <span style="white-space: nowrap;"><i class="fa fa-bed"></i>
                                            {{ $property->bed }} Beds</span>
                                        <span style="white-space: nowrap;"><i class="fa fa-bath"></i>
                                            {{ $property->bath }} Baths</span>
                                        <span style="white-space: nowrap;"><i class="fa fa-expand"></i>
                                            {{ $property->area }} sqft</span>
                                    </div>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#buynowbutton"
                                        class="btn btn-sm agent-btn" style="white-space: nowrap;">Order
                                        Now</a>
                                    <div class="modal fade" id="buynowbutton" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Prebook your
                                                        property
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <i class="text-secondary fs-6">Our agent Will contact you soon</i>
                                                    <form action="{{ route('property.store.order') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="property_id"
                                                            value="{{ $property->id }}">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating my-3">
                                                                    <input type="text" class="form-control"
                                                                        id="Name" name="name"
                                                                        placeholder="Enter Your Name" required>
                                                                    <label for="floatingInput">Name<span
                                                                            class="text-danger">*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="Phone" name="phone"
                                                                        placeholder="Enter Your Phone Number" required>
                                                                    <label for="floatingInput">Phone Number<span
                                                                            class="text-danger">*</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control"
                                                                id="floatingInput" name="email"
                                                                placeholder="name@example.com">
                                                            <label for="floatingInput">Email address</label>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                                                    name="comment"></textarea>
                                                                <label for="floatingTextarea2">Comments</label>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <button type="submit" class="btn agent-btn">Prebook
                                                                Property</button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Featured Properties Section End -->

    <!-- How It Works Section Start -->
    <section class="joypur-howitworks-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="howitworks-title mb-2">How It works? Find a perfect home</h2>
            </div>
            <div class="row justify-content-center text-center g-4">
                <div class="col-md-4">
                    <div class="howitworks-step">
                        <div class="howitworks-icon mb-3 mx-auto">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon.png"
                                alt="Find Real Estate" class="howitworks-icon-img">
                        </div>
                        <div class="howitworks-step-title">Find Real Estate</div>
                        <div class="howitworks-step-desc">{{ system_key('system_jp_findrealestate') }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howitworks-step">
                        <div class="howitworks-icon mb-3 mx-auto">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon1.png"
                                alt="Meet Relator" class="howitworks-icon-img">
                        </div>
                        <div class="howitworks-step-title">Meet Relator</div>
                        <div class="howitworks-step-desc">{{ system_key('system_jp_meetrelator') }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howitworks-step">
                        <div class="howitworks-icon mb-3 mx-auto">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon2.png"
                                alt="Take The Keys" class="howitworks-icon-img">
                        </div>
                        <div class="howitworks-step-title">Take The Keys</div>
                        <div class="howitworks-step-desc">{{ system_key('system_jp_takekey') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Why You Should Work With Us Section Start -->
    <section class="joypur-whywork-section py-5 my-5">
        <div class="container whywork-flex mb-5 pb-3">
            <!-- Left Images/Stats -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center position-relative mb-5 mb-lg-0">
                <div class="whywork-img-stack position-relative">
                    <img src="{{ system_key('system_jp_advertise_top_image') ? Storage::url(system_key('system_jp_advertise_top_image')) : asset('assets/img/no-profile.png') }}"
                        alt="Happy Family" class="whywork-img-rect" />
                    <div class="whywork-img-arch-wrap">
                        <img src="{{ system_key('system_jp_advertise_bottom_image') ? Storage::url(system_key('system_jp_advertise_bottom_image')) : asset('assets/img/no-profile.png') }}"
                            alt="Modern House" class="whywork-img-arch" />
                        <div class="whywork-stats-card">
                            <i class="fa fa-home home-icon"></i>
                            <div class="whywork-stats-label">Properties For Sale</div>
                            <div class="whywork-stats-value">{{ $propertiesCount }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Content -->
            <div class="whywork-content">
                <h2>{{ system_key('system_jp_adtitle') }}</h2>
                <p class="whywork-desc">
                    {{ system_key('system_jp_adsubtitle') }}
                </p>
                <div class="">
                    <p>{{ system_key('system_jp_adtext') }}</p>
                </div>
                <a href="{{ system_key('system_jp_adurl') }}" class="whywork-btn">Learn More <span>&#8594;</span></a>
            </div>
        </div>
    </section>
    <!-- Why You Should Work With Us Section End -->

    <!-- Testimonial Sliders Section Start -->
    <section class="joypur-double-testimonial-section py-5">
        <div class="container">
            <div class="row">
                <!-- Customer Testimonial Slider -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="testimonial-slider-wrapper">
                        <h3 class="testimonial-title">Customer says</h3>
                        <div class="swiper testimonial-swiper-customer">
                            <div class="swiper-wrapper">
                                @foreach ($creviews as $review)
                                    <div class="swiper-slide">
                                        <div class="testimonial-row">
                                            <div class="testimonial-info">
                                                <h4>What our clients are saying</h4>
                                                <p class="testimonial-text">{{ $review->review }}</p>
                                                <div class="testimonial-author">{{ $review->name }}</div>
                                                <div class="testimonial-role">Homeowner</div>
                                                <div class="testimonial-nav">
                                                    <button class="testimonial-prev-customer"><i
                                                            class="fa fa-chevron-left"></i></button>
                                                    <button class="testimonial-next-customer"><i
                                                            class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="testimonial-img-wrapper">
                                                <div class="testimonial-img-bg"></div>
                                                <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                                    class="testimonial-img" alt="Customer">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Land Owner Testimonial Slider -->
                <div class="col-lg-6">
                    <div class="testimonial-slider-wrapper">
                        <h3 class="testimonial-title">Land owner says</h3>
                        <div class="swiper testimonial-swiper-owner">
                            <div class="swiper-wrapper">

                                @foreach ($oreviews as $review)
                                    <div class="swiper-slide">
                                        <div class="testimonial-row">
                                            <div class="testimonial-info">
                                                <h4>What our clients are saying</h4>
                                                <p class="testimonial-text">{{ $review->review }}</p>
                                                <div class="testimonial-author">{{ $review->name }}</div>
                                                <div class="testimonial-role">Landowner</div>
                                                <div class="testimonial-nav">
                                                    <button class="testimonial-prev-customer"><i
                                                            class="fa fa-chevron-left"></i></button>
                                                    <button class="testimonial-next-customer"><i
                                                            class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="testimonial-img-wrapper">
                                                <div class="testimonial-img-bg"></div>
                                                <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                                    class="testimonial-img" alt="Customer">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Sliders Section End -->

    <!-- Blog Section Start-->
    <div class="container py-5 blog text-center">
        <div class="blog-title py-3">
            <h2>Our Recent Projects</h2>
        </div>
        <div class="row g-4 mt-3">
            <!-- Card Start -->
            @foreach ($videos as $video)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="video-thumbnail-wrapper video-thumbnail position-relative"
                            data-video-url="{{ $video->video_url }}">

                            <img src="{{ $video->image ? Storage::url($video->image) : asset('assets/img/no-profile.png') }}"
                                alt="Testimonial Video" class="testimonial-video-img rounded-3">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <div class="play-button-overlay">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3">{{ $video->title }}</h5>
                            <a href="{{ $video->url }}" class="read-more mt-auto">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="videoModalLabel">Success Story</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="ratio ratio-16x9">
                                <iframe id="videoFrame" src="" title="Success Story Video" allowfullscreen
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End-->

    <!-- Our Sister Concern Section Start-->
    <section class="sister-concern py-5 mt-5">
        <div class="container text-center">
            <h3 class="mb-4">Our Partners</h3>
            <div class="logos-wrapper">
                <div class="logos-slider">
                    <!-- First set of logos -->
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="{{ $partner->name }}" class="sister-logo">
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="{{ $partner->name }}" class="sister-logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Sister Concern Section End-->

    <!-- Become a Real Estate Agent Section Start -->
    <section class="joypur-featured-categories-section become-real-estate-agent py-5">
        <div class="container">
            <div class="featured-categories-bg p-5 rounded-4">
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-4">
                    <div>
                        <h2 class="text-white mb-2">Become a Real Estate Agent</h2>
                        <div class="text-white-50 mb-0">We only work with the best companies around the globe</div>
                    </div>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#agentrequestmodal"
                        class="featured-categories-link text-white-50 d-inline-flex align-items-center ms-auto">
                        Sign in or create an account <span class="ms-1">&#8594;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Become a Real Estate Agent Section End -->

    <!-- Footer Section Start -->
    <x-layouts.footer />
    <!-- Footer Section End -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="agentrequestmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Work With Us</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('property.store.agent') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="name"
                                        name="name" required>
                                    <label for="name">Your Name<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Your Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone" placeholder="phone"
                                        name="phone" required>
                                    <label for="phone">Your Phone<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="address" placeholder="address"
                                        name="address">
                                    <label for="address">Your Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nidfile" class="form-label">Uoload Your NID</label>
                                    <input class="form-control" type="file" id="nidfile" name="nid">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="resumeFile" class="form-label">Upload Your Resume</label>
                                    <input class="form-control" type="file" id="resumeFile" name="resume">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn agent-btn">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
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

    <!-- About Slider Script -->
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
        // Featured Properties Tab Filtering
        $(document).on('click', '.joypur-featured-tab', function() {
            var filter = $(this).data('filter');
            $('.joypur-featured-tab').removeClass('active');
            $(this).addClass('active');
            if (filter === 'all') {
                $('.joypur-featured-card').show();
            } else {
                $('.joypur-featured-card').each(function() {
                    var status = $(this).data('status');
                    if (status === filter) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

    <!-- Testimonial Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showTestimonial(group, idx) {
                const slides = document.querySelectorAll(
                    `.testimonial-swiper-${group} .swiper-slide`
                );

                if (slides.length > 0) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('active', i === idx);
                    });
                }
            }

            // Initialize indices for each slider
            let customerIdx = 0;
            let ownerIdx = 0;

            // Initialize auto-slide timers
            let customerAutoSlide;
            let ownerAutoSlide;
            let autoSlideDelay = 4000; // 4 seconds between slides

            // Get all slides for each slider
            const customerSlides = document.querySelectorAll('.testimonial-swiper-customer .swiper-slide');
            const ownerSlides = document.querySelectorAll('.testimonial-swiper-owner .swiper-slide');

            console.log('Customer slides:', customerSlides.length);
            console.log('Owner slides:', ownerSlides.length);

            // Initial display - show first slide in each slider
            showTestimonial('customer', 0);
            showTestimonial('owner', 0);

            // Auto-slide functions
            function startCustomerAutoSlide() {
                stopCustomerAutoSlide(); // Clear any existing interval first
                customerAutoSlide = setInterval(function() {
                    customerIdx = (customerIdx + 1) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                }, autoSlideDelay);
            }

            function startOwnerAutoSlide() {
                stopOwnerAutoSlide(); // Clear any existing interval first
                ownerAutoSlide = setInterval(function() {
                    ownerIdx = (ownerIdx + 1) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                }, autoSlideDelay);
            }

            function stopCustomerAutoSlide() {
                clearInterval(customerAutoSlide);
            }

            function stopOwnerAutoSlide() {
                clearInterval(ownerAutoSlide);
            }

            // Start auto-sliding for both sliders
            startCustomerAutoSlide();
            startOwnerAutoSlide();

            // Customer slider navigation - important to target the correct buttons!
            document.querySelectorAll('.testimonial-prev-customer').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopCustomerAutoSlide(); // Stop auto-sliding when user clicks
                    customerIdx = (customerIdx - 1 + customerSlides.length) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startCustomerAutoSlide, autoSlideDelay * 2);
                })
            );

            document.querySelectorAll('.testimonial-next-customer').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopCustomerAutoSlide(); // Stop auto-sliding when user clicks
                    customerIdx = (customerIdx + 1) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startCustomerAutoSlide, autoSlideDelay * 2);
                })
            );

            // Owner slider navigation - separate from customer navigation!
            document.querySelectorAll('.testimonial-prev-owner').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopOwnerAutoSlide(); // Stop auto-sliding when user clicks
                    ownerIdx = (ownerIdx - 1 + ownerSlides.length) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startOwnerAutoSlide, autoSlideDelay * 2);
                })
            );

            document.querySelectorAll('.testimonial-next-owner').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopOwnerAutoSlide(); // Stop auto-sliding when user clicks
                    ownerIdx = (ownerIdx + 1) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startOwnerAutoSlide, autoSlideDelay * 2);
                })
            );

            // Pause auto-sliding when hovering over sliders
            const customerSlider = document.querySelector('.testimonial-swiper-customer');
            const ownerSlider = document.querySelector('.testimonial-swiper-owner');

            if (customerSlider) {
                customerSlider.addEventListener('mouseenter', stopCustomerAutoSlide);
                customerSlider.addEventListener('mouseleave', startCustomerAutoSlide);
            }

            if (ownerSlider) {
                ownerSlider.addEventListener('mouseenter', stopOwnerAutoSlide);
                ownerSlider.addEventListener('mouseleave', startOwnerAutoSlide);
            }
        });
    </script>

    <!-- Video Modal Script -->
    <script>
        // Success Stories Video Modal
        const videoModal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const videoTriggers = document.querySelectorAll('.video-trigger');

        if (videoModal) {
            const bsVideoModal = new bootstrap.Modal(videoModal);

            videoTriggers.forEach(trigger => {
                trigger.addEventListener('click', function() {
                    let videoUrl = this.closest('.video-thumbnail').getAttribute('data-video-url');

                    // Convert YouTube URL to embed format
                    if (videoUrl.includes('youtu.be') || videoUrl.includes('youtube.com')) {
                        // Extract video ID from various YouTube URL formats
                        let videoId = '';

                        if (videoUrl.includes('youtu.be')) {
                            // Format: https://youtu.be/VIDEO_ID
                            videoId = videoUrl.split('youtu.be/')[1];
                            if (videoId.includes('?')) {
                                videoId = videoId.split('?')[0];
                            }
                        } else if (videoUrl.includes('youtube.com/watch')) {
                            // Format: https://www.youtube.com/watch?v=VIDEO_ID
                            const urlParams = new URLSearchParams(videoUrl.split('?')[1]);
                            videoId = urlParams.get('v');
                        }

                        if (videoId) {
                            videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                        }
                    }

                    videoFrame.src = videoUrl;
                    bsVideoModal.show();
                });
            });

            // Clear iframe src when modal is closed to stop video
            videoModal.addEventListener('hidden.bs.modal', function() {
                videoFrame.src = '';
            });
        }
    </script>
</body>

</html>
