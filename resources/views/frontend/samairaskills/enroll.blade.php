<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Skills Enroll Page</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill-single.css" rel="stylesheet">
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

    <!-- Navbar Start -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        <a class="nav-link" href="#">Login</a>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Navbar Start -->
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
    <!-- Mobile Navbar End -->
    <!-- Navbar End -->

    <section class="enroll-page-section py-5 mb-5">
        <div class="container">
            <div class="text-center mb-4">
                <button class="btn btn-primary fw-bold enroll-apply-btn mb-3 px-5 py-2" type="button">Apply for this
                    Course</button>
                <h2 class="fw-bold mb-4 enroll-title">{{ $course->title }}, (Batch: {{ $course->batch }})</h2>
            </div>
            <div class="row justify-content-center align-items-start g-4 mt-3">
                <div class="col-md-6 d-flex flex-column align-items-center">

                    <div class="w-100 d-flex justify-content-center">
                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                            alt="Course Banner" class="img-fluid rounded-3 enroll-banner-img" />
                    </div>
                    <a href="{{ url()->previous() }}"
                        class="btn btn-outline-primary fw-bold mt-4 px-4 py-2 enroll-back-btn" type="button">
                        Back to course
                        <span class="enroll-arrow">
                            <img src="{{ asset('assets/frontassets/images/samaira-skills/enroll-page/northeastrrow.png') }}"
                                alt="North East Arrow" class="enroll-arrow-img">
                        </span>
                    </a>

                </div>
                <div class="col-md-6">
                    <form action="{{ route('course.store.enroll') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($course->course_type == 'both')
                            <div class="mb-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="inlineRadio1" value="online">
                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="inlineRadio2" value="offline">
                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                </div>
                            </div>
                        @endif
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <input type="hidden" name="at" value="ssdi">
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control bg-light" placeholder="Name Here"
                                name="name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Your Mail Here" name="email"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone No.</label>
                            <div class="input-group">
                                <input type="text" class="form-control bg-light"
                                    placeholder="Enter your phone no." name="number" maxlength="11"
                                    pattern="01[3-9][0-9]{8}"
                                    title="Enter a valid Bangladeshi phone number (e.g., 017XXXXXXXX)" required />
                            </div>
                        </div>

                        <button type="submit"
                            class="btn btn-primary w-100 fw-bold py-2 mb-2 enroll-apply-now-btn">Apply Now <span
                                class="enroll-arrow"><img
                                    src="{{ asset('assets/frontassets/') }}/images/samaira-skills/enroll-page/northeastrrow.png"
                                    alt="North East Arrow" class="enroll-arrow-img"></span></button>
                    </form>
                    <div class="text-center mt-2">
                        <span class="fw-bold text-danger mx-2">or</span>
                        <span class="fw-bold text-primary"><a href=""
                                class="text-decoration-none">Login</a></span> with Existing account
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
