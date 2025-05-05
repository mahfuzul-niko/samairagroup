<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joypur Homes</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/logo.png" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-joypur-homes.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

   <!-- GLightbox CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

  </head>

<body>

    <!-- Top Header Section Start -->
    <x-layouts.header/>
  <!-- Top Header Section End -->


    <!-- Navbar Start -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/logo.png" alt="logo" class="logo-img">
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Home
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li><a class="dropdown-item" href="#">Services</a></li>
                        <li><a class="dropdown-item" href="#">Contact</a></li>
                    </ul>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Listings
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Listings</a></li>
                    <li><a class="dropdown-item" href="#">Featured Listings</a></li>
                    <li><a class="dropdown-item" href="#">New Listings</a></li>
                    <li><a class="dropdown-item" href="#">Popular Listings</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Members
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Members</a></li>
                    <li><a class="dropdown-item" href="#">Featured Members</a></li>
                    <li><a class="dropdown-item" href="#">New Members</a></li>
                    <li><a class="dropdown-item" href="#">Popular Members</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Blog</a></li>
                    <li><a class="dropdown-item" href="#">Featured Blog</a></li>
                    <li><a class="dropdown-item" href="#">New Blog</a></li>
                    <li><a class="dropdown-item" href="#">Popular Blog</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Pages</a></li>
                    <li><a class="dropdown-item" href="#">Featured Pages</a></li>
                    <li><a class="dropdown-item" href="#">New Pages</a></li>
                    <li><a class="dropdown-item" href="#">Popular Pages</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item ms-5 margin-right-0">
                <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i>&nbsp;+68 685 88666</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-user user-icon"></i></a>
            </li>
            </ul>
            <div class="nav-auth">
            <div class="nav-item signup-btn">
                <a class="nav-link" href="#">Add Property</a>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Home
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">Home</a></li>
                    <li><a class="dropdown-item" href="#">About</a></li>
                    <li><a class="dropdown-item" href="#">Services</a></li>
                    <li><a class="dropdown-item" href="#">Contact</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Listings
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Listings</a></li>
                    <li><a class="dropdown-item" href="#">Featured Listings</a></li>
                    <li><a class="dropdown-item" href="#">New Listings</a></li>
                    <li><a class="dropdown-item" href="#">Popular Listings</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Members
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Members</a></li>
                    <li><a class="dropdown-item" href="#">Featured Members</a></li>
                    <li><a class="dropdown-item" href="#">New Members</a></li>
                    <li><a class="dropdown-item" href="#">Popular Members</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Blog
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Blog</a></li>
                    <li><a class="dropdown-item" href="#">Featured Blog</a></li>
                    <li><a class="dropdown-item" href="#">New Blog</a></li>
                    <li><a class="dropdown-item" href="#">Popular Blog</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Pages</a></li>
                    <li><a class="dropdown-item" href="#">Featured Pages</a></li>
                    <li><a class="dropdown-item" href="#">New Pages</a></li>
                    <li><a class="dropdown-item" href="#">Popular Pages</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item ms-5 margin-right-0">
                <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i>&nbsp;+68 685 88666</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-user user-icon"></i></a>
            </li>
        </ul>
        <div class="nav-auth">
            <div class="nav-item signup-btn">
                <a class="nav-link" href="#">Add Property</a>
            </div>
            </div>
        <!-- Footer Image in Offcanvas -->
        <!-- <div class="offcanvas-footer mt-auto text-center">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/menu-bottom.png" alt="Menu Footer Image" class="img-fluid" style="max-width: 150px;">
        </div> -->
        </div>
    </div>
    <!-- Mobile Navbar End -->

    <!-- Navbar End -->

    <!-- Hero/Property Search Section Start -->
   <section class="joypur-hero-section">
        <div class="container joypur-hero-container">
        <div class="joypur-hero-left">
            <p class="joypur-hero-offer">From as low as $10 per day with limited time offer discounts.</p>
            <h1 class="joypur-hero-title">Your <span>Property</span>, Our Priority.</h1>
            <div class="joypur-search-form-overlap-wrapper">
            <form class="joypur-search-form">
                <div class="joypur-search-group min-width-250">
                <label class="joypur-search-label">Keyword</label>
                <div class="joypur-search-input">
                    <input type="text" placeholder="Enter Keyword" />
                    <span class="joypur-search-icon"><a href="#" class="text-dark"><i class="fa fa-search"></i></a></span>
                </div>
                </div>
                <div class="joypur-search-divider"></div>
                <div class="joypur-search-group">
                <label class="joypur-search-label">Status</label>
                <div class="joypur-custom-dropdown joypur-search-status-dropdown">
                    <input type="text" class="joypur-custom-dropdown-input" placeholder="All Status" data-bs-toggle="dropdown" />
                    <span class="joypur-dropdown-arrow">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="5,7 13,7 9,12" fill="#222"/>
                    </svg>
                    </span>
                    <div class="joypur-custom-dropdown-list d-none">
                    <div class="joypur-custom-dropdown-option">All Status</div>
                    <div class="joypur-custom-dropdown-option">For Sale</div>
                    <div class="joypur-custom-dropdown-option">For Rent</div>
                    </div>
                </div>
                </div>
                <div class="joypur-search-divider"></div>
                <div class="joypur-search-group">
                <label class="joypur-search-label">Type</label>
                <div class="joypur-custom-dropdown joypur-search-type-dropdown">
                    <input type="text" class="joypur-custom-dropdown-input" placeholder="All Type" data-bs-toggle="dropdown" />
                    <span class="joypur-dropdown-arrow">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="5,7 13,7 9,12" fill="#222"/>
                    </svg>
                    </span>
                    <div class="joypur-custom-dropdown-list d-none">
                    <div class="joypur-custom-dropdown-option">All Type</div>
                    <div class="joypur-custom-dropdown-option">Modern Villa</div>
                    <div class="joypur-custom-dropdown-option">Studio Apartment</div>
                    <div class="joypur-custom-dropdown-option">Town House</div>
                    </div>
                </div>
                </div>
                <div class="joypur-search-divider"></div>
                <div class="joypur-search-group joypur-search-filter-group">
                <label class="joypur-search-label">Filter</label>
                <input type="text" class="joypur-search-filter-input" placeholder="" />
                </div>
                <button type="submit" class="joypur-search-btn">Search</button>
            </form>
            </div>
            <div class="joypur-popular-search mt-5">
            <span>Popular Search</span>
            <button type="button">Modern Villa</button>
            <button type="button">Studio Apartment</button>
            <button type="button">Town House</button>
            </div>
        </div>
        <div class="joypur-hero-right">
            <div class="joypur-hero-collage">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/bg.png" alt="Property 1" class="joypur-collage-img main-img" />
            <div class="joypur-collage-agents">
                <div class="joypur-agents-imgs">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser1.png" alt="Agent 1" />
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser2.png" alt="Agent 2" />
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser3.png" alt="Agent 3" />
                </div>
                <div class="joypur-agents-text">
                <span class="agents-count">1000K+</span>
                <span class="agents-label">Exclusive Agents</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Hero/Property Search Section End -->

    <!-- Find Properties in These Cities Section Start -->
    <section class="joypur-cities-section py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
          <div>
            <h2 class="joypur-cities-title mb-1">Find Properties in These Cities</h2>
            <div class="joypur-cities-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
          <a href="#" class="joypur-cities-viewall d-inline-flex align-items-center fw-semibold">
            View All Cities <span class="ms-1 joypur-cities-arrow">&#8594;</span>
          </a>
        </div>
        <div class="row justify-content-center g-3 mt-4">
          <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="text-decoration-none">
                <div class="joypur-city-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/city1.png" alt="New York" class="joypur-city-img">
                    <div>
                      <div class="joypur-city-name">New York</div>
                      <div class="joypur-city-count">8 Properties</div>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="text-decoration-none">
                <div class="joypur-city-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/city1.png" alt="New York" class="joypur-city-img">
                    <div>
                      <div class="joypur-city-name">New York</div>
                      <div class="joypur-city-count">8 Properties</div>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="text-decoration-none">
                <div class="joypur-city-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/city2.png" alt="New York" class="joypur-city-img">
                    <div>
                      <div class="joypur-city-name">New York</div>
                      <div class="joypur-city-count">8 Properties</div>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="text-decoration-none">
                <div class="joypur-city-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/city1.png" alt="New York" class="joypur-city-img">
                    <div>
                      <div class="joypur-city-name">New York</div>
                      <div class="joypur-city-count">8 Properties</div>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="text-decoration-none">
                <div class="joypur-city-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/city2.png" alt="New York" class="joypur-city-img">
                    <div>
                      <div class="joypur-city-name">New York</div>
                      <div class="joypur-city-count">8 Properties</div>
                    </div>
                </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Find Properties in These Cities Section End -->

    <!-- Featured Properties Section Start -->
    <section class="joypur-featured-properties-section py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <div>
            <h2 class="joypur-featured-title mb-1">Featured Properties</h2>
            <div class="joypur-featured-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
          <div class="joypur-featured-tabs">
            <button class="joypur-featured-tab active" data-filter="all">All Properties</button>
            <button class="joypur-featured-tab" data-filter="sale">For Sale</button>
            <button class="joypur-featured-tab" data-filter="rent">For Rent</button>
          </div>
        </div>
        <div class="row joypur-featured-cards g-4 mt-2">
          <!-- Property Card 1 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="sale">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/1.png" alt="Luxury Family Home" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-sale">For Sale</span>
                  <span class="badge badge-featured">Featured</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">Luxury Family Home</div>
                  <div class="property-price text-sale">$395,000</div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 1800-1818 79th St</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 1 Baths</span>
                  <span><i class="fa fa-expand"></i> 400 sqft</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Property Card 2 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="sale">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/2.png" alt="Skyper Pool Apartment" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-sale">For Sale</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">Skyper Pool Apartment</div>
                  <div class="property-price text-sale">$280,000</div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 1020 Bloomingdale Ave</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 2 Baths</span>
                  <span><i class="fa fa-expand"></i> 450 sqft</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Property Card 3 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="rent">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/3.png" alt="North Dillard Street" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-rent">For Rent</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">North Dillard Street</div>
                  <div class="property-price text-rent">$250,000<span class="property-price-unit">/month</span></div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 4330 Bell Shoals Rd</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 2 Baths</span>
                  <span><i class="fa fa-expand"></i> 400 sqft</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Property Card 4 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="sale">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/1.png" alt="Eaton Garth Penthouse" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-sale">For Sale</span>
                  <span class="badge badge-featured">Featured</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">Eaton Garth Penthouse</div>
                  <div class="property-price text-sale">$180,000</div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 7722 18th Ave, Brooklyn</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 2 Baths</span>
                  <span><i class="fa fa-expand"></i> 450 sqft</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Property Card 5 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="rent">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/2.png" alt="New Apartment Nice View" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-rent">For Rent</span>
                  <span class="badge badge-featured">Featured</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">New Apartment Nice View</div>
                  <div class="property-price text-rent">$850,000<span class="property-price-unit">/month</span></div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 42 Avenue 0, Brooklyn</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 1 Baths</span>
                  <span><i class="fa fa-expand"></i> 460 sqft</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Property Card 6 -->
          <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="sale">
            <div class="property-card">
              <div class="property-img-wrapper">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/3.png" alt="Diamond Manor Apartment" class="property-img">
                <div class="property-badges">
                  <span class="badge badge-sale">For Sale</span>
                  <span class="badge badge-featured">Featured</span>
                </div>
              </div>
              <div class="property-body">
                <div class="property-title-price-row">
                  <div class="property-title">Diamond Manor Apartment</div>
                  <div class="property-price text-sale">$259,000</div>
                </div>
                <div class="property-address"><i class="fa fa-map-marker-alt"></i> 7802 20th Ave, Brooklyn</div>
                <div class="property-meta">
                  <span><i class="fa fa-bed"></i> 4 Beds</span>
                  <span><i class="fa fa-bath"></i> 2 Baths</span>
                  <span><i class="fa fa-expand"></i> 500 sqft</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Properties Section End -->

    <!-- How It Works Section Start -->
    <section class="joypur-howitworks-section py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="howitworks-title mb-2">How It works? Find a perfect home</h2>
          <div class="howitworks-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="row justify-content-center text-center g-4">
          <div class="col-md-4">
            <div class="howitworks-step">
              <div class="howitworks-icon mb-3 mx-auto">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon.png" alt="Find Real Estate" class="howitworks-icon-img">
              </div>
              <div class="howitworks-step-title">Find Real Estate</div>
              <div class="howitworks-step-desc">Sumo petentium ut per, at his wisiim utinam adipiscing. Est ei graeco</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="howitworks-step">
              <div class="howitworks-icon mb-3 mx-auto">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon1.png" alt="Meet Relator" class="howitworks-icon-img">
              </div>
              <div class="howitworks-step-title">Meet Relator</div>
              <div class="howitworks-step-desc">Sumo petentium ut per, at his wisiim utinam adipiscing. Est ei graeco</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="howitworks-step">
              <div class="howitworks-icon mb-3 mx-auto">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/Icon2.png" alt="Take The Keys" class="howitworks-icon-img">
              </div>
              <div class="howitworks-step-title">Take The Keys</div>
              <div class="howitworks-step-desc">Sumo petentium ut per, at his wisiim utinam adipiscing. Est ei graeco</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Why You Should Work With Us Section Start -->
    <section class="joypur-whywork-section py-5 my-5">
      <div class="container whywork-flex mb-5 pb-3">
        <!-- Left Images/Stats -->
        <div class="col-lg-6 d-flex justify-content-center align-items-center position-relative mb-5 mb-lg-0">
          <div class="whywork-img-stack position-relative">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/why1.png" alt="Happy Family" class="whywork-img-rect" />
            <div class="whywork-img-arch-wrap">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/why2.png" alt="Modern House" class="whywork-img-arch" />
              <div class="whywork-stats-card">
                <i class="fa fa-home home-icon"></i>
                <div class="whywork-stats-label">Properties For Sale</div>
                <div class="whywork-stats-value">14K</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Content -->
        <div class="whywork-content">
          <h2>Why You Should Work With Us</h2>
          <p class="whywork-desc">
            Pellentesque egestas elementum egestas faucibus sem. Velit nunc egestas ut morbi. Leo diam diam.
          </p>
          <div class="whywork-features">
            <div><span class="whywork-check"><i class="fa fa-check"></i></span> 100% Secure</div>
            <div><span class="whywork-check"><i class="fa fa-check"></i></span> Wide Range of Properties</div>
            <div><span class="whywork-check"><i class="fa fa-check"></i></span> Buy or Rent Homes</div>
            <div><span class="whywork-check"><i class="fa fa-check"></i></span> Trusted by Thousands</div>
          </div>
          <a href="#" class="whywork-btn">Learn More <span>&#8594;</span></a>
        </div>
      </div>
    </section>
    <!-- Why You Should Work With Us Section End -->

    <!-- Featured Categories Section Start -->
    <section class="joypur-featured-categories-section py-5">
      <div class="container">
        <div class="featured-categories-bg p-5 rounded-4">
          <div class="d-flex justify-content-between align-items-start flex-wrap mb-4">
            <div>
              <h2 class="text-white mb-2">Featured Categories</h2>
              <div class="text-white-50 mb-0">Lorem ipsum dolor sit amet</div>
            </div>
            <a href="#" class="featured-categories-link text-white-50 d-inline-flex align-items-center ms-auto">
              View All Categories <span class="ms-1">&#8594;</span>
            </a>
          </div>
          <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon1.png" alt="Town House" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Town House</div>
                <div class="text-muted small">2 Properties</div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon2.png" alt="Modern Villa" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Modern Villa</div>
                <div class="text-muted small">10 Properties</div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon3.png" alt="Apartment" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Apartment</div>
                <div class="text-muted small">3 Properties</div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon4.png" alt="Office" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Office</div>
                <div class="text-muted small">3 Properties</div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon5.png" alt="Single Family" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Single Family</div>
                <div class="text-muted small">5 Properties</div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="featured-category-card text-center p-4 rounded-3 bg-white h-100">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/caticon5.png" alt="Single Family" class="mb-3" height="48">
                <div class="fw-semibold mb-1">Single Family</div>
                <div class="text-muted small">5 Properties</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Categories Section End -->

    <!-- Why Work With Us Modern Section Start -->
    <section class="joypur-whywork-modern-section py-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <!-- Left Content -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h2 class="whywork-modern-title mb-3">Why You Should Work With Us</h2>
            <p class="whywork-modern-desc mb-4">
              Pellentesque egestas elementum egestas faucibus sem. Velit nunc egestas ut morbi. Leo diam diam nibh eget fermentum massa pretium. Mi mauris nulla ac dictum ut mauris non.
            </p>
            <div class="row mb-4">
              <div class="col-12 col-md-6 mb-3 mb-md-0">
                <h6 class="fw-bold mb-2">Buy or Rent Homes</h6>
                <p class="text-muted whywork-modern-desc">We sell your home at the best market price and very quickly as well.</p>
              </div>
              <div class="col-12 col-md-6">
                <h6 class="fw-bold mb-2">Trusted by Thousands</h6>
                <p class="text-muted whywork-modern-desc">We offer you free consultancy to get a loan for your new home.</p>
              </div>
            </div>
            <a href="#" class="btn btn-warning px-4 py-2 rounded-3 fw-semibold whywork-modern-btn">
              Learn More <span class="ms-1">&#8594;</span>
            </a>
          </div>
          <!-- Right Image -->
          <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="whywork-modern-img-wrap position-relative">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/why-modern.png" alt="Modern House" class="whywork-modern-img rounded-4">
              <!-- <div class="whywork-modern-stats-card position-absolute">
                <div class="d-flex align-items-center gap-2">
                  <span class="whywork-modern-stats-icon"><i class="fa fa-users"></i></span>
                  <div>
                    <div class="whywork-modern-stats-label">Total Clients</div>
                    <div class="whywork-modern-stats-value">7,000 M</div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why Work With Us Modern Section End -->

    <!-- Testimonial Slider Section Start -->
    <section class="joypur-testimonial-section py-5">
      <div class="container">
        <div class="testimonial-bg rounded-4 p-5">
          <div class="row align-items-center justify-content-center">
            <!-- Left: Video -->
            <div class="col-lg-5 d-flex justify-content-center mb-4 mb-lg-0">
              <div class="testimonial-video-wrap position-relative">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/testimonial-thumb.png" alt="Testimonial Video" class="testimonial-video-img rounded-3">
                <a href="#" class="testimonial-play-btn position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#testimonialVideoModal">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <!-- Right: Slider -->
            <div class="col-lg-7">
              <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                    <div class="testimonial-quote-row d-flex align-items-center mb-3">
                      <div class="testimonial-quote-icon rounded-3 me-3"><i class="fa fa-quote-left"></i></div>
                      <div>
                        <div class="testimonial-name fw-semibold">Cameron Williamson</div>
                        <div class="testimonial-role text-muted small">Designer</div>
                      </div>
                    </div>
                    <div class="testimonial-text mb-4">
                      Searches for multiplexes, property comparisons, and the loan estimator. Works great. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dores.
                    </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="swiper-slide">
                    <div class="testimonial-quote-row d-flex align-items-center mb-3">
                      <div class="testimonial-quote-icon rounded-3 me-3"><i class="fa fa-quote-left"></i></div>
                      <div>
                        <div class="testimonial-name fw-semibold">Sarah Johnson</div>
                        <div class="testimonial-role text-muted small">Homeowner</div>
                      </div>
                    </div>
                    <div class="testimonial-text mb-4">
                      Found my dream home through this platform. The process was smooth and the support team was amazing. Highly recommend their services to anyone looking for a property.
                    </div>
                  </div>
                  <!-- Slide 3 -->
                  <div class="swiper-slide">
                    <div class="testimonial-quote-row d-flex align-items-center mb-3">
                      <div class="testimonial-quote-icon rounded-3 me-3"><i class="fa fa-quote-left"></i></div>
                      <div>
                        <div class="testimonial-name fw-semibold">Michael Brown</div>
                        <div class="testimonial-role text-muted small">Investor</div>
                      </div>
                    </div>
                    <div class="testimonial-text mb-4">
                      As a real estate investor, I've used many platforms, but this one stands out. The property listings are comprehensive and the search filters are very helpful.
                    </div>
                  </div>
                  <!-- Slide 4 -->
                  <div class="swiper-slide">
                    <div class="testimonial-quote-row d-flex align-items-center mb-3">
                      <div class="testimonial-quote-icon rounded-3 me-3"><i class="fa fa-quote-left"></i></div>
                      <div>
                        <div class="testimonial-name fw-semibold">Cameron Williamson</div>
                        <div class="testimonial-role text-muted small">Designer</div>
                      </div>
                    </div>
                    <div class="testimonial-text mb-4">
                      Searches for multiplexes, property comparisons, and the loan estimator. Works great. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dores.
                    </div>
                  </div>
                  <!-- Slide 5 -->
                  <div class="swiper-slide">
                    <div class="testimonial-quote-row d-flex align-items-center mb-3">
                      <div class="testimonial-quote-icon rounded-3 me-3"><i class="fa fa-quote-left"></i></div>
                      <div>
                        <div class="testimonial-name fw-semibold">Cameron Williamson</div>
                        <div class="testimonial-role text-muted small">Designer</div>
                      </div>
                    </div>
                    <div class="testimonial-text mb-4">
                      Searches for multiplexes, property comparisons, and the loan estimator. Works great. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dores.
                    </div>
                  </div>
                </div>
                <!-- Pagination -->
                <div class="testimonial-pagination d-flex align-items-center gap-2 mt-4">
                  <span class="testimonial-page-num testimonial-current">1</span>
                  <div class="testimonial-progress-stepper flex-grow-1 position-relative d-flex align-items-center justify-content-between mx-2">
                    <div class="stepper-line"></div>
                    <!-- Steps will be injected by JS -->
                  </div>
                  <span class="testimonial-page-num testimonial-total"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Video Modal -->
      <div class="modal fade" id="testimonialVideoModal" tabindex="-1" aria-labelledby="testimonialVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
              <div class="ratio ratio-16x9">
                <video src="{{ asset('assets/frontassets/') }}/images/samaira-joypur-homes/samaira-testimonial.mp4" controls loop></video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Slider Section End -->

    <!-- Blog Section Start-->
  <div class="container py-5 blog text-center">
    <div class="blog-title">
      <h2>Recent Articles & News</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row g-4 mt-3">
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <div class="meta mb-2">Apartment • March 19, 2024</div>
            <h5 class="card-title mb-3">Housing Markets That Changed
              the Most This Week</h5>
            <a href="#" class="read-more mt-auto">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <div class="meta mb-2">Apartment • March 19, 2024</div>
            <h5 class="card-title mb-3">Read Unveils the Best Canadian
              Cities for Biking</h5>
            <a href="#" class="read-more mt-auto">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <div class="meta mb-2">Apartment • March 19, 2024</div>
            <h5 class="card-title mb-3">10 Walkable Cities Where You Can
              Live Affordably</h5>
            <a href="#" class="read-more mt-auto">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <div class="meta mb-2">Apartment • March 19, 2024</div>
            <h5 class="card-title mb-3">New Apartment Nice in the Best
              Canadian Cities</h5>
            <a href="#" class="read-more mt-auto">Read More &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Section End-->

  <!-- Our Sister Concern Section Start-->
  <section class="sister-concern py-5 mt-5">
    <div class="container text-center">
      <h3 class="mb-4">Thousands of world’s leading companies trust Space</h3>
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
  <!-- Our Sister Concern Section End-->

  <!-- Become a Real Estate Agent Section Start -->
  <section class="joypur-featured-categories-section become-real-estate-agent py-5">
    <div class="container">
      <div class="featured-categories-bg p-5 rounded-4">
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-4">
          <div>
            <h2 class="text-white mb-2">Become a Real Estate Agent</h2>
            <div class="text-white-50 mb-0">We only work with the best companies around the globe</div>
          </div>
          <a href="#" class="featured-categories-link text-white-50 d-inline-flex align-items-center ms-auto">
            Sign in or create an account <span class="ms-1">&#8594;</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Become a Real Estate Agent Section End -->

    <!-- Logo and Description Column Start-->
   <div class="logo-description py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 text-center text-lg-start mb-4 mb-lg-0">
          <div class="footer-logo">
            <img src="{{ asset('assets/frontassets/') }}/images/logo.png" alt="Samaira Group Logo" class="img-fluid">
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
  <!-- Footer Section Start -->

   
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

    <!-- Lightsearch Dropdown Script -->
    <script>
      // Live search dropdown for Status and Type (same as Flying From/To in samaira-mptravels.html)
      $(document).on('input focus', '.joypur-custom-dropdown-input', function() {
        var $input = $(this);
        var $dropdown = $input.siblings('.joypur-custom-dropdown-list');
        var filter = $input.val().toLowerCase();
        $dropdown.removeClass('d-none');
        $dropdown.find('.joypur-custom-dropdown-option').each(function() {
          var text = $(this).text().toLowerCase();
          $(this).toggle(text.indexOf(filter) > -1);
        });
      });
      $(document).on('click', '.joypur-custom-dropdown-option', function() {
        var $option = $(this);
        var $input = $option.closest('.joypur-custom-dropdown').find('.joypur-custom-dropdown-input');
        $input.val($option.text());
        $option.parent().addClass('d-none');
      });
      $(document).on('click', function(e) {
        if (!$(e.target).closest('.joypur-custom-dropdown').length) {
          $('.joypur-custom-dropdown-list').addClass('d-none');
        }
      });
    </script>
    <script>
      // Featured Properties Tab Filtering
      $(document).on('click', '.joypur-featured-tab', function() {
        var filter = $(this).data('filter');
        $('.joypur-featured-tab').removeClass('active');
        $(this).addClass('active');
        if (filter === 'all') {
          $('.joypur-featured-card').show();
        } else {
          $('.joypur-featured-card').each(function() {
            var status = $(this).data('status');
            if (status === filter) {
              $(this).show();
            } else {
              $(this).hide();
            }
          });
        }
      });
    </script>
    <!-- Testimonial Slider Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Dynamically render the stepper based on the number of real slides
        function renderTestimonialStepper() {
          var swiperSlides = document.querySelectorAll('.testimonial-swiper .swiper-wrapper .swiper-slide:not(.swiper-slide-duplicate)');
          var stepper = document.querySelector('.testimonial-progress-stepper');
          var totalNum = document.querySelector('.testimonial-pagination .testimonial-total');
          if (!stepper) return;
          // Remove old steps
          stepper.querySelectorAll('.testimonial-progress-step').forEach(e => e.remove());
          // Add new steps
          for (let i = 0; i < swiperSlides.length; i++) {
            let step = document.createElement('div');
            step.className = 'testimonial-progress-step';
            stepper.appendChild(step);
          }
          // Set total number dynamically
          if (totalNum) totalNum.textContent = swiperSlides.length;
        }

        renderTestimonialStepper();

        var testimonialSwiper = new Swiper('.testimonial-swiper', {
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          },
          slidesPerView: 1,
          allowTouchMove: true,
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
          on: {
            init: function() {
              updatePagination(this);
            },
            slideChange: function() {
              updatePagination(this);
            }
          }
        });

        function updatePagination(swiper) {
          var steps = document.querySelectorAll('.testimonial-progress-step');
          var total = steps.length;
          var current = swiper.realIndex + 1;
          var currentNum = document.querySelector('.testimonial-pagination .testimonial-current');
          var totalNum = document.querySelector('.testimonial-pagination .testimonial-total');
          if (currentNum) currentNum.textContent = current;
          if (totalNum) totalNum.textContent = total;
          // Stepper logic
          steps.forEach((step, idx) => {
            if (idx === swiper.realIndex) {
              step.classList.add('active');
            } else {
              step.classList.remove('active');
            }
          });
        }
      });
    </script>
</body>

</html>
