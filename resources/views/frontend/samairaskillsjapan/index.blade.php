<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Skills</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/logo.png" type="image/png">

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

    <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->


    <!-- Hero Section Start -->
    <section class="hero-section">
        <!-- Navbar -->
        <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        
                    </ul>
                    
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Offcanvas Sidebar -->
        <div class="offcanvas offcanvas-start" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Courses
                        </a>
                        <ul class="dropdown-menu" data-bs-popper="static">
                            <li><a class="dropdown-item" href="#">All Courses</a></li>
                            <li><a class="dropdown-item" href="#">In Progress</a></li>
                            <li><a class="dropdown-item" href="#">Completed</a></li>
                            <li><a class="dropdown-item" href="#">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Support
                        </a>
                        <ul class="dropdown-menu" data-bs-popper="static">
                            <li><a class="dropdown-item" href="#">Help Center</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
                <!-- Footer Image in Offcanvas -->
                <!-- <div class="offcanvas-footer mt-auto text-center">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/menu-bottom.png" alt="Menu Footer Image" class="img-fluid" style="max-width: 150px;">
              </div> -->
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Build Your <span class="highlight">Skills</span> <img
                                src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png"
                                alt="Graduation Cap" class="cap-icon">
                        </h1>
                        <h2 class="hero-subtitle">With Experts Any Time, Anywhere</h2>
                        <p class="hero-text">Free online courses from the world's Leading experts.</p>
                        <p class="join-text">Join <span class="highlight">10+ Million</span> Learners today</p>
                        <a href="#" class="join-btn">Join Us Today</a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/student.png"
                            alt="Student" class="student-img">
                        <!-- <div class="pattern-bg"></div>
                        <div class="dots-pattern"></div> -->

                        <!-- Stats moved here -->
                        <div class="stats">
                            <div class="stat-item active-students">
                                <div class="stat-icon">
                                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/users.png"
                                        alt="Users">
                                </div>
                                <div class="stat-text">
                                    <span class="number">150k</span>
                                    <span class="label">Active Students</span>
                                </div>
                            </div>
                            <div class="stat-item lifetime-access">
                                <div class="stat-icon">
                                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/feather.png"
                                        alt="Lifetime">
                                </div>
                                <div class="stat-text">
                                    <span>Lifetime Access</span>
                                </div>
                            </div>
                            <div class="stat-item courses-count">
                                <div class="stat-icon">
                                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/layers.png"
                                        alt="Courses">
                                </div>
                                <div class="stat-text">
                                    <span>12 online Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Courses Section Start -->
    <section class="courses-section py-5">
        <div class="container">
            <section class="courses-section py-5">
                <div class="container">
                    <!-- Section Header -->
                    <div class="row mb-4">
                        <div class="col text-center">
                            <p class="text-uppercase text-muted small mb-1">Our new courses for you</p>
                            <h2 class="fw-bold">Latest Courses</h2>
                        </div>
                    </div>

                    <!-- Swiper -->
                    <div class="swiper courses-swiper pt-3">
                        <div class="swiper-wrapper">
                            @foreach ($courses as $course)
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="course-card h-100">
                                        <div class="card-image position-relative">
                                            <div class="ribbon">{{ $course->course_type }}</div>
                                            <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                                class="img-fluid w-100" alt="Course Image">
                                            <div
                                                class="image-overlay d-flex justify-content-center align-items-center gap-2">
                                                <a href="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                                    class="btn btn-light btn-sm rounded-circle overlay-btn glightbox"
                                                    data-gallery="course-gallery">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <span class="course-price">{{ $course->price }} Taka</span>
                                            <a href="{{ route('page.ssdi.course', $course) }}">
                                                <h3 class="course-title">{{ $course->title }}</h3>
                                            </a>
                                            <div class="course-meta">
                                                <span class="course-rating">
                                                    <a href="{{ route('page.ssdi.course.enroll', $course) }}"
                                                        class="btn-sm" title="Enroll Now">Enroll Now</a>
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

                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>


                </div>
            </section>
        </div>
    </section>
    <!-- Latest Courses Section End  -->

    <!-- Success Stories Section Start -->
    <section class="success-stories py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Success Stories</h2>
               
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
                            <p class="story-meta">Student Of {{$story->student_of}}</p>
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

    <!-- Course Categories Section Start -->

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

    <!-- Enrollment Discount Section Start -->
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
    <!-- Enrollment Discount Section End -->

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

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>

    <!-- Latest Courses -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.courses-swiper', {
                // Optional parameters
                loop: true, // Enable looping
                slidesPerView: 1, // Default slides per view
                spaceBetween: 20, // Space between slides

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
                }
            });
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

            // Success Stories Video Modal
            const videoModal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            const videoTriggers = document.querySelectorAll('.video-trigger');

            if (videoModal) {
                const bsVideoModal = new bootstrap.Modal(videoModal);

                videoTriggers.forEach(trigger => {
                    trigger.addEventListener('click', function() {
                        let videoUrl = this.closest('.video-thumbnail').getAttribute(
                            'data-video-url');

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
        });
    </script>
</body>

</html>
