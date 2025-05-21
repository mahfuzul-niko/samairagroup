<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | SSDi</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skills-register.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

</head>

<body>

    <x-layouts.header />
    <!-- Mobile Top Header Section End -->


    <x-layouts.navbar>
        <x-slot name="logo">
            {{-- <a href="#" class="rg-navbar-logo"><img
                    src="{{ system_key('samaira_skills_logo') ? Storage::url(system_key('samaira_skills_logo')) : asset('assets/img/no-profile.png') }}" /></a> --}}
            <a href="#" class="rg-navbar-logo"><img
                    src="" /></a>
        </x-slot>
        <x-slot name="nav">
            <li><a href="{{ route('page.home.about') }}">About Us</a></li>
            <li><a href="{{ route('page.home.contact') }}">Contact Us</a></li>
            <li>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        @auth
                            <a href="{{ route('student.dashboard') }}"><i class="fa-solid fa-user"></i>
                                <span>{{ auth()->user()->name }}</span></a>
                        @else
                            <a class="nav-link" href="{{ route('student.login') }}">Login</a>
                        @endauth
                    </div>
                </div>
            </li>
        </x-slot>
    </x-layouts.navbar>

    <!-- Student Dashboard Start -->
    <div class="student-dashboard-wrapper container-fluid py-4 content-margin-top">
        <div class="row">
            <!-- Sidebar -->
            <aside class="student-sidebar col-lg-2 col-md-3 mb-4">
                <div class="student-profile-box text-center mb-4">
                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('assets/img/no-profile.png') }}"
                        alt="User Avatar" class="student-avatar mb-2">
                    <h5 class="student-name mb-1">{{ auth()->user()->name }}</h5>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="student-logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <nav class="student-nav">
                    <ul class="student-nav-list list-unstyled">
                        <li><a href="{{ route('student.dashboard') }}"><i class="fa fa-th-large "></i> Dashboard</a>
                        </li>
                        {{-- <li><a href="#"><i class="fa fa-book"></i> Enrolled Courses</a></li> --}}
                        {{-- <li><a href="#"><i class="fa fa-credit-card"></i> Payment Info</a></li> --}}
                        <li><a href="#"><i class="fa fa-star"></i> Course Reviews</a></li>
                        <li><a href="#"><i class="fa fa-certificate"></i> Certificate</a></li>
                        <li><a href="{{ route('student.profile') }}"><i class="fa fa-user"></i> Profile</a></li>
                    </ul>
                </nav>
            </aside>
            <!-- Main Dashboard -->
            <main class="student-dashboard-main col-lg-8 col-md-9 mb-4">
                {{ $slot }}
            </main>
            <!-- Right Sidebar -->
            <aside class="student-dashboard-right col-lg-2 col-md-12">
                <div class="dashboard-announcement mb-4">
                    <div class="announcement-box p-3 bg-white rounded shadow-sm">
                        <div class="announcement-header d-flex align-items-center mb-2">
                            <span class="announcement-title fw-bold">Announcement</span>
                            <span class="announcement-icon ms-2"><i class="fa fa-bell text-danger"></i></span>
                        </div>
                        <div class="announcement-body">
                            <div class="announcement-highlight text-danger fw-bold mb-1">Post Graduate Diploma (PGD) in
                                Data Science (7th Batch)</div>
                            <div class="announcement-text small">The 6th batch of PGD in Data Science all seats are
                                fully fill up, so those who are missed the runnin...</div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <!-- Student Dashboard End -->

    <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

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
</body>

</html>
