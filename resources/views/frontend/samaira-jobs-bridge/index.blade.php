<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Jobs Bridge Limited</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-jobs/logo.png" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-jobs.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">

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
  <div class="contact-slider-container samaira-skill-slider content-margin-top">
    <div class="swiper about-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero-content">
            <div class="sjb-hero-content">
                <h1 class="font-weight-bold">Are you looking for Freelance Job ?</h1>
                <p>Hire Great Freelancers, Fast. Spacelance helps you hire elite freelancers at a moment's notice</p>
                  <a href="" class="sjb-hire-btn d-inline-block text-decoration-none" type="button">Hire a freelancer</a>
              </div>
          </div>
          <div class="slide-bg-wrap">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 1" class="slide-bg-img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-content">
            <div class="sjb-hero-content">
                <h1 class="font-weight-bold">Are you looking for Freelance Job ?</h1>
                <p>Hire Great Freelancers, Fast. Spacelance helps you hire elite freelancers at a moment's notice</p>
                <a href="" class="sjb-hire-btn d-inline-block text-decoration-none" type="button">Hire a freelancer</a>
              </div>
          </div>
          <div class="slide-bg-wrap">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 1" class="slide-bg-img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider End -->
  <main>
    <!-- Features Section Start -->
    <section class="sjb-features">
      <div class="sjb-feature-card">
        <div class="sjb-feature-icon sjb-feature-account">
          <!-- Account SVG -->
          <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group1.png" alt="Account Icon">
        </div>
        <h3>Create Account</h3>
        <p>First you have to create a account here</p>
      </div>
      <div class="sjb-feature-card">
        <div class="sjb-feature-icon sjb-feature-search">
          <!-- Search SVG -->
          <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group2.png" alt="Search Icon">
        </div>
        <h3>Search work</h3>
        <p>Search the best freelance work here</p>
      </div>
      <div class="sjb-feature-card">
        <div class="sjb-feature-icon sjb-feature-save">
          <!-- Save/Apply SVG -->
          <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/group3.png" alt="Save Icon">
        </div>
        <h3>Save and apply</h3>
        <p>Apply or save and start your work</p>
      </div>
    </section>
    <!-- Features Section End -->
     
    <!-- Highlight Section Start -->
    <section class="sjb-highlight-section">
      <div class="sjb-highlight-container">
        <div class="sjb-highlight-left">
          <div class="sjb-highlight-img-wrapper">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/highllight.png" alt="Woman in blue suit" class="sjb-highlight-img">
          </div>
        </div>
        <div class="sjb-highlight-right">
          <h2>
            Find The Best <span class="sjb-highlight-blue">Job</span> Here
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat bibendum ornare urna, cursus eget convallis. Feugiat imperdiet posuere justo, ultrices interdum sed orci nunc, mattis. Ipsum viverra viverra neque adipiscing arcu, quam dictum. Dui mi viverra dui, sit accumsan, tincidunt massa. Dui cras magnis.
          </p>
        </div>
      </div>
    </section>
    <!-- Highlight Section End -->

    <!-- Recent Works Section Start -->
    <section class="sjb-recent-works-section">
      <div class="container">
        <div class="sjb-recent-works-header">
          <div>
            <div class="sjb-recent-works-subtitle">The latest freelance work!</div>
            <h2 class="sjb-recent-works-title">Recently Posted <span>Works</span></h2>
          </div>
          <div class="sjb-slider-nav">
            <button class="sjb-slider-btn sjb-slider-prev"><i class="fa fa-arrow-left"></i></button>
            <button class="sjb-slider-btn sjb-slider-next"><i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
        <div class="sjb-slider-wrapper">
          <div class="sjb-slider">
            <!-- Slide 1 -->
            <div class="sjb-work-card">
              <div class="sjb-work-icon"><img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/MaterialUi.png" alt="Logo Design"></div>
              <h3>Logo Design</h3>
              <p>Need a professional logo with writing underneath for our jewellery company</p>
              <div class="sjb-work-bid-row">
                <span>Highest bid</span>
                <span class="sjb-work-bid-amount">$500</span>
                <a href="#" class="sjb-work-apply">Apply now</a>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="sjb-work-card">
              <div class="sjb-work-icon"><img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/CanvaApp.png" alt="Graphic Design"></div>
              <h3>Graphic Design</h3>
              <p>We need a graphic designer with UI/UX skills for our Furniture company</p>
              <div class="sjb-work-bid-row">
                <span>Highest bid</span>
                <span class="sjb-work-bid-amount">$500</span>
                <a href="#" class="sjb-work-apply">Apply now</a>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="sjb-work-card">
              <div class="sjb-work-icon"><img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/Account.png" alt="SEO"></div>
              <h3>Need a SEO</h3>
              <p>Need a SEO for our company who will let our company to a higher level</p>
              <div class="sjb-work-bid-row">
                <span>Highest bid</span>
                <span class="sjb-work-bid-amount">$300</span>
                <a href="#" class="sjb-work-apply">Apply now</a>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="sjb-work-card">
              <div class="sjb-work-icon"><img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/Account.png" alt="SEO"></div>
              <h3>Need a SEO</h3>
              <p>Need a SEO for our company who will let our company to a higher level</p>
              <div class="sjb-work-bid-row">
                <span>Highest bid</span>
                <span class="sjb-work-bid-amount">$300</span>
                <a href="#" class="sjb-work-apply">Apply now</a>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="sjb-work-card">
              <div class="sjb-work-icon"><img src="{{ asset('assets/frontassets/') }}/images/samaira-jobs/CanvaApp.png" alt="SEO"></div>
              <h3>Need a SEO</h3>
              <p>Need a SEO for our company who will let our company to a higher level</p>
              <div class="sjb-work-bid-row">
                <span>Highest bid</span>
                <span class="sjb-work-bid-amount">$300</span>
                <a href="#" class="sjb-work-apply">Apply now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Recent Works Section End -->
    
    <!-- Categories Section Start -->
    <section class="sjb-categories-section">
      <div class="container">
        <h2 class="sjb-categories-title">Our Completed <span>Projects</span></h2>
        <div class="sjb-categories-grid">
          <a href="">
            <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category1.png')">
              <div class="sjb-category-overlay"></div>
              <span>Graphic&Design</span>
            </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category2.png')">
            <div class="sjb-category-overlay"></div>
            <span>Cartoon Animation</span>
          </div>  
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category3.png')">
            <div class="sjb-category-overlay"></div>
            <span>Illustration</span>
          </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category3.png')">
            <div class="sjb-category-overlay"></div>
            <span>Flyers & Vouchers</span>
          </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category2.png')">
            <div class="sjb-category-overlay"></div>
            <span>Logo Design</span>
          </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category1.png')">
            <div class="sjb-category-overlay"></div>
            <span>Social graphics</span>
          </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category2.png')">
            <div class="sjb-category-overlay"></div>
            <span>Article writing</span>
          </div>
          </a>
          <a href="">
          <div class="sjb-category-card" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/category3.png')">
            <div class="sjb-category-overlay"></div>
            <span>Video Editing</span>
          </div>
          <a href="">
        </div>
        <div class="sjb-categories-btn-row">
          <a href="#" class="sjb-categories-btn">More Categories</a>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Portfolio Slider Section Start -->
    <section class="sjb-portfolio-section">
      <div class="container">
        <div class="sjb-portfolio-header">
          <div class="sjb-portfolio-subtitle">Logos, websites, book covers & more!</div>
          <h2 class="sjb-portfolio-title">Checkout The Best <span>Portfolios</span> Here</h2>
        </div>
        <div class="sjb-portfolio-slider-wrapper">
          <div class="sjb-portfolio-slider">
            <!-- Slide 1 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Bunny.design</div>
                  <div class="sjb-portfolio-role">UI/UX Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Bhaskar Tiwari</div>
                  <div class="sjb-portfolio-role">Graphic Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Aksara Joshi</div>
                  <div class="sjb-portfolio-role">Graphic Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 4 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Riya Sen</div>
                  <div class="sjb-portfolio-role">Web Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 1 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Bunny.design</div>
                  <div class="sjb-portfolio-role">UI/UX Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Bhaskar Tiwari</div>
                  <div class="sjb-portfolio-role">Graphic Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio1.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Aksara Joshi</div>
                  <div class="sjb-portfolio-role">Graphic Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
            <!-- Slide 4 -->
            <div class="sjb-portfolio-card">
              <div class="sjb-portfolio-img" style="background-image:url('{{ asset('assets/frontassets/') }}/images/samaira-jobs/portfolio2.png')"></div>
              <div class="sjb-portfolio-info">
                <div>
                  <div class="sjb-portfolio-name">Riya Sen</div>
                  <div class="sjb-portfolio-role">Web Designer</div>
                </div>
                <span class="sjb-portfolio-arrow"><i class="fa fa-arrow-right"></i></span>
              </div>
            </div>
          </div>
          <div class="sjb-portfolio-dots"></div>
        </div>
      </div>
    </section>
    <!-- Portfolio Slider Section End -->

    <!-- Newsletter Subscription Section Start -->
    <section class="sjb-newsletter-section">
      <div class="container">
        <h2 class="sjb-newsletter-title">Newsletter Subscription</h2>
        <div class="sjb-newsletter-subtitle">Subscribe to our newsletter to get new freelance work and projects</div>
        <form class="sjb-newsletter-form">
          <input type="email" class="sjb-newsletter-input" placeholder="Enter your email address" required />
          <button type="submit" class="sjb-newsletter-btn">Subscribe</button>
        </form>
      </div>
    </section>
    <!-- Newsletter Subscription Section End -->

    <!-- Sister Concern start  -->
