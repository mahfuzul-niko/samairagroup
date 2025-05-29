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
       <x-layouts.navbar>

        <x-slot name="nav">
            <li>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        @auth
                            <a href="{{ route('student.dashboard') }}"><i class="fa-solid fa-user"></i> <span>{{ auth()->user()->name }}</span></a>
                        @else
                            <a class="nav-link" href="{{ route('student.login') }}">Login</a>
                        @endauth
                    </div>
                </div>
            </li>
        </x-slot>
    </x-layouts.navbar>

   

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
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif


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

                        <input type="hidden" name="at" value="{{$course->course_for}}">

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control bg-light" placeholder="Name Here"
                                name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}" required
                                {{ auth()->check() ? 'readonly' : '' }} />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Your Mail Here" name="email"
                                value="{{ auth()->check() ? auth()->user()->email : '' }}"
                                {{ auth()->check() ? 'readonly' : '' }} required />

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone No.</label>
                            <div class="input-group">
                                <input type="text" class="form-control bg-light"
                                    placeholder="Enter your phone no." name="number" maxlength="11"
                                    pattern="01[3-9][0-9]{8}"
                                    title="Enter a valid Bangladeshi phone number (e.g., 017XXXXXXXX)"
                                    value="{{ auth()->check() ? auth()->user()->phone : '' }}"
                                    {{ auth()->check() ? 'readonly' : '' }} required />
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold py-2 mb-2 enroll-apply-now-btn">
                            Apply Now
                            <span class="enroll-arrow">
                                <img src="{{ asset('assets/frontassets/images/samaira-skills/enroll-page/northeastrrow.png') }}"
                                    alt="North East Arrow" class="enroll-arrow-img">
                            </span>
                        </button>
                    </form>

                    <div class="text-center mt-2">
                        <span class="fw-bold text-danger mx-2">or</span>
                        <span class="fw-bold text-primary"><a href="{{ route('student.login') }}"
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
    <!-- Custom JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
