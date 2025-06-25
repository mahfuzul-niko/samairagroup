<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Samaira Medica Limited</title>
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
        <x-slot name="shop">
            <li><a href="{{ route('page.medica.shop') }}">Shop</a></li>
        </x-slot>
        <x-slot name="nav">
            <a class="mini-cart-icon" href="{{ route('page.emerging.checkout') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="pro-count blue productCount">{{ $totalItems }}</span>
            </a>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <!-- Checkout Section Start -->
    <section class="checkout-section bg-light py-5 content-margin-top">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Order Summary -->
                <div
                    class="col-lg-5 col-md-5 text-white p-5 rounded-start d-flex flex-column justify-content-between checkout-summary">
                    <div>
                        <img src="{{ system_key('samaira_emerging_logo') ? Storage::url(system_key('samaira_emerging_logo')) : asset('assets/img/no-profile.png') }}"
                            class="summary-logo" alt="Logo">
                        <h4 class="mb-4">Order summary</h4>
                        <div class="mb-4">
                            @foreach ($cart as $id => $item)
                                <div class="d-flex align-items-start mb-3 rounded p-2">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <button type="submit"
                                                class="btn btn-link p-0 me-3 delete-product-btn text-white mt-3"
                                                title="Delete">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <img src="{{ $item['image'] ? Storage::url($item['image']) : asset('default-image.jpg') }}"
                                        class="rounded product-image">
                                    <div class="ms-3 text-white w-100">
                                        <div class="fw-bold mb-2">{{ $item['name'] ?? 'N/A' }}</div>
                                        <div class="d-flex justify-content-between mb-2">Size <span
                                                class="ms-2">{{ $item['size'] ?? 'N/A' }}</span></div>
                                        <div class="d-flex justify-content-between mb-2">Weight <span
                                                class="ms-2">{{ $item['weight'] ?? 'N/A' }}</span></div>
                                        <div class="d-flex justify-content-between mb-2">Quantity <span
                                                class="ms-2">{{ $item['quantity'] }}</span></div>
                                        <div class="d-flex justify-content-between mb-2">Total Price <span
                                                class="ms-2">${{ number_format($item['subtotal'], 2) }}</span></div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                    <div class="mt-auto">
                        <h5 class="mt-4">Total Items <span class="float-end">{{ $totalItems }}</span></h5>
                        <h5 class="mt-4">Total bill <span class="float-end">{{ number_format($grandTotal, 2) }}
                                Taka</span></h5>
                    </div>
                </div>
                <!-- Checkout Form -->
                <div class="col-lg-7 col-md-7 p-5 rounded-end checkout-form-wrap">
                    <h2 class="fw-bold mb-4">Complete your order</h2>
                    <form id="checkout-form" action="{{ route('order.store.emerging') }}" method="POST">
                        @csrf
                        
                        <h5 class="mb-3 checkout-section-title">Personal Details</h5>
                        <div class="row mb-4">
                            <div class="col-md-12 mb-3">
                                <label for="first-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="first-name"
                                    placeholder="Enter Your Name..." name="name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email..." name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone"
                                    placeholder="Enter Your Phone Number..." name="phone" required>
                            </div>
                        </div>
                        <h5 class="mb-3 checkout-section-title">Shipping Address</h5>
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Your Complete Address..." name="address" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Enter Your City..." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" name="state" required
                                    placeholder="Enter Your State...">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="landmark" class="form-label">Landmark</label>
                                <input type="text" class="form-control" id="landmark" name="landmark" required
                                    placeholder="Any Landmark (Famous Place Or Mail)">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="postal-code" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postal-code" name="postal_code"
                                    required placeholder="Zip Code (231216)">
                            </div>
                        </div>
                        <h5 class="mb-3 checkout-section-title">Payment Method</h5>

                        <div class="checkout-payment-method mb-4">
                            <label class="form-check-label me-4">
                                <input type="radio" name="method" value="cod" class="form-check-input"
                                    checked> <span class="mt-2">Cash on Delivery (COD)</span>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-primary w-50 mt-3 complete-purchase-btn">Complete
                            Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

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
