<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emerging Office Supplies Limited</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-emerging/logo.jpg" type="image/png">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-emerging.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

   <!-- GLightbox CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

  <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/flatpickr.min.css">
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

  <!-- Hero Slider Section Start -->
  <section class="hero-slider content-margin-top">
    <div class="swiper hero-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="slide-bg">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/back.png" alt="Medica">
          </div>
          <div class="container">
            <div class="hero-content">
              <span class="welcome-text">Get Enrolled in our Health program</span>
              <h1>Looking for Samaira Medica !</h1>
              <p>More than 20 million Americans have already enrolled for Obamacare. Join
                them now and enjoy a quality healthcare facility, irrespective of your income.</p>
              <a href="#" class="discover-btn">Get me Enrolled</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="slide-bg">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/bg.png" alt="Medica">
          </div>
          <div class="container">
            <div class="hero-content">
              <span class="welcome-text">Get Enrolled in our Health program</span>
              <h1>Looking for Samaira Medica !</h1>
              <p>More than 20 million Americans have already enrolled for Obamacare. Join
                them now and enjoy a quality healthcare facility, irrespective of your income.</p>
              <a href="#" class="discover-btn">Get me Enrolled</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="slide-bg">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/bg.png" alt="Medica">
          </div>
          <div class="container">
            <div class="hero-content">
              <span class="welcome-text">Get Enrolled in our Health program</span>
              <h1>Looking for Samaira Medica !</h1>
              <p>More than 20 million Americans have already enrolled for Obamacare. Join
                them now and enjoy a quality healthcare facility, irrespective of your income.</p>
              <a href="#" class="discover-btn">Get me Enrolled</a>
            </div>
          </div>
        </div>

      <!-- Slider Navigation -->
      <div class="slider-nav">
        <button class="nav-button active" data-slide="0">
          <span class="nav-circle"></span>
        </button>
        <button class="nav-button" data-slide="1">
          <span class="nav-circle"></span>
        </button>
        <button class="nav-button" data-slide="2">
          <span class="nav-circle"></span>
        </button>
      </div>
    </div>
  </section>
  <!-- Hero Slider Section End -->

  <!-- Features Section Start -->
  <section class="features-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="feature-item d-flex align-items-center">
            <div class="feature-icon me-3">
              <i class="fas fa-truck-fast"></i>
            </div>
            <div>
              <h5 class="feature-title mb-1">Free Shipping</h5>
              <p class="feature-text mb-0">Enjoy the free shipping month for all our latest products</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="feature-item d-flex align-items-center">
            <div class="feature-icon me-3">
              <i class="fas fa-lock"></i>
            </div>
            <div>
              <h5 class="feature-title mb-1">Secure Payment</h5>
              <p class="feature-text mb-0">Complete your payment with trusted partners</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="feature-item d-flex align-items-center">
            <div class="feature-icon me-3">
              <i class="fas fa-rotate-left"></i>
            </div>
            <div>
              <h5 class="feature-title mb-1">Return Policy</h5>
              <p class="feature-text mb-0">A 14 day return policy for our special offer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="feature-item d-flex align-items-center">
            <div class="feature-icon me-3">
              <i class="fas fa-certificate"></i>
            </div>
            <div>
              <h5 class="feature-title mb-1">Certified Original Seller</h5>
              <p class="feature-text mb-0">Trusted sources who can bring you the product you need</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Section End -->

  <!-- Category Slider Section Start -->
  <section class="category-slider-section py-5">
    <div class="container">
      <div class="category-slider-header d-flex justify-content-between align-items-center mb-4 position-relative">
        <div>
          <span class="category-label">Categories</span>
          <h2 class="category-title">Browse By Category</h2>
        </div>
        <div class="category-slider-nav">
          <button class="category-swiper-prev"><i class="fas fa-arrow-left"></i></button>
          <button class="category-swiper-next"><i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
      <div class="swiper category-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-user-nurse category-icon"></i>
                <div class="category-name">oparation</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-cut category-icon"></i>
                <div class="category-name">Surgical</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-head-side-mask category-icon"></i>
                <div class="category-name">Mask</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-heartbeat category-icon"></i>
                <div class="category-name">Cardiology</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-vials category-icon"></i>
                <div class="category-name">Pathology</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
              <i class="fas fa-hospital category-icon"></i>
              <div class="category-name">Hospital</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="text-decoration-none">
              <div class="category-card">
                <i class="fas fa-hospital category-icon"></i>
                <div class="category-name">Hospital</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Category Slider Section End -->

  <!-- Best Selling Products Section Start -->
  <section class="best-selling-products py-5">
    <div class="container">
      <div class="category-slider-header d-flex justify-content-between align-items-center mb-4">
        <div>
          <span class="category-label fw-semibold">This Month</span>
          <h2 class="category-title">Best Selling Products</h2>
        </div>
      </div>
      <div class="row">
        <!-- Product Card Start -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="product-card">
              <div class="product-img position-relative">
                <span class="product-badge">NEW</span>
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                <!-- <div class="card-icons">
                  <a href="#"><i class="far fa-heart"></i></a>
                  <a href="#"><i class="far fa-eye"></i></a>
                </div> -->
                <a href="facebook.com" class="add-to-cart-btn">Add to Cart</a>
              </div>
              <div class="product-info">
                <a href="" class="text-decoration-none text-dark"><h4 class="product-title">do you know about this product? The north coat The north coat The north coat The north coat The north coat The north coatThe north coat The north coat The north coat The north coat The north coat</h4></a>
                <div class="price">
                  <span class="new-price">$260</span>
                  <span class="old-price">$360</span>
                </div>
                <a href="twitter.com" class="buy-now-btn">Buy Now</a>
              </div>
            </div>
        </div>
      </div>
      <a href="#" class="view-all-btn">View All Products</a>
    </div>
  </section>
  <!-- Best Selling Products Section End -->

  <!-- Featured Section Start -->
  <section class="featured-section py-5">
    <div class="container">
      <div class="section-header mb-4">
        <span class="featured-label">Featured</span>
        <h2 class="featured-title">New Arrival</h2>
      </div>
      <div class="featured-grid">
        <!-- Large Left -->
        <div class="featured-item featured-large" style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f1.png');">
          <div class="featured-content">
            <h3 class="featured-name">Surgical Equipment</h3>
            <p class="featured-desc">Black and White version of coming out on sale.</p>
            <a href="#" class="featured-btn mt-3">Shop Now</a>
          </div>
        </div>
        <!-- Top Right -->
        <div class="featured-item featured-medium" style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f2.jpg');">
          <div class="featured-content">
            <h3 class="featured-name">Women’s Collections</h3>
            <p class="featured-desc">Featured woman collections that give you another vibe.</p>
            <a href="#" class="featured-btn mt-3">Shop Now</a>
          </div>
        </div>
        <!-- Bottom Right 1 -->
        <div class="featured-item featured-small" style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f4.png');">
          <div class="featured-content">
            <h3 class="featured-name">Speakers</h3>
            <p class="featured-desc">Amazon wireless speakers</p>
            <a href="#" class="featured-btn mt-3">Shop Now</a>
          </div>
        </div>
        <!-- Bottom Right 2 -->
        <div class="featured-item featured-small" style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f4.png');">
          <div class="featured-content">
            <h3 class="featured-name">Gucci Perfume</h3>
            <a href="#" class="featured-btn mt-3">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Featured Section End -->

  

  <!-- Testimonials Section Start -->
  <section class="testimonials-section">
    <div class="container">
        <div class="text-center mb-3 margin-bottom-100">
            <h2 class="section-title">What Our Customers Say</h2>
        </div>

        <!-- Testimonial Slider -->
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser1.png" alt="Orlando Diggs" class="author-image">
                            <div class="author-info">
                                <h4>Orlando Diggs</h4>
                                <p>Position, Company name</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser2.png" alt="Mollie Hall" class="author-image">
                            <div class="author-info">
                                <h4>Mollie Hall</h4>
                                <p>Position, Company name</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser3.png" alt="Lori Bryson" class="author-image">
                            <div class="author-info">
                                <h4>Lori Bryson</h4>
                                <p>Position, Company name</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser1.png" alt="Lori Bryson" class="author-image">
                            <div class="author-info">
                                <h4>Lori Bryson</h4>
                                <p>Position, Company name</p>
                            </div>
                        </div>
                    </div>
                </div>
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
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

  
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

    <!-- Swiper Category Slider Init -->
    <script>
      var categorySwiper = new Swiper('.category-swiper', {
        slidesPerView: 6,
        spaceBetween: 24,
        navigation: {
          nextEl: '.category-swiper-next',
          prevEl: '.category-swiper-prev',
        },
        breakpoints: {
          1200: { slidesPerView: 6 },
          992: { slidesPerView: 4 },
          768: { slidesPerView: 3 },
          480: { slidesPerView: 2 },
          0: { slidesPerView: 1 }
        }
      });
    </script>

    <!-- Hero Slider Init -->
    <script>
      // Initialize Swiper
      var heroSwiper = new Swiper('.hero-swiper', {
        speed: 1000,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        }
      });
  
      // Custom Navigation
      const navButtons = document.querySelectorAll('.nav-button');
  
      // Update active button
      function updateActiveButton(index) {
        navButtons.forEach(button => button.classList.remove('active'));
        navButtons[index].classList.add('active');
      }
  
      // Initial active state
      updateActiveButton(0);
  
      // Add click handlers
      navButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
          heroSwiper.slideTo(index);
          updateActiveButton(index);
        });
      });
  
      // Update buttons on slide change
      heroSwiper.on('slideChange', function() {
        updateActiveButton(heroSwiper.realIndex);
      });
    </script>

    <!-- Best Selling Products Section Init -->
     <script>
        var bestSellingSwiper = new Swiper('.best-selling-swiper', {
        slidesPerView: 4,
        spaceBetween: 24,
        navigation: {
          nextEl: '.best-selling-next',
          prevEl: '.best-selling-prev',
        },
        breakpoints: {
          1200: { slidesPerView: 4 },
          992: { slidesPerView: 3 },
          768: { slidesPerView: 2 },
          0: { slidesPerView: 1 }
        },
        on: {
          init: function () {
            toggleBestSellingNav(this);
          },
          slideChange: function () {
            toggleBestSellingNav(this);
          },
          resize: function () {
            toggleBestSellingNav(this);
          }
        }
      });

      function toggleBestSellingNav(swiper) {
        var totalSlides = swiper.slides.length;
        var slidesPerView = swiper.params.slidesPerView;
        // Responsive: slidesPerView can be 'auto' or number
        if (swiper.params.breakpoints) {
          var ww = window.innerWidth;
          var bp = swiper.params.breakpoints;
          if (ww >= 1200 && bp[1200]) slidesPerView = bp[1200].slidesPerView;
          else if (ww >= 992 && bp[992]) slidesPerView = bp[992].slidesPerView;
          else if (ww >= 768 && bp[768]) slidesPerView = bp[768].slidesPerView;
          else if (bp[0]) slidesPerView = bp[0].slidesPerView;
        }
        var nav = document.querySelector('.best-selling-nav');
        if (nav) {
          if (totalSlides > slidesPerView) {
            nav.style.display = 'flex';
          } else {
            nav.style.display = 'none';
          }
        }
      }
     </script>

     <!-- Testimonials Section Init -->
      <script>
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
      </script>
</body>

</html>
