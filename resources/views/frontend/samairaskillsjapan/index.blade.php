<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Language Institute</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

</head>

<body>

    <x-layouts.header />
    <!-- Navbar Start -->
    <x-layouts.navbar>
        <x-slot name="logo">
            <a href="#" class="rg-navbar-logo"><img
                    src="{{ system_key('samaira_language_logo') ? Storage::url(system_key('samaira_language_logo')) : asset('assets/img/no-profile.png') }}" /></a>
        </x-slot>
        <x-slot name="nav">
            <li><a href="{{ route('page.japan.about') }}">About Us</a></li>
            <li><a href="{{ route('page.japan.contact') }}">Contact Us</a></li>



            <li>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        @auth
                        <a href=""><i class="fa-solid fa-user"></i> <span>{{auth()->user()->name}}</span></a>
                        @else
                        <a class="nav-link" href="{{ route('student.login') }}">Login</a>
                        @endauth

                    </div>
                </div>
            </li>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <!-- Slider Start -->
   <div class="contact-slider-container">
        <div class="swiper about-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="hero-content">
                            <h1 class="hero-title">
                                {{ $banner->title }}<img
                                    src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png"
                                    alt="Graduation Cap" class="cap-icon">
                            </h1>
                            <p class="hero-text">{{ $banner->subtitle }}</p>
                            <a href="{{ $banner->url }}" class="join-btn">Join Us Today</a>
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

    <!-- Latest Courses Section Start -->
     <section class="courses-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-4 margin-bottom-100">
                <div class="col text-center">
                    <p class="text-uppercase text-muted small mb-1">Our new courses for you</p>
                    <h2 class="fw-bold">Latest Courses</h2>
                </div>
            </div>

            <div class="row g-3">
                @foreach ($courses as $course)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="ribbon">nice</div>
                            <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                class="img-fluid w-100" alt="Course Image">

                            <div class="card-body">
                                <div class="d-flex justify-content-between">

                                    <a href="{{ route('page.ssdi.course', $course) }}"
                                        class="text-decoration-none text-dark">
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                    </a>
                                    <span class="course-price">{{ $course->price }} Taka</span>
                                </div>
                                <div class="course-meta mt-3">
                                    <span class="course-rating">
                                        <a href="{{ route('page.ssdi.course.enroll', $course) }}" class="btn-sm"
                                            title="Enroll Now">Enroll Now</a>
                                    </span>

                                    <span class="course-lessons">
                                        <i class="fas fa-play"></i> {{ $course->total_lessons }} Lessons
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>

    </section>
    <!-- Latest Courses Section End  -->

    <!-- Success Stories Section Start -->
    <section class="success-stories py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Success Stories</h2>
                <p class="section-desc">The presence of our students in the ever expanding IT industry motivates us,
                    drives us to guide more people towards a sustainable future.</p>
            </div>

            <div class="row">
                <!-- Success Story 1 -->
                @foreach ($stories as $story)
                    
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative"
                            data-video-url="{{$story->url}}">
                            <img src="{{$story->image ? Storage::url($story->image) : asset('assets/img/no-profile.png')}}"
                                alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">{{$story->title}}</h3>
                            <p class="story-meta">Student Of Digital Marketing</p>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>

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
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories Section End -->

    <!-- How it Works Section Start -->
     <section class="how-it-works">
        <div class="container">
            <h2 class="section-title text-center">How it Works</h2>

            <div class="row g-4 justify-content-center">
                <!-- Register Card -->
                <div class="col-md-3">
                    <div class="process-card register-card">
                        <div class="icon-box">
                            <i class="fas fa-bars"></i>
                        </div>
                        <h3>Register</h3>
                        <p>{{ system_key('system_skill_register') }}</p>
                    </div>
                </div>

                <!-- Add New Course Card -->
                <div class="col-md-3">
                    <div class="process-card course-card">
                        <div class="icon-box">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h3>Add New Course</h3>
                        <p>{{ system_key('system_skill_new_course') }}</p>
                    </div>
                </div>

                <!-- Success Card -->
                <div class="col-md-3">
                    <div class="process-card success-card">
                        <div class="icon-box">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3>Success</h3>
                        <p>{{ system_key('system_skill_success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works Section End -->

    <!-- Testimonials Section Start -->
   <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-3 margin-bottom-100">
                <h2 class="section-title">Student's Review</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">{{ $review->review }}</p>
                                <div class="testimonial-author">
                                    <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Orlando Diggs" class="author-image">
                                    <div class="author-info">
                                        <h4>{{ $review->name }}</h4>
                                        <p><a href="{{ route('page.ssdi.course', $review->course) }}"
                                                class="text-decoration-none ">{{ $review->course->title }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Navigation and Pagination Container -->
                <div class="testimonial-controls">
                    <div class="control-wrapper">
                        <div class="swiper-button-prev testimonial-prev">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="swiper-pagination testimonial-pagination"></div>
                        <div class="swiper-button-next testimonial-next">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <section class="sister-concern py-5">
        <div class="container text-center">
            <h3 class="mb-4">We are certified By</h3>
            <div class="logos-wrapper">
                <div class="logos-slider">
                    <!-- First set of logos -->
                    <div class="d-flex">
                        @foreach ($certifieds as $certified)
                            <div class="logo-item">
                                <img src="{{ $certified->logo ? Storage::url($certified->logo) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach

                    </div>
                    <!-- Duplicate set of logos for seamless loop -->
                    <div class="d-flex">
                        @foreach ($certifieds as $certified)
                            <div class="logo-item">
                                <img src="{{ $certified->logo ? Storage::url($certified->logo) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex">
                        @foreach ($certifieds as $certified)
                            <div class="logo-item">
                                <img src="{{ $certified->logo ? Storage::url($certified->logo) : asset('assets/img/no-profile.png') }}"
                                    alt="Logo 1" class="sister-logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- We are certified By End  -->

    @if (!is_null($featured))
        <section class="enrollment-discount-section mt-5 pt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrollment-image">
                            <img src="{{ $featured->image ? Storage::url($featured->image) : asset('assets/img/no-profile.png') }}"
                                alt="Student Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enrollment-content">
                            <h2>{{ $featured->title }}</h2>
                            <div class="cta-group">
                                <a href="{{ route('page.ssdi.course.enroll', $featured->course) }}"
                                    class="btn btn-primary enrollment-btn">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Footer Section Start -->
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

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>

    <!-- Latest Courses -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.courses-swiper', {
                // Optional parameters
                loop: false, // Disable looping when few slides
                slidesPerView: 1, // Default slides per view
                spaceBetween: 20, // Space between slides
                allowTouchMove: true, // Allow touch/swipe
                watchSlidesProgress: true,

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // Responsive breakpoints
                breakpoints: {
                    // when window width is >= 576px
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    // when window width is >= 768px
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    // when window width is >= 992px
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                },

                // Add observer to update navigation visibility
                observer: true,
                observeParents: true,

                // Custom function to handle navigation visibility
                on: {
                    init: function() {
                        updateNavigationVisibility(this);
                    },
                    slideChange: function() {
                        updateNavigationVisibility(this);
                    }
                }
            });

            // Function to update navigation visibility based on slide count
            function updateNavigationVisibility(swiper) {
                const totalSlides = swiper.slides.length;
                const navigationButtons = swiper.el.querySelectorAll('.swiper-button-next, .swiper-button-prev');

                if (totalSlides <= 3) {
                    navigationButtons.forEach(button => {
                        button.style.display = 'none';
                    });
                    // Disable swiper functionality when few slides
                    swiper.allowTouchMove = false;
                    swiper.allowSlideNext = false;
                    swiper.allowSlidePrev = false;
                } else {
                    navigationButtons.forEach(button => {
                        button.style.display = 'flex';
                    });
                    // Enable swiper functionality when enough slides
                    swiper.allowTouchMove = true;
                    swiper.allowSlideNext = true;
                    swiper.allowSlidePrev = true;
                }
            }
        });
    </script>

    <!-- Lightbox -->
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    </script>

    <!-- Initialize Category Swiper and Filters -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize category swiper
            const categorySwiper = new Swiper('.category-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Initialize testimonial swiper
            const testimonialSwiper = new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimonial-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.testimonial-next',
                    prevEl: '.testimonial-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Category filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const slides = document.querySelectorAll('.category-swiper .swiper-slide');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    button.classList.add('active');

                    const category = button.getAttribute('data-category');

                    // Show all slides if 'all' category is selected
                    if (category === 'all') {
                        slides.forEach(slide => {
                            slide.style.display = 'block';
                        });
                    } else {
                        // Show only slides matching the selected category
                        slides.forEach(slide => {
                            if (slide.getAttribute('data-category') === category) {
                                slide.style.display = 'block';
                            } else {
                                slide.style.display = 'none';
                            }
                        });
                    }

                    // Update swiper after filtering
                    categorySwiper.update();
                    categorySwiper.updateSlides();
                    categorySwiper.updateProgress();
                    categorySwiper.updateSlidesClasses();
                    categorySwiper.slideTo(0);
                });
            });
        });
    </script>

    <!-- Success Story Video  -->
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

    <!-- Slider Animation  -->
    <script>
        var swiper = new Swiper('.about-swiper', {
            direction: 'vertical',
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
