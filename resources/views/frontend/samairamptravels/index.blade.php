<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira MP Travels</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/logo.png" type="image/png">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-mptravels.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

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

    <!-- Hero Section Start -->
    <section class="mptravels-hero-section">
        <!-- Navbar -->
        <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/logo.png" alt="logo">
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Products
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">All Products</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                </ul>
                <div class="nav-auth">
                <div class="nav-item signup-btn">
                    <a class="nav-link" href="#">Sign Up</a>
                </div>
                </div>
            </div>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
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
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                  </a>
                  <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Products</a></li>
                  </ul>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                </ul>
                <div class="nav-auth mt-3">
                  <div class="nav-item signup-btn">
                      <a class="nav-link" href="#">Sign Up</a>
                  </div>
                </div>
              <!-- Footer Image in Offcanvas -->
              <!-- <div class="offcanvas-footer mt-auto text-center">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/menu-bottom.png" alt="Menu Footer Image" class="img-fluid" style="max-width: 150px;">
              </div> -->
            </div>
          </div>
          <div class="container">
            <!-- Swiper Slider Start -->
            <div class="swiper mptravels-hero-swiper">
              <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                  <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                      <h1 class="hero-title">Start your journey by one click, explore beautiful world!</h1>
                      <p class="hero-desc mt-3">Plan and book your perfect trip with expert advice, travel tips, destination information and inspiration from us!</p>
                    </div>
                    <div class="col-lg-6 col-md-12 position-relative hero-img-col">
                      <div class="hero-main-img-wrap">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hero-woman.png" alt="Woman with camera" class="img-fluid hero-main-img">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Slide 2 (Example, you can duplicate and change content/images as needed) -->
                <div class="swiper-slide">
                  <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                      <h1 class="hero-title">Discover new destinations with us!</h1>
                      <p class="hero-desc mt-3">Find hidden gems and unique experiences for your next adventure. Let us guide you to the best places!</p>
                    </div>
                    <div class="col-lg-6 col-md-12 position-relative hero-img-col">
                      <div class="hero-main-img-wrap">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hero-woman.png" alt="Travel Adventure" class="img-fluid hero-main-img">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Swiper Navigation -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
            <!-- Swiper Slider End -->
          </div>
    </section>
    <!-- Hero Section End -->

    <!-- Journey Search Section Start -->
    <section class="journey-search-section py-5 mt-5">
      <div class="container">
        <h2 class="journey-title mb-4"><span class="text-dark">Your</span> <span class="text-orange">Journey</span><span class="text-dark">, Our Priority.</span></h2>
        <div class="journey-search-box rounded-4 shadow p-4 bg-light-cream">
          <ul class="nav nav-pills mb-3 journey-tabs" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="oneway-tab" data-bs-toggle="pill" data-bs-target="#oneway" type="button" role="tab">One Way</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="roundway-tab" data-bs-toggle="pill" data-bs-target="#roundway" type="button" role="tab">Round Way</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="multicity-tab" data-bs-toggle="pill" data-bs-target="#multicity" type="button" role="tab">Multi City</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="oneway" role="tabpanel">
              <form class="row g-3 align-items-end journey-form">
                <div class="col-md-2">
                  <div class="journey-input-box clickable" tabindex="0">
                    <div class="journey-label-sm text-orange mb-1">Flying from</div>
                    <div class="journey-input-content d-flex align-items-center justify-content-between">
                      <span class="journey-icon-center"><img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png" alt="Plane Departure"></span>
                      <div class="custom-dropdown w-100 position-relative">
                        <input type="text" class="journey-value-input custom-dropdown-input" placeholder="Dhaka" name="from" autocomplete="off">
                        <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1" style="z-index: 10; max-height: 220px; overflow-y: auto;">
                          <div class="custom-dropdown-option">Dhaka</div>
                          <div class="custom-dropdown-option">Chittagong</div>
                          <div class="custom-dropdown-option">Sylhet</div>
                          <div class="custom-dropdown-option">Barisal</div>
                          <div class="custom-dropdown-option">Rajshahi</div>
                          <div class="custom-dropdown-option">Singapore</div>
                          <div class="custom-dropdown-option">Kolkata</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-auto d-flex align-items-center justify-content-center">
                  <div class="swap-icon-box d-flex align-items-center justify-content-center">
                    <i class="fas fa-exchange-alt swap-icon"></i>
                  </div>
                </div> -->
                <div class="col-md-2">
                  <div class="journey-input-box clickable" tabindex="0">
                    <div class="journey-label-sm text-orange mb-1">Flying to</div>
                    <div class="journey-input-content d-flex align-items-center justify-content-between">
                      <span class="journey-icon-center"><img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png" alt="Location"></span>
                      <div class="custom-dropdown w-100 position-relative">
                        <input type="text" class="journey-value-input custom-dropdown-input" placeholder="Singapore" name="to" autocomplete="off">
                        <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1" style="z-index: 10; max-height: 220px; overflow-y: auto;">
                          <div class="custom-dropdown-option">Dhaka</div>
                          <div class="custom-dropdown-option">Chittagong</div>
                          <div class="custom-dropdown-option">Sylhet</div>
                          <div class="custom-dropdown-option">Barisal</div>
                          <div class="custom-dropdown-option">Rajshahi</div>
                          <div class="custom-dropdown-option">Singapore</div>
                          <div class="custom-dropdown-option">Kolkata</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"  tabindex="0">
                    <div class="date-mini-box flex-grow-1">
                      <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                      <div class="d-flex align-items-center">
                        <span class="journey-icon-center me-2"><i class="fas fa-calendar-alt"></i></span>
                        <input type="text" class="journey-value-input date-picker" placeholder="24 April, 2025" name="date" autocomplete="off">
                        <a href="#" class="journey-add-return ms-2">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hyperlink.png" alt="Return"> Add Return Trip
                        </a>
                    </div>
                    </div>
                    <div class="date-mini-box date-return-box flex-grow-1 d-none">
                      <div class="journey-label-sm text-orange mb-1">Return Date</div>
                      <div class="d-flex align-items-center">
                        <span class="journey-icon-center me-2"><i class="fas fa-calendar-alt"></i></span>
                        <input type="text" class="journey-value-input date-picker" placeholder="Return Date" name="return_date" autocomplete="off">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="journey-input-box clickable" tabindex="0">
                    <div class="journey-label-sm text-orange mb-1">Travelers Class</div>
                    <div class="journey-input-content d-flex align-items-center justify-content-between">
                      <span class="journey-icon-center"><i class="fas fa-user-friends"></i></span>
                      <select class="journey-value-input journey-select" name="travelers">
                        <option>1 Travelers, Economy</option>
                        <option>2 Travelers, Economy</option>
                        <option>1 Traveler, Business</option>
                        <option>2 Travelers, Business</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-1 d-flex align-items-center mt-0">
                  <button type="submit" class="btn journey-search-btn w-100"><i class="fas fa-search"></i> Search</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade show" id="roundway" role="tabpanel">
                <form class="row g-3 align-items-end journey-form">
                    <div class="col-md-2">
                      <div class="journey-input-box clickable" tabindex="0">
                        <div class="journey-label-sm text-orange mb-1">Flying from</div>
                        <div class="journey-input-content d-flex align-items-center justify-content-between">
                          <span class="journey-icon-center"><img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png" alt="Plane Departure"></span>
                          <div class="custom-dropdown w-100 position-relative">
                            <input type="text" class="journey-value-input custom-dropdown-input" placeholder="Dhaka" name="from" autocomplete="off">
                            <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1" style="z-index: 10; max-height: 220px; overflow-y: auto;">
                              <div class="custom-dropdown-option">Dhaka</div>
                              <div class="custom-dropdown-option">Chittagong</div>
                              <div class="custom-dropdown-option">Sylhet</div>
                              <div class="custom-dropdown-option">Barisal</div>
                              <div class="custom-dropdown-option">Rajshahi</div>
                              <div class="custom-dropdown-option">Singapore</div>
                              <div class="custom-dropdown-option">Kolkata</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto d-flex align-items-end justify-content-center">
                      <div class="swap-icon-box d-flex align-items-center justify-content-center">
                        <i class="fas fa-exchange-alt swap-icon"></i>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="journey-input-box clickable" tabindex="0">
                        <div class="journey-label-sm text-orange mb-1">Flying to</div>
                        <div class="journey-input-content d-flex align-items-center justify-content-between">
                          <span class="journey-icon-center"><img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png" alt="Location"></span>
                          <div class="custom-dropdown w-100 position-relative">
                            <input type="text" class="journey-value-input custom-dropdown-input" placeholder="Singapore" name="to" autocomplete="off">
                            <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1" style="z-index: 10; max-height: 220px; overflow-y: auto;">
                              <div class="custom-dropdown-option">Dhaka</div>
                              <div class="custom-dropdown-option">Chittagong</div>
                              <div class="custom-dropdown-option">Sylhet</div>
                              <div class="custom-dropdown-option">Barisal</div>
                              <div class="custom-dropdown-option">Rajshahi</div>
                              <div class="custom-dropdown-option">Singapore</div>
                              <div class="custom-dropdown-option">Kolkata</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"  tabindex="0">
                        <div class="date-mini-box flex-grow-1">
                          <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                          <div class="d-flex align-items-center">
                            <span class="journey-icon-center me-2"><i class="fas fa-calendar-alt"></i></span>
                            <input type="text" class="journey-value-input date-picker" placeholder="24 April, 2025" name="date" autocomplete="off">
                            <a href="#" class="journey-add-return ms-2">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hyperlink.png" alt="Return"> Add Return Trip
                            </a>
                        </div>
                        </div>
                        <div class="date-mini-box date-return-box flex-grow-1 d-none">
                          <div class="journey-label-sm text-orange mb-1">Return Date</div>
                          <div class="d-flex align-items-center">
                            <span class="journey-icon-center me-2"><i class="fas fa-calendar-alt"></i></span>
                            <input type="text" class="journey-value-input date-picker" placeholder="Return Date" name="return_date" autocomplete="off">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="journey-input-box clickable" tabindex="0">
                        <div class="journey-label-sm text-orange mb-1">Travelers Class</div>
                        <div class="journey-input-content d-flex align-items-center justify-content-between">
                          <span class="journey-icon-center"><i class="fas fa-user-friends"></i></span>
                          <select class="journey-value-input journey-select" name="travelers">
                            <option>1 Travelers, Economy</option>
                            <option>2 Travelers, Economy</option>
                            <option>1 Traveler, Business</option>
                            <option>2 Travelers, Business</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1 d-flex align-items-center mt-0">
                      <button type="submit" class="btn journey-search-btn w-100"><i class="fas fa-search"></i> Search</button>
                    </div>
                  </form>
            </div>
          </div>
          <div class="journey-popular-search mt-3">
            <span class="me-2 text-muted">Popular Search</span>
            <button class="btn btn-light btn-sm rounded-pill px-3 me-2">Dhaka</button>
            <button class="btn btn-light btn-sm rounded-pill px-3 me-2">Saudi Arabia</button>
            <button class="btn btn-light btn-sm rounded-pill px-3">Singapore</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Journey Search Section End -->

    <!-- Popular Destinations Section Start -->
    <section class="popular-destinations-section py-5">
      <div class="container">
        <h2 class="section-title mb-1">Popular Destinations</h2>
        <p class="section-subtitle mb-4">Vacations to make your experience enjoyable in Indonesia!</p>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="destination-card h-100">
              <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="destination-img mb-3" alt="Dhaka to Saudi Arabia">
              <div class="destination-meta mb-2"><i class="fas fa-map-marker-alt text-info me-1"></i> Dhaka</div>
              <div class="destination-title mb-1">Dhaka to Soudi Arabia</div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="destination-price text-primary">BDT 67,050</div>
                <button class="btn btn-buy-now">Buy Now</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="destination-card h-100">
              <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" class="destination-img mb-3" alt="Dhaka to Malaysia">
              <div class="destination-meta mb-2"><i class="fas fa-map-marker-alt text-info me-1"></i> Dhaka</div>
              <div class="destination-title mb-1">Dhaka to Malaysia</div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="destination-price text-primary">BDT 50,205</div>
                <button class="btn btn-buy-now">Buy Now</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="destination-card h-100">
              <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80" class="destination-img mb-3" alt="Air Tiket Pesawat">
              <div class="destination-meta mb-2"><i class="fas fa-map-marker-alt text-info me-1"></i> Jakarta</div>
              <div class="destination-title mb-1">Air Tiket Pesawat</div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="destination-price text-primary">Rp 605.000 <span class="text-muted fs-6">/person</span></div>
                <button class="btn btn-buy-now">Buy Now</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="destination-card h-100">
              <img src="https://images.unsplash.com/photo-1468421870903-4df1664ac249?auto=format&fit=crop&w=400&q=80" class="destination-img mb-3" alt="Desa Wisata Kandri">
              <div class="destination-meta mb-2"><i class="fas fa-map-marker-alt text-info me-1"></i> Kota Semarang</div>
              <div class="destination-title mb-1">Desa Wisata Kandri</div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="destination-price text-primary">Rp 1.400.000 <span class="text-muted fs-6">/person</span></div>
                <button class="btn btn-buy-now">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Destinations Section End -->

    <!-- Why Choose Us Section Start -->
    <section class="why-choose-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="why-choose-image">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/whychoose.png" alt="Why Choose Us" class="img-fluid main-image">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="why-choose-content">
              <h2 class="section-title mb-4">Why Choose Us</h2>
              <p class="section-desc mb-5">Enjoy different experiences in every place you visit and discover new and affordable adventures of course.</p>
              
              <div class="features-grid">
                <div class="feature-item active">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/flight.png" alt="Flight Ticket">
                  </div>
                  <div class="feature-content">
                    <h4>Flight Ticket</h4>
                    <p>Vitae donec pellentesque a aliquam et ultricies auctor.</p>
                  </div>
                </div>

                <div class="feature-item">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/home.png" alt="Accommodation">
                  </div>
                  <div class="feature-content">
                    <h4>Accomodation</h4>
                    <p>Vitae donec pellentesque a aliquam et ultricies auctor.</p>
                  </div>
                </div>

                <div class="feature-item">
                  <div class="feature-icon">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/bag.png" alt="Packaged Tour">
                  </div>
                  <div class="feature-content">
                    <h4>Packaged Tour</h4>
                    <p>Vitae donec pellentesque a aliquam et ultricies auctor.</p>
                  </div>
                </div>
              </div>

              <a href="#" class="btn-another-product">
                Another Product <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why Choose Us Section End -->

    <!-- Book Trip Section -->
  <section class="book-trip-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="book-trip-content">
                    <span class="section-category">Easy and Fast</span>
                    <h2 class="section-title">
                        Book Your Next Trip<br>
                        In 3 Easy Steps
                    </h2>
                    
                    <div class="booking-steps">
                        <!-- Step 1 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #F0BB1F;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon1.png" alt="Choose Destination">
                            </div>
                            <div class="step-content">
                                <h3>Choose Destination</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #F15A2B;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon2.png" alt="Make Payment">
                            </div>
                            <div class="step-content">
                                <h3>Make Payment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #006380;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon3.png" alt="Reach Airport">
                            </div>
                            <div class="step-content">
                                <h3>Reach Airport on Selected Date</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 justify-content-md-end offset-lg-1">
                <div class="trip-cards-wrapper">
                    <!-- Large Trip Card (Left) -->
                    <div class="trip-card">
                        <div class="trip-image">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/pic.jpg" alt="Trip to Greece">
                        </div>
                        <div class="trip-content">
                            <h3>Trip To Greece</h3>
                            <div class="trip-meta">
                                <span>14-29 June</span>
                                <span>by Robbin joseph</span>
                            </div>
                            
                            <div class="trip-features">
                                <span class="feature"><i class="fas fa-leaf"></i></span>
                                <span class="feature"><i class="fas fa-map"></i></span>
                                <span class="feature"><i class="fas fa-paper-plane"></i></span>
                            </div>

                            <div class="trip-footer">
                                <div class="people-going">
                                    <i class="fas fa-users"></i>
                                    <span>24 people going</span>
                                </div>
                                <button class="favorite-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Small Trip Card (Right) -->
                    <div class="ongoing-trip">
                        <div class="ongoing-trip-content">
                            <div class="ongoing-trip-icon">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/mosq.png" alt="Rome">
                            </div>
                            <div class="ongoing-trip-info">
                                <span class="status">Ongoing</span>
                                <h4>Trip to rome</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="completion">40% completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- Book Trip Section End -->

  <!-- Plan Your Vacation Section Start -->
  <section class="plan-your-vacation-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="plan-your-vacation-content">
            <!-- <h2 class="section-title font-weight-bold">Plan Your Vacation</h2>
            <p class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p> -->
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/vacation.png" alt="Plan Your Vacation" class="img-fluid">
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Plan Your Vacation Section End -->

  <!-- Subscribe Section Start-->
  <section class="subscribe-wrapper container">
    <div class="paper-plane-icon">
      <i class="fas fa-paper-plane"></i>
    </div>

    <div class="bg-left-circles"></div>
    <div class="bg-right-circles"></div>
    <div class="bg-dots"></div>

    <h2 class="subscribe-title">
      Subscribe to get information, latest news and other <br class="d-none d-md-block"/>
      interesting offers about MP Travels
    </h2>

    <form class="d-flex input-group-custom align-items-center justify-content-center position-relative gap-3 flex-wrap">
      <div class="position-relative flex-grow-1 me-2">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" class="form-control ps-5" placeholder="Your email" required>
      </div>
      <button type="submit" class="subscribe-btn">Subscribe</button>
    </form>
  </section>
  <!-- Subscribe Section End-->

  <!-- Logo and Description Column Start-->
  <div class="logo-description py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 text-center text-lg-start mb-4 mb-lg-0">
          <div class="footer-logo">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/logo.png" alt="Samaira Group Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center text-lg-start mb-3 mb-lg-0">
          <h5 class="follow-title mb-0">Follow Us</h5>
        </div>
        <div class="col-lg-4 col-md-12 text-center text-lg-start">
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Logo and Description Column End-->

  <!-- Footer Section Start -->
  <x-layouts.footer/>
  <!-- Footer Section End -->

  <!-- Bottom Footer Section Start -->
  <div class="bottom-footer py-3">
    <div class="container">
      <div class="text-left">
        <p class="mb-0">Copyright © 2025. Samaira Group</p>
      </div>
    </div>
  </div>
  <!-- Bottom Footer Section End -->

  
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

    <!-- Hero Slider Start -->
    <script>
    var heroSwiper = new Swiper('.mptravels-hero-swiper', {
        loop: true,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
        crossFade: true
        },
    });
    </script>
    <!-- Hero Slider End -->

  <!-- Flatpickr JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/flatpickr.js"></script>
  <script>
    flatpickr('.date-picker', {
      dateFormat: 'd F, Y',
      minDate: 'today',
      defaultDate: 'today',
      allowInput: true
    });

    // Show return date box on Add Return Trip click (works for both tabs)
    $('.journey-add-return').on('click', function(e) {
      e.preventDefault();
      $(this).hide();
      $(this).closest('.date-mini-box').siblings('.date-return-box').removeClass('d-none').addClass('d-block');
    });

    // Custom Dropdown Live Search for 'Flying From'
    $(document).on('input focus', '.custom-dropdown-input', function() {
      var $input = $(this);
      var $dropdown = $input.siblings('.custom-dropdown-list');
      var filter = $input.val().toLowerCase();
      $dropdown.removeClass('d-none');
      $dropdown.find('.custom-dropdown-option').each(function() {
        var text = $(this).text().toLowerCase();
        $(this).toggle(text.indexOf(filter) > -1);
      });
    });
    $(document).on('click', '.custom-dropdown-option', function() {
      var $option = $(this);
      var $input = $option.closest('.custom-dropdown').find('.custom-dropdown-input');
      $input.val($option.text());
      $option.parent().addClass('d-none');
    });
    $(document).on('click', function(e) {
      if (!$(e.target).closest('.custom-dropdown').length) {
        $('.custom-dropdown-list').addClass('d-none');
      }
    });
  </script>
</body>

</html>
