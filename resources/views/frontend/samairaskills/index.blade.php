<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Skills</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">

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
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page.ssdi.about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>


                    </ul>
                    {{-- <div class="nav-auth">
                <div class="nav-item signup-btn">
                    <a class="nav-link" href="#">Login</a>
                </div>
                </div> --}}
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
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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
                        <h2 class="hero-subtitle">{{ system_key('system_skill_banner_title') }}</h2>
                        <p class="hero-text">{{ system_key('system_skill_banner_sub_title') }}</p>
                        <p class="join-text">Join <span
                                class="highlight">{{ system_key('system_skill_banner_count') }}+
                                Million</span>
                            Learners today</p>
                        <a href="{{ system_key('system_skill_banner_btn_link') }}" class="join-btn">Join Us Today</a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="{{ system_key('samaira_skills_banner') ? Storage::url(system_key('samaira_skills_banner')) : asset('assets/img/no-profile.png') }}"
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
                                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
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

                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


        </div>
    </section>
    <!-- Latest Courses Section End  -->

    <!-- Course Categories Section Start -->
    <section class="course-categories pt-5">
        <div class="container pt-4">
            <div class="section-header text-center mb-5">
                <p class="text-uppercase small text-muted mb-2">CHOOSE YOUR DESIRED COURSES</p>
                <h2 class="section-title">Browse Our Top Courses</h2>
            </div>

            <!-- Category Filter Buttons -->
            <div class="category-filters text-center mb-4">
                <button class="filter-btn active" data-category="all">All</button>
                @foreach ($categories as $category)
                    <button class="filter-btn text-capitalize"
                        data-category="{{ $category->title }}">{{ $category->title }}</button>
                @endforeach
            </div>

            <!-- Course Cards Slider -->
            <div class="swiper category-swiper">
                <div class="swiper-wrapper">
                    <!-- Graphic Design Courses -->
                    @foreach ($categories as $category)
                        @foreach ($category->courses as $course)
                            <div class="swiper-slide" data-category="{{ $category->title }}">
                                <div class="course-card">
                                    <div class="card-image">
                                        <div class="ribbon">{{ $course->course_type }}</div>
                                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                            alt="Graphic Design Course">
                                    </div>
                                    <div class="course-info">
                                        <span class="course-level text-capitalize">{{ $category->title }}</span>
                                    </div>
                                    <div class="card-content">
                                        <h3>{{ $course->title }} {{ $course->batch }}</h3>
                                        <div class="course-meta">
                                            <span><i class="fas fa-book-open"></i> {{ $course->total_lessons }}
                                                Lessons</span>
                                        </div>
                                        <div class="course-bottom-row">
                                            <div class="price-free">{{ $course->price }} Taka</div>
                                            <a href="{{ route('page.ssdi.course.enroll', $course) }}" class="enroll-btn">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
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

    <!-- We are certified By start  -->
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
    <!-- We are certified By End  -->

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
                            <a href="{{ route('page.ssdi.course.enroll',  $featured->course) }}" class="btn btn-primary enrollment-btn">Start Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Enrollment Discount Section End -->

    <!-- Footer Section Start -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget 1: About -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" alt="Logo"
                            class="footer-logo mb-3">
                        <p class="footer-description">A service a treansaction in which no physical goods are
                            transferred from the seller, to the buyer. the benefits of such a service are</p>
                        <div class="footer-social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 2: Company Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-links">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Test Exam</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget 3: Courses Links -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Courses</h4>
                        <ul class="footer-links">
                            <li><a href="#">UIUX</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mobile and Banking</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget 4: Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Get Update Newsletter</h4>
                        <p class="newsletter-description">Subscribe to get the latest news from us</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Email" class="form-control">
                            <button type="submit" class="btn-submit"><i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright-text">Copyright@2022</p>
            </div>
        </div>
    </footer>
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
        });
    </script>
</body>

</html>
