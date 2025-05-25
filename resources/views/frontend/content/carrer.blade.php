<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career - Samaira Group</title>
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
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/extra-page.css">
</head>
<body>
   <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->



    <!-- Navbar Start -->
    <x-layouts.navbar>
        <x-slot name="logo">
            <a href="#" class="rg-navbar-logo"><img
                    src="{{ system_key('samaira_skills_logo') ? Storage::url(system_key('samaira_skills_logo')) : asset('assets/img/no-profile.png') }}" /></a>
        </x-slot>
        <x-slot name="nav">
            <li><a href="{{ route('page.ssdi.about') }}">About Us</a></li>
            <li><a href="{{ route('page.ssdi.contact') }}">Contact Us</a></li>
            


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
  <div class="about-slider-container content-margin-top">
    <div class="swiper about-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 1"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 2"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 3"></div>
      </div>
    </div>
  </div>
  <!-- Slider End -->

  <!-- Career Section Start -->
  <section class="career-section py-5">
    <div class="container">
    <div class="row align-items-center justify-content-center mb-5 career-section-first-row">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="career-img-wrapper mb-4 mb-lg-0 text-center text-lg-center">
                <h2 class="career-title mb-2">Career</h2>
                <div class="career-title-flourish mb-2">
                <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="10" width="80" height="4" rx="2" fill="#2293ce"/>
                    <rect x="35" y="6" width="10" height="12" rx="5" fill="#fecc30"/>
                </svg>
                </div>
                <h4 class="career-subtitle mb-3">We Are Available, Right Here</h4>
                <p class="career-intro text-muted">Join our dynamic team and help us shape the future. We are always looking for talented individuals to grow with us. Drop your CV and let's connect!</p>
            </div>
        </div>
    </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7">
          <div class="career-form-wrapper p-4 p-lg-5">
            <h3 class="career-form-title mb-4">Drop Your CV</h3>
            <form class="career-form">
              <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="jobTitle" placeholder="Enter Job Title" required>
                
              </div>
              <div class="mb-3">
                <label for="jobType" class="form-label">Job Type <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="jobType" placeholder="Enter Job Type" required>
                
              </div>
              <div class="mb-3">
                <label for="coverLetter" class="form-label">Cover Letter</label>
                <textarea class="form-control" id="coverLetter" rows="4" placeholder="Write a short cover letter..."></textarea>
              </div>
              <div class="mb-4">
                <label for="cvFile" class="form-label">Attach PDF CV <span class="text-danger">*</span></label>
                <input class="form-control" type="file" id="cvFile" accept="application/pdf" required>
              </div>
              <button type="submit" class="btn btn-primary w-100 career-submit-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Career Section End -->

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
   <!-- Lightbox JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>
   <!-- Custom JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

   <!-- About Slider Script -->
  <script>
    var swiper = new Swiper('.about-swiper', {
      effect: 'coverflow',
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false },
      speed: 1000,
    });
  </script>
</body>
</html>
