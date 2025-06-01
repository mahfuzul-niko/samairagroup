<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop | Samaira Medica Limited</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-medica/logo.png" type="image/png">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-medica.css" rel="stylesheet">
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
    

  <!-- Category & Product Section Start -->
  <section class="category-product-section py-5 content-margin-top" style="border-top: 1px solid #dddddd3f;">
    <div class="container">
      <div class="row">
        <!-- Category Tabs (Left) -->
        <div class="col-lg-3 mb-4 mb-lg-0">
          <div class="category-tabs nav flex-column" id="categoryTab" role="tablist" aria-orientation="vertical">
            <div class="category-title">Category</div>
            <span class="category-title-underline"></span>
            <button class="nav-link active" data-category="all" type="button">Food (1)</button>
            <button class="nav-link" data-category="books" type="button">Books (1)</button>
            <button class="nav-link" data-category="fashion" type="button">Fashion (0)</button>
            <button class="nav-link" data-category="handicrafts" type="button">Handicrafts (0)</button>
            <button class="nav-link" data-category="health" type="button">Health Equipment (0)</button>
            <button class="nav-link" data-category="electronics" type="button">Electronics (0)</button>
            <button class="nav-link" data-category="digital" type="button">Digital products (0)</button>
            <button class="nav-link" data-category="agriculture" type="button">Agriculture and Gardening (0)</button>
            <button class="nav-link" data-category="misc" type="button">Miscellaneous (0)</button>
            <button class="nav-link" data-category="medicine" type="button">Medicine (1)</button>
          </div>
        </div>
        <!-- Product Grid (Right) -->
        <div class="col-lg-9">
          <div class="row product-grid" id="productGrid">
            <!-- Example Product Cards -->
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
              <div class="product-card">
                <div class="product-img position-relative">
                  <span class="product-badge">NEW</span>
                  <img src="{{ asset('assets/frontassets/') }}/images/samaira-medica/product1.png" alt="Product" class="img-fluid">
                  <button type="submit" class="add-to-cart-btn">Add to Cart</button>
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
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="food">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="books">
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
            <div class="col-md-4 mb-4 product-card-show" data-category="medicine">
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
        </div>
      </div>
    </div>
  </section>
  <!-- Category & Product Section End -->

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
  <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>

    <script>
        // Show/hide bKash transaction input
        document.querySelectorAll('input[name="payment-method"]').forEach(function(radio) {
          radio.addEventListener('change', function() {
            var bkashDiv = document.getElementById('bkash-transaction');
            if (this.value === 'bkash') {
              bkashDiv.style.display = 'block';
            } else {
              bkashDiv.style.display = 'none';
            }
          });
        });
      </script>

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

    <script>
        // Category tab filtering
        $(document).ready(function() {
            $('.category-tabs .nav-link').on('click', function() {
                var category = $(this).data('category');
                $('.category-tabs .nav-link').removeClass('active');
                $(this).addClass('active');
                if (category === 'all') {
                $('#productGrid .product-card-show').show();
                } else {
                $('#productGrid .product-card-show').hide();
                $('#productGrid .product-card-show[data-category="' + category + '"]').show();
                }
            });
        });
    </script>

</body>

</html>

