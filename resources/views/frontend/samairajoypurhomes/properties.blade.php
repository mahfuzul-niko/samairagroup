<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joypur Homes Limited</title>
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






    <!-- Featured Properties Section Start -->
    <section class="joypur-featured-properties-section py-5 content-margin-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <div>
                    <h2 class="joypur-featured-title mb-1">Our Properties in <span
                            class="text-success">{{ $category->title }}</span></h2>
                </div>
            </div>
            <div class="row joypur-featured-cards g-4 mt-2">
                @if (count($category->properties) == 0)
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            No properties found in this category.
                        </div>
                    </div>
                @else
                    @foreach ($category->properties as $property)
                        <!-- Property Card 1 -->
                        <div class="col-md-6 col-lg-4 joypur-featured-card" data-status="sale">
                            <div class="property-card">
                                <div class="property-img-wrapper">
                                    <img src="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}"
                                        alt="{{ $property->title }}" class="property-img">
                                    <div class="property-badges">
                                        <span class="badge badge-sale">{{ $property->category->title }}</span>
                                    </div>
                                </div>
                                <div class="property-body">
                                    <div class="property-title-price-row">
                                        <div class="property-title">{{ $property->title }}</div>
                                        <div class="property-price text-sale">{{ $property->price }} Taka</div>
                                    </div>
                                    <div class="property-address"><i class="fa fa-map-marker-alt"></i>
                                        {{ $property->address }}</div>
                                    <div class="property-meta">
                                        <span><i class="fa fa-bed"></i> {{ $property->bed }} Beds</span>
                                        <span><i class="fa fa-bath"></i> {{ $property->bath }} Baths</span>
                                        <span><i class="fa fa-expand"></i> {{ $property->area }} sqft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- Featured Properties Section End -->


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
    <!-- Custom JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

    <!-- About Slider Script -->
    <script>
        var swiper = new Swiper('.about-swiper', {
            effect: 'coverflow',
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            speed: 1000,
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
            function showTestimonial(group, idx) {
                const slides = document.querySelectorAll(
                    `.testimonial-swiper-${group} .swiper-slide`
                );

                if (slides.length > 0) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('active', i === idx);
                    });
                }
            }

            // Initialize indices for each slider
            let customerIdx = 0;
            let ownerIdx = 0;

            // Initialize auto-slide timers
            let customerAutoSlide;
            let ownerAutoSlide;
            let autoSlideDelay = 4000; // 4 seconds between slides

            // Get all slides for each slider
            const customerSlides = document.querySelectorAll('.testimonial-swiper-customer .swiper-slide');
            const ownerSlides = document.querySelectorAll('.testimonial-swiper-owner .swiper-slide');

            console.log('Customer slides:', customerSlides.length);
            console.log('Owner slides:', ownerSlides.length);

            // Initial display - show first slide in each slider
            showTestimonial('customer', 0);
            showTestimonial('owner', 0);

            // Auto-slide functions
            function startCustomerAutoSlide() {
                stopCustomerAutoSlide(); // Clear any existing interval first
                customerAutoSlide = setInterval(function() {
                    customerIdx = (customerIdx + 1) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                }, autoSlideDelay);
            }

            function startOwnerAutoSlide() {
                stopOwnerAutoSlide(); // Clear any existing interval first
                ownerAutoSlide = setInterval(function() {
                    ownerIdx = (ownerIdx + 1) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                }, autoSlideDelay);
            }

            function stopCustomerAutoSlide() {
                clearInterval(customerAutoSlide);
            }

            function stopOwnerAutoSlide() {
                clearInterval(ownerAutoSlide);
            }

            // Start auto-sliding for both sliders
            startCustomerAutoSlide();
            startOwnerAutoSlide();

            // Customer slider navigation - important to target the correct buttons!
            document.querySelectorAll('.testimonial-prev-customer').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopCustomerAutoSlide(); // Stop auto-sliding when user clicks
                    customerIdx = (customerIdx - 1 + customerSlides.length) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startCustomerAutoSlide, autoSlideDelay * 2);
                })
            );

            document.querySelectorAll('.testimonial-next-customer').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopCustomerAutoSlide(); // Stop auto-sliding when user clicks
                    customerIdx = (customerIdx + 1) % customerSlides.length;
                    showTestimonial('customer', customerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startCustomerAutoSlide, autoSlideDelay * 2);
                })
            );

            // Owner slider navigation - separate from customer navigation!
            document.querySelectorAll('.testimonial-prev-owner').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopOwnerAutoSlide(); // Stop auto-sliding when user clicks
                    ownerIdx = (ownerIdx - 1 + ownerSlides.length) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startOwnerAutoSlide, autoSlideDelay * 2);
                })
            );

            document.querySelectorAll('.testimonial-next-owner').forEach(btn =>
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    stopOwnerAutoSlide(); // Stop auto-sliding when user clicks
                    ownerIdx = (ownerIdx + 1) % ownerSlides.length;
                    showTestimonial('owner', ownerIdx);
                    // Resume auto-sliding after a delay
                    setTimeout(startOwnerAutoSlide, autoSlideDelay * 2);
                })
            );

            // Pause auto-sliding when hovering over sliders
            const customerSlider = document.querySelector('.testimonial-swiper-customer');
            const ownerSlider = document.querySelector('.testimonial-swiper-owner');

            if (customerSlider) {
                customerSlider.addEventListener('mouseenter', stopCustomerAutoSlide);
                customerSlider.addEventListener('mouseleave', startCustomerAutoSlide);
            }

            if (ownerSlider) {
                ownerSlider.addEventListener('mouseenter', stopOwnerAutoSlide);
                ownerSlider.addEventListener('mouseleave', startOwnerAutoSlide);
            }
        });
    </script>

</body>

</html>
