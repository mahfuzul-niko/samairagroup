<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Medica Limited</title>
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
    <x-layouts.header :content="$content" />
    <!-- Top Header Section End -->

    <!-- Navbar Start -->
    <x-layouts.navbar>
        <x-slot name="shop">
            <li><a href="{{ route('page.medica.shop') }}">Shop</a></li>
        </x-slot>
        <x-slot name="nav">
            <li class="medica-cart-icon">
                <a class="mini-cart-icon" href="{{ route('page.medica.checkout') }}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="pro-count blue productCount">{{ $totalItems }}</span>
                </a>
            </li>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <!-- Hero Slider Section Start -->
    <section class="hero-slider content-margin-top">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-bg">
                            <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                alt="Medica">
                        </div>
                        <div class="container">
                            <div class="hero-content">
                                <h1>{{ $banner->title }}</h1>
                                <p>{{ $banner->subtitle }}</p>
                                <a href="{{ $banner->url }}" class="discover-btn">Get me Enrolled</a>
                            </div>
                        </div>
                    </div>
                @endforeach


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

    <!-- Category Slider Section Start -->
    <section class="category-slider-section py-5">
        <div class="container">
            <div
                class="category-slider-header d-flex justify-content-between align-items-center mb-4 position-relative">
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
                    @foreach ($categories as $category)
                        <div class="swiper-slide">
                            <a href="{{ route('page.medica.shop') }}" class="text-decoration-none">
                                <div class="category-card">
                                    {{-- <div class="category-icon">{!! $category->icon !!}</div> --}}
                                    <img
                                        src="{{ $category->icon ? Storage::url($category->icon) : asset('assets/img/no-profile.png') }}">
                                    <div class="category-name">{{ $category->title }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
                    <span class="category-label fw-semibold">Our</span>
                    <h2 class="category-title">Best Selling Products</h2>
                </div>
                <div class="best-selling-nav">
                    <button class="best-selling-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="best-selling-next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="swiper best-selling-swiper">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        @php
                            $weights = json_decode($product->weight, true);
                            $sizes = json_decode($product->size, true);
                        @endphp
                        <!-- Product Card Start -->
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-img position-relative">
                                    <span class="product-badge">{{ $product->category->title }}</span>
                                    <img src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Product" class="img-fluid">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="product_name" value="{{ $product->title }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="price"
                                            value="{{ $product->descount_price ?? $product->price }}">
                                        <input type="hidden" name="weight"
                                            value="{{ is_array($weights) && isset($weights[0]) ? $weights[0] : '' }}">
                                        <input type="hidden" name="size"
                                            value="{{ is_array($sizes) && isset($sizes[0]) ? $sizes[0] : '' }}">
                                        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                                    </form>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('page.medica.product', $product) }}"
                                        class="text-decoration-none text-dark">
                                        <h4 class="product-title">
                                            {{ $product->title }}
                                        </h4>
                                    </a>
                                    @if ($product->price == null)
                                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $product->phone) }}?text={{ urlencode('Hello, I want to know more about this product: ' . $product->title) }}"
                                            target="_blank" class="btn btn-outline-success">
                                            Contact on WhatsApp
                                        </a>
                                    @else
                                        @if ($product->descount_price)
                                            <span class="new-price">{{ $product->descount_price }} Taka</span>
                                            <span class="old-price">{{ $product->price }} Taka</span>
                                        @else
                                            <span class="new-price">{{ $product->price }} Taka</span>
                                        @endif
                                    @endif



                                    <a href="{{ route('page.medica.product', $product) }}" class="buy-now-btn">Buy
                                        Now</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('page.medica.shop') }}" class="view-all-btn">View All Products</a>
        </div>
    </section>
    <!-- Best Selling Products Section End -->

    <!-- Hot Selling Products Section Start -->
    <section class="best-selling-products py-5">
        <div class="container">
            <div class="category-slider-header d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span class="category-label fw-semibold">Our</span>
                    <h2 class="category-title">Hot Selling Products</h2>
                </div>
                <div class="hot-selling-nav">
                    <button class="hot-selling-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="hot-selling-next"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="swiper hot-selling-swiper">
                <div class="swiper-wrapper">
                    @foreach ($hots as $product)
                        @php
                            $weights = json_decode($product->weight, true);
                            $sizes = json_decode($product->size, true);
                        @endphp
                        <!-- Product Card Start -->
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-img position-relative">
                                    <span class="product-badge">{{ $product->category->title }}</span>
                                    <img src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Product" class="img-fluid">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="product_name" value="{{ $product->title }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="price"
                                            value="{{ $product->descount_price ?? $product->price }}">
                                        <input type="hidden" name="weight"
                                            value="{{ is_array($weights) && isset($weights[0]) ? $weights[0] : '' }}">
                                        <input type="hidden" name="size"
                                            value="{{ is_array($sizes) && isset($sizes[0]) ? $sizes[0] : '' }}">
                                        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                                    </form>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('page.medica.product', $product) }}"
                                        class="text-decoration-none text-dark">
                                        <h4 class="product-title">
                                            {{ $product->title }}
                                        </h4>
                                    </a>
                                    @if ($product->price == null)
                                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $product->phone) }}?text={{ urlencode('Hello, I want to know more about this product: ' . $product->title) }}"
                                            target="_blank" class="btn btn-outline-success">
                                            Contact on WhatsApp
                                        </a>
                                    @else
                                        @if ($product->descount_price)
                                            <span class="new-price">{{ $product->descount_price }} Taka</span>
                                            <span class="old-price">{{ $product->price }} Taka</span>
                                        @else
                                            <span class="new-price">{{ $product->price }} Taka</span>
                                        @endif
                                    @endif

                                    <a href="{{ route('page.medica.product', $product) }}" class="buy-now-btn">Buy
                                        Now</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('page.medica.shop') }}" class="view-all-btn">View All Products</a>
        </div>
    </section>
    <!-- Hot Selling Products Section End -->

    <!-- Featured Section Start -->
    {{-- <section class="featured-section py-5">
        <div class="container">
            <div class="section-header mb-4">
                <span class="featured-label">Featured</span>
                <h2 class="featured-title">New Arrival</h2>
            </div>
            <div class="featured-grid">
                <!-- Large Left -->
                <div class="featured-item featured-large"
                    style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f1.png');">
                    <div class="featured-content">
                        <h3 class="featured-name">Surgical Equipment</h3>
                        <p class="featured-desc">Black and White version of coming out on sale.</p>
                        <a href="#" class="featured-btn mt-2">Shop Now</a>
                    </div>
                </div>
                <!-- Top Right -->
                <div class="featured-item featured-medium"
                    style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f2.jpg');">
                    <div class="featured-content">
                        <h3 class="featured-name">Women’s Collections</h3>
                        <p class="featured-desc">Featured woman collections that give you another vibe.</p>
                        <a href="#" class="featured-btn mt-2">Shop Now</a>
                    </div>
                </div>
                <!-- Bottom Right 1 -->
                <div class="featured-item featured-small"
                    style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f1.png');">
                    <div class="featured-content">
                        <h3 class="featured-name">Speakers</h3>
                        <p class="featured-desc">Amazon wireless speakers</p>
                        <a href="#" class="featured-btn mt-2">Shop Now</a>
                    </div>
                </div>
                <!-- Bottom Right 2 -->
                <div class="featured-item featured-small"
                    style="background-image: url('{{ asset('assets/frontassets/') }}/images/samaira-medica/f4.png');">
                    <div class="featured-content">
                        <h3 class="featured-name">Gucci Perfume</h3>
                        <a href="#" class="featured-btn mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Featured Section End -->

    <!-- Service Features Section Start -->
    <section class="service-features-section py-5">
        <div class="container">
            <div class="service-features-row">
                <div class="service-feature">
                    <div class="service-feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4 class="service-feature-title">FREE AND FAST DELIVERY</h4>
                    <p class="service-feature-desc">{{ system_key('system_medica_delevery') }}</p>
                </div>
                <div class="service-feature">
                    <div class="service-feature-icon">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <h4 class="service-feature-title">24/7 CUSTOMER SERVICE</h4>
                    <p class="service-feature-desc">{{ system_key('system_medica_service') }}</p>
                </div>
                <div class="service-feature">
                    <div class="service-feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h4 class="service-feature-title">MONEY BACK GUARANTEE</h4>
                    <p class="service-feature-desc">{{ system_key('system_medica_money') }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Features Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials-section"
        style="background: url('{{ system_key('samaira_medica_review') ? Storage::url(system_key('samaira_medica_review')) : asset('assets/img/no-profile.png') }}') center center/cover no-repeat;">
        <div class="container">
            <div class="text-center mb-3 margin-bottom-100">
                <h2 class="section-title">What Our Customers Say</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-card">

                                <p class="testimonial-text">{{ $review->description }}</p>
                                <div class="testimonial-author">
                                    <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Orlando Diggs" class="author-image">
                                    <div class="author-info">
                                        <h4>{{ $review->name }}</h4>
                                        <p>{{ $review->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="{{ $partner->title }}" class="sister-logo">
                            </div>
                        @endforeach

                    </div>
                    <!-- Duplicate set of logos for seamless loop -->
                    <div class="d-flex">
                        @foreach ($partners as $partner)
                            <div class="logo-item">
                                <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="{{ $partner->title }}" class="sister-logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sister Concern End  -->

    <!-- Footer Section Start -->
    <x-layouts.footer :content="$content" />
    <!-- Footer Section End -->


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
                1200: {
                    slidesPerView: 6
                },
                992: {
                    slidesPerView: 4
                },
                768: {
                    slidesPerView: 3
                },
                480: {
                    slidesPerView: 2
                },
                0: {
                    slidesPerView: 1
                }
            }
        });
    </script>

    <!-- Hero Slider Init -->
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
                1200: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 2
                },
                0: {
                    slidesPerView: 1
                }
            },
            on: {
                init: function() {
                    toggleBestSellingNav(this);
                },
                slideChange: function() {
                    toggleBestSellingNav(this);
                },
                resize: function() {
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

    <!-- Hot Selling Products Section Init -->
    <script>
        var hotSellingSwiper = new Swiper('.hot-selling-swiper', {
            slidesPerView: 4,
            spaceBetween: 24,
            navigation: {
                nextEl: '.hot-selling-next',
                prevEl: '.hot-selling-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 2
                },
                0: {
                    slidesPerView: 1
                }
            },
            on: {
                init: function() {
                    toggleHotSellingNav(this);
                },
                slideChange: function() {
                    toggleHotSellingNav(this);
                },
                resize: function() {
                    toggleHotSellingNav(this);
                }
            }
        });

        function toggleHotSellingNav(swiper) {
            var totalSlides = swiper.slides.length;
            var slidesPerView = swiper.params.slidesPerView;

            if (swiper.params.breakpoints) {
                var ww = window.innerWidth;
                var bp = swiper.params.breakpoints;
                if (ww >= 1200 && bp[1200]) slidesPerView = bp[1200].slidesPerView;
                else if (ww >= 992 && bp[992]) slidesPerView = bp[992].slidesPerView;
                else if (ww >= 768 && bp[768]) slidesPerView = bp[768].slidesPerView;
                else if (bp[0]) slidesPerView = bp[0].slidesPerView;
            }

            var nav = document.querySelector('.hot-selling-nav');
            if (nav) {
                nav.style.display = (totalSlides > slidesPerView) ? 'flex' : 'none';
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
