<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SSDI</title>
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

    <!-- Navbar Start -->

    <x-layouts.navbar>
        
        <x-slot name="nav">
           
            <li>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        <a class="nav-link" href="{{route('student.login')}}">Login</a>
                    </div>
                </div>
            </li>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <!-- Register/Login Split Section Start -->
    <section class="register-login-section content-margin-top">
        <div class="register-login-container">
            <!-- Left Side: Already Have an Account -->
            {{ $left }}
            <div class="register-login-illustration">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/register-illus.png" class=""
                    alt="Login Illustration">
            </div>
            <!-- Right Side: Sign Up Form -->
            {{ $slot }}
        </div>
    </section>
    <!-- Register/Login Split Section End -->

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