<section class="sister-concern py-5">
    <div class="container text-center">
      <h3 class="mb-4">Our Partners</h3>
      <div class="logos-wrapper">
        <div class="logos-slider">
          <!-- First set of logos -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
          <!-- Duplicate set of logos for seamless loop -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sister Concern End  -->

    <!-- Custom Footer Section Start -->
  <footer class="cg-footer-section py-4">
    <div class="container">
      <div class="row align-items-center py-4">
        <div class="col-12 d-flex align-items-center justify-content-center gap-3">
          <div class="flex-grow-1 border-top border-info"></div>
          <img src="{{ asset('assets/frontassets/') }}/images/logo1.png" alt="Samaira Group Logo" class="cg-footer-main-logo">
          <div class="flex-grow-1 border-top border-info"></div>
        </div>
      </div>
      <div class="row py-4">
        <div class="col-md-2 mb-4 mb-md-0">
          <h3 class="text-info fw-bold border-bottom pb-2 mb-3">USEFUL LINKS</h3>
          <ul class="list-unstyled cg-footer-section-ul">
            <li><a href="#" class="text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-decoration-none">Our Management</a></li>
            <li><a href="#" class="text-decoration-none">Sister Concern</a></li>
            <li><a href="#" class="text-decoration-none">Search for Job</a></li>
          </ul>
        </div>
        <div class="col-md-7 mb-4 mb-md-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.278495061193!2d90.4070121747916!3d23.737446289274466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9183ec90c79%3A0xe1511972be9e4337!2sSamaira%20Skill%20Development%20Institute%20(SSDI)!5e0!3m2!1sen!2sbd!4v1747031766910!5m2!1sen!2sbd" width="750" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <div class="col-md-3">
          <h3 class="text-info fw-bold border-bottom pb-2 mb-3">CONTACT US</h3>
          <address class="text-info">
            Head Office:<br>
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            Branch Office:<br>
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            <a href="tel:+8801313770460" class="text-info text-decoration-underline">Reception:</a><br>
            <a href="tel:+8801313770460" class="text-decoration-none text-dark">+8801313770460</a><br>
            <a href="tel:+8809611611333" class="text-info text-decoration-underline">Marketing:</a><br>
            <a href="tel:+8801313770460" class="text-decoration-none text-dark">+8801313770460</a><br>
          </address>
        </div>
      </div>
      <div class="row border-top pt-3 align-items-center bottom-footer">
        <div class="col-md-8 small">
          Copyright © 2025. Samaira Group
        </div>
        <div class="col-md-4 d-flex justify-content-md-end justify-content-center gap-3 mt-3 mt-md-0">
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-youtube"></i></a>
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Custom Footer Section End -->
  </main>

  
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
  document.addEventListener('DOMContentLoaded', function() {
    // Recent Works Slider (existing)
    const slider = document.querySelector('.sjb-slider');
    const cards = document.querySelectorAll('.sjb-work-card');
    const prevBtn = document.querySelector('.sjb-slider-prev');
    const nextBtn = document.querySelector('.sjb-slider-next');
    let currentIndex = 0;
    let cardsPerView = 3;
    // let autoSlideInterval = null;
    let isHovered = false;

    function updateCardsPerView() {
      if(window.innerWidth <= 700) {
        cardsPerView = 1;
      } else if(window.innerWidth <= 900) {
        cardsPerView = 2;
      } else {
        cardsPerView = 3;
      }
    }

    function updateSlider() {
      const sliderStyles = window.getComputedStyle(slider);
      const gap = parseInt(sliderStyles.gap) || 24;
      const cardWidth = cards[0].offsetWidth + gap;
      slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    function checkButtons() {
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= cards.length - cardsPerView;
    }

    function goToNext() {
      if(currentIndex < cards.length - cardsPerView) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
      updateSlider();
      checkButtons();
    }

    function goToPrev() {
      if(currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = cards.length - cardsPerView;
      }
      updateSlider();
      checkButtons();
    }

    prevBtn.addEventListener('click', function() {
      goToPrev();
    });

    nextBtn.addEventListener('click', function() {
      goToNext();
    });

    function startAutoSlide() {
      if(autoSlideInterval) clearInterval(autoSlideInterval);
      autoSlideInterval = setInterval(function() {
        if (!isHovered) {
          goToNext();
        }
      }, 3000);
    }

    slider.addEventListener('mouseenter', function() {
      isHovered = true;
    });
    slider.addEventListener('mouseleave', function() {
      isHovered = false;
    });

    window.addEventListener('resize', function() {
      updateCardsPerView();
      if(currentIndex > cards.length - cardsPerView) {
        currentIndex = Math.max(0, cards.length - cardsPerView);
      }
      updateSlider();
      checkButtons();
    });

    // Initial setup
    updateCardsPerView();
    updateSlider();
    checkButtons();
    // startAutoSlide();

    // --- Portfolio Slider ---
    const pfSlider = document.querySelector('.sjb-portfolio-slider');
    const pfCards = document.querySelectorAll('.sjb-portfolio-card');
    const pfDotsContainer = document.querySelector('.sjb-portfolio-dots');
    let pfCurrent = 0;
    let pfCardsPerView = 3;
    let pfAutoSlide = null;
    let pfIsHovered = false;

    function updatePfCardsPerView() {
      if(window.innerWidth <= 700) {
        pfCardsPerView = 1;
      } else if(window.innerWidth <= 900) {
        pfCardsPerView = 2;
      } else {
        pfCardsPerView = 3;
      }
    }
    function updatePfSlider() {
      const pfSliderStyles = window.getComputedStyle(pfSlider);
      const pfGap = parseInt(pfSliderStyles.gap) || 28;
      const pfCardWidth = pfCards[0].offsetWidth + pfGap;
      pfSlider.style.transform = `translateX(-${pfCurrent * pfCardWidth}px)`;
    }
    function updatePfDots() {
      pfDotsContainer.innerHTML = '';
      const total = pfCards.length - pfCardsPerView + 1;
      for(let i=0; i<total; i++) {
        const dot = document.createElement('div');
        dot.className = 'sjb-portfolio-dot' + (i === pfCurrent ? ' active' : '');
        dot.addEventListener('click', function() {
          pfCurrent = i;
          updatePfSlider();
          updatePfDots();
        });
        pfDotsContainer.appendChild(dot);
      }
    }
    function pfGoToNext() {
      if(pfCurrent < pfCards.length - pfCardsPerView) {
        pfCurrent++;
      } else {
        pfCurrent = 0;
      }
      updatePfSlider();
      updatePfDots();
    }
    function pfGoToPrev() {
      if(pfCurrent > 0) {
        pfCurrent--;
      } else {
        pfCurrent = pfCards.length - pfCardsPerView;
      }
      updatePfSlider();
      updatePfDots();
    }
    function pfStartAutoSlide() {
      if(pfAutoSlide) clearInterval(pfAutoSlide);
      pfAutoSlide = setInterval(function() {
        if(!pfIsHovered) pfGoToNext();
      }, 3000);
    }
    pfSlider.addEventListener('mouseenter', function() { pfIsHovered = true; });
    pfSlider.addEventListener('mouseleave', function() { pfIsHovered = false; });
    window.addEventListener('resize', function() {
      updatePfCardsPerView();
      if(pfCurrent > pfCards.length - pfCardsPerView) {
        pfCurrent = Math.max(0, pfCards.length - pfCardsPerView);
      }
      updatePfSlider();
      updatePfDots();
    });
    // Touch/drag support
    let pfStartX = 0, pfIsDragging = false;
    pfSlider.addEventListener('touchstart', function(e) {
      pfStartX = e.touches[0].clientX;
      pfIsDragging = true;
    });
    pfSlider.addEventListener('touchmove', function(e) {
      if(!pfIsDragging) return;
      let dx = e.touches[0].clientX - pfStartX;
      if(Math.abs(dx) > 50) {
        if(dx < 0) pfGoToNext();
        else pfGoToPrev();
        pfIsDragging = false;
      }
    });
    pfSlider.addEventListener('touchend', function() { pfIsDragging = false; });
    // Initial setup
    updatePfCardsPerView();
    updatePfSlider();
    updatePfDots();
    pfStartAutoSlide();
  });
  </script>

<script>
  // Bootstrap Dropdown initialization (if available)
  if (window.bootstrap && window.bootstrap.Dropdown) {
    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
      return new bootstrap.Dropdown(dropdownToggleEl);
    });
  }
  // Manual fallback for offcanvas dropdowns
  document.querySelectorAll('.offcanvas .dropdown-toggle').forEach(function(toggle) {
    toggle.addEventListener('click', function(e) {
      // Only for offcanvas
      if (window.innerWidth <= 992) {
        e.preventDefault();
        var parent = this.closest('.dropdown');
        parent.classList.toggle('show');
        var menu = parent.querySelector('.dropdown-menu');
        if (menu) {
          menu.classList.toggle('show');
        }
      }
    });
  });
</script>

<!-- Slider Animation  -->
<script>
    var swiper = new Swiper('.about-swiper', {
        direction: 'vertical',
        effect: 'fade',
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 1000,
    });
</script>
</body>

</html>



