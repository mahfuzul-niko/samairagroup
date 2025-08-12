<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joypur Homes Single Property</title>
    <meta property="og:title" content="Joypur Homes Single Property" />
    <meta property="og:description" content="Joypur Homes Single Property" />
    <meta property="og:image" content="URL_TO_PRODUCT_IMAGE" />
    <meta property="og:url" content="PAGE_URL" />
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

    <section style="background: #f8f9fa;" class="pb-3">
        <div class="container product-main-container content-margin-top border-top">
            <div class="row mt-5">
                <!-- Left: Image Slider -->
                <div class="col-md-6">
                    <div class="product-image-slider-container">
                        <div class="main-image mt-5">
                            <img id="mainProductImage" class=" rounded"
                                src="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}"
                                alt="Product Image" />
                        </div>
                        <div class="thumbnail-images">
                            <div class="swiper thumbnail-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img class="thumbnail selected"
                                            src="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}"
                                            alt="Thumbnail 1"
                                            data-img="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}" />
                                    </div>
                                    @foreach ($property->Images as $image)
                                        <div class="swiper-slide"><img class="thumbnail"
                                                src="{{ $image->image ? Storage::url($image->image) : asset('assets/img/no-profile.png') }}"
                                                alt="Thumbnail 2"
                                                data-img="{{ $image->image ? Storage::url($image->image) : asset('assets/img/no-profile.png') }}" />
                                        </div>
                                    @endforeach

                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right: Product Details -->
                <div class="col-md-6">
                    <div class="product-details enhanced-details">

                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <h2 class="product-title mb-1">{{ $property->title }}</h2>
                            <div class="icon-group">
                                <button class="icon-btn share-btn" id="shareBtn" title="Share"><i
                                        class="fa fa-share-alt"></i></button>
                            </div>
                        </div>
                        <div class="product-brand mb-3"><i class="fa fa-map-marker-alt"></i> {{ $property->address }}
                        </div>
                        <div class="product-meta-row d-flex align-items-start mb-3 flex-wrap">
                            <div class="price-col d-flex flex-column align-items-start me-4">
                                <span class="product-price-new main-price">{{ $property->price ? $property->price . ' Taka' : '' }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <div class="product-meta-row d-flex align-items-start mb-3 flex-wrap">
                                <div class="price-col d-flex flex-column align-items-start me-4">
                                    <span class="product-type">Date</span>
                                    <div class="product-brand mb-3"><i class="fa fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($property->start_date)->format('d/m/Y') }}
                                    </div>
                                </div>
                                <div class="price-col d-flex flex-column align-items-start me-4">
                                    <span class="product-type">Built In Year</span>
                                    <div class="product-brand mb-3"><i class="fa fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($property->end_date)->format('d/m/Y') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="product-meta-row d-flex align-items-start mb-3 flex-wrap">
                                <div class="price-col d-flex flex-column align-items-start me-4">
                                    <span class="product-type">Bedrooms</span>
                                    <div class="product-brand mb-3"><i class="fa fa-bed"></i> {{ $property->bed }}
                                    </div>
                                </div>
                                <div class="price-col d-flex flex-column align-items-start me-4">
                                    <span class="product-type">Bathrooms</span>
                                    <div class="product-brand mb-3"><i class="fa fa-bath"></i> {{ $property->bath }}
                                    </div>
                                </div>
                                <div class="price-col d-flex flex-column align-items-start me-4">
                                    <span class="product-type">Floor Area (sqft)</span>
                                    <div class="product-brand mb-3"><i class="fa fa-area-chart"></i>
                                        {{ $property->area }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">

                            <button type="button" class="btn btn-primary add-to-cart-btn enhanced-cart-btn"
                                data-bs-toggle="modal" data-bs-target="#buynowbutton"><i
                                    class="fa-solid fa-cart-shopping"></i> Order Now</button>



                            <!-- Modal -->
                            <div class="modal fade" id="buynowbutton" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Prebook your
                                                property
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <i class="text-secondary fs-6">Our agent Will contact you soon</i>
                                            <form action="{{ route('property.store.order') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="property_id"
                                                    value="{{ $property->id }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-floating my-3">
                                                            <input type="text" class="form-control" id="Name"
                                                                name="name" placeholder="Enter Your Name" required>
                                                            <label for="floatingInput">Name<span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="Phone"
                                                                name="phone" placeholder="Enter Your Phone Number"
                                                                required>
                                                            <label for="floatingInput">Phone Number<span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput"
                                                        name="email" placeholder="name@example.com">
                                                    <label for="floatingInput">Email address</label>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                                            name="comment"></textarea>
                                                        <label for="floatingTextarea2">Comments</label>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn agent-btn">Prebook
                                                        Property</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary add-to-cart-btn enhanced-cart-btn" style="background:#4AC459;"
                                href="https://wa.me/{{ $property->whats_app }}?text={{ urlencode('I want more information on this:') }}%0A{{ urlencode(url()->current()) }}%0A%0A"
                                target="_blank">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs-section mt-5">
                <ul class="nav nav-tabs product-tabs" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc"
                            type="button" role="tab">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab">Commentes</button>
                    </li>
                </ul>
                <div class="tab-content product-tab-content" id="productTabContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="desc" role="tabpanel">
                        <div class="product-description p-4">
                            <h5>Product Description</h5>
                            <p>{{ $property->description }}</p>
                        </div>
                    </div>
                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="reviews-section p-4">

                            <h5>Commentes</h5>
                            <div class="review-list">
                                @foreach ($comments as $comment)
                                    <div class="review-item d-flex mb-4">
                                        <div class="review-avatar me-3">
                                            <span
                                                class="avatar-circle">{{ strtoupper(substr($comment->name, 0, 2)) }}</span>

                                        </div>
                                        <div class="review-content">
                                            <div class="review-user fw-bold">
                                                {{ $comment->name }}
                                                <span
                                                    class="review-date">{{ $comment->created_at->diffForHumans() }}</span>
                                            </div>



                                            <div class="review-text mb-2">{{ $comment->comment }}</div>

                                        </div>
                                    </div>
                                @endforeach


                            </div>

                            <div class="write-review-form mb-5">
                                <h5 class="mb-3 fw-bold">Write a Comment</h5>
                                <form action="{{ route('property.store.comment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Comment <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4" name="comment" placeholder="Enter Your Comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-5 py-2"
                                        style="border-radius: 30px; font-weight: 600; font-size: 1.1rem; background: #3b4266; border: none;">Submit
                                        Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Items Slider Section -->
    <!-- Featured Properties Section Start -->
    <section class="joypur-featured-properties-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <div>
                    <h2 class="joypur-featured-title mb-1">Similar Properties You Might Also Like</h2>
                </div>
            </div>
            <div class="row joypur-featured-cards g-4 mt-2">
                @foreach ($properties as $property)
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
                                    <a href="{{ route('page.jphomes.SingleProperty', $property) }}"
                                        class="text-decoration-none">
                                        <div class="property-title">{{ $property->title }}</div>
                                    </a>
                                    <div class="property-price text-sale">
                                        {{ $property->price ? $property->price . ' Taka' : '' }}
                                    </div>

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

            </div>
        </div>
    </section>
    <!-- Featured Properties Section End -->

    <!-- Footer Section Start -->
    <x-layouts.footer />
    <!-- Footer Section End -->

    <!-- Share Popup Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content share-modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="shareModalLabel">Share this property</h5> -->
                    <button type="button" class="btn-close share-modal-close" data-bs-dismiss="modal"
                        aria-label="Close"
                        style="filter: invert(0%) brightness(0%) contrast(100%); font-size: 6px;"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center py-4">
                    <div class="mb-2 text-center">
                        <div class="fw-semibold" style="font-size:1.1rem;">Share this property with family and friends
                        </div>
                    </div>
                    <div class="share-icons mb-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank"
                            class="share-social-btn facebook" id="fbShareBtn" title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://twitter.com/intent/tweet?url=&text=" target="_blank"
                            class="share-social-btn twitter" id="twShareBtn" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <button class="share-social-btn copylink" id="copyLinkBtn" title="Copy Link" type="button">
                            <i class="fa fa-link"></i>
                        </button>
                    </div>
                    <form id="emailShareForm" style="display:none; width:100%; max-width:340px;">
                        <input type="email" class="form-control mb-2" placeholder="Your email*" required>
                        <input type="email" class="form-control mb-2" placeholder="Friend's email*" required>
                        <textarea class="form-control mb-2" placeholder="Your Message*" required></textarea>
                        <button type="submit" class="btn btn-primary w-100"><i class="fa fa-envelope"></i> Send a
                            message</button>
                    </form>
                    <div id="copyLinkMsg" style="display:none; color:green; margin-top:10px;">Link copied!</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Swiper thumbnail slider
            const thumbSwiper = new Swiper('.thumbnail-swiper', {
                slidesPerView: 3,
                spaceBetween: 2,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                watchOverflow: true,
            });

            // Hide navigation if 4 or fewer images
            const totalThumbs = document.querySelectorAll('.thumbnail-swiper .swiper-slide').length;
            if (totalThumbs <= 4) {
                document.querySelector('.swiper-button-prev').style.display = 'none';
                document.querySelector('.swiper-button-next').style.display = 'none';
            } else {
                document.querySelector('.swiper-button-prev').style.display = '';
                document.querySelector('.swiper-button-next').style.display = '';
            }

            // Main image update logic
            const mainImage = document.getElementById('mainProductImage');
            const thumbs = document.querySelectorAll('.thumbnail');
            let currentIndex = 0;

            function updateMainImage(idx) {
                thumbs.forEach((thumb, i) => {
                    thumb.classList.toggle('selected', i === idx);
                    if (i === idx) {
                        mainImage.src = thumb.getAttribute('data-img');
                    }
                });
                currentIndex = idx;
            }

            thumbs.forEach((thumb, idx) => {
                thumb.addEventListener('click', function() {
                    updateMainImage(idx);
                });
            });

            // Swiper navigation (sync with main image)
            document.querySelector('.swiper-button-prev').addEventListener('click', function() {
                let idx = (currentIndex - 1 + thumbs.length) % thumbs.length;
                updateMainImage(idx);
            });
            document.querySelector('.swiper-button-next').addEventListener('click', function() {
                let idx = (currentIndex + 1) % thumbs.length;
                updateMainImage(idx);
            });

            // Share button logic
            const shareBtn = document.getElementById('shareBtn');
            const shareModalInstance = new bootstrap.Modal(document.getElementById('shareModal'));
            shareBtn.addEventListener('click', function() {
                shareModalInstance.show();
            });

            // Email form show/hide
            document.getElementById('showEmailForm').onclick = function() {
                document.getElementById('emailShareForm').style.display = 'block';
            };
            // Copy link
            document.getElementById('copyLinkBtn').onclick = function() {
                navigator.clipboard.writeText(window.location.href).then(function() {
                    document.getElementById('copyLinkMsg').style.display = 'block';
                    setTimeout(() => document.getElementById('copyLinkMsg').style.display = 'none',
                        2000);
                });
            };
            // Email form submit (mailto: fallback)
            document.getElementById('emailShareForm').onsubmit = function(e) {
                e.preventDefault();
                const inputs = this.querySelectorAll('input, textarea');
                const from = inputs[0].value;
                const to = inputs[1].value;
                const msg = inputs[2].value;
                window.location.href =
                    `mailto:${to}?subject=Check this property&body=${msg}%0A${window.location.href}`;
            };
            // Set correct share URLs for Facebook and Twitter
            const postUrl = encodeURIComponent(window.location.href);
            const postTitle = encodeURIComponent(document.querySelector('.product-title').textContent);
            document.getElementById('fbShareBtn').setAttribute('href',
                `https://www.facebook.com/sharer/sharer.php?u=${postUrl}`);
            document.getElementById('twShareBtn').setAttribute('href',
                `https://twitter.com/intent/tweet?url=${postUrl}&text=${postTitle}`);
            // Open Facebook and Twitter share in new tab without duplicating the page
            document.querySelectorAll('.share-social-btn.facebook, .share-social-btn.twitter').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.open(this.href, '_blank', 'noopener,noreferrer');
                });
            });

            // Color selection logic
            document.querySelectorAll('#colorOptions .color-circle').forEach(circle => {
                circle.addEventListener('click', function() {
                    document.querySelectorAll('#colorOptions .color-circle').forEach(c => c
                        .classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Size selection logic
            document.querySelectorAll('#sizeOptions input[type="radio"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    document.querySelectorAll('#sizeOptions label').forEach(label => label.classList
                        .remove('selected'));
                    this.parentElement.classList.add('selected');
                });
                // Set initial state
                if (radio.checked) {
                    radio.parentElement.classList.add('selected');
                }
            });

            // Quantity box logic
            const qtyInput = document.getElementById('qty-input');
            document.getElementById('qty-plus').addEventListener('click', function() {
                let val = parseInt(qtyInput.value, 10) || 1;
                qtyInput.value = val + 1;
            });
            document.getElementById('qty-minus').addEventListener('click', function() {
                let val = parseInt(qtyInput.value, 10) || 1;
                if (val > 1) qtyInput.value = val - 1;
            });

            // Star rating input logic
            const stars = document.querySelectorAll('.star-rating-input .fa-star');
            let selectedRating = 0;
            stars.forEach(star => {
                star.addEventListener('mouseenter', function() {
                    const val = parseInt(this.getAttribute('data-value'));
                    stars.forEach(s => {
                        if (parseInt(s.getAttribute('data-value')) <= val) {
                            s.classList.add('hovered');
                        } else {
                            s.classList.remove('hovered');
                        }
                    });
                });
                star.addEventListener('mouseleave', function() {
                    stars.forEach(s => s.classList.remove('hovered'));
                });
                star.addEventListener('click', function() {
                    selectedRating = parseInt(this.getAttribute('data-value'));
                    stars.forEach(s => {
                        if (parseInt(s.getAttribute('data-value')) <= selectedRating) {
                            s.classList.add('selected');
                        } else {
                            s.classList.remove('selected');
                        }
                    });
                });
            });

            // Similar items swiper
            const similarSwiper = new Swiper('.similar-items-swiper', {
                slidesPerView: 5,
                spaceBetween: 15,
                navigation: {
                    nextEl: '.similar-swiper-next',
                    prevEl: '.similar-swiper-prev',
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 5
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
            // Show/hide nav buttons based on slide count
            const totalSimilarSlides = document.querySelectorAll('.similar-items-swiper .swiper-slide').length;
            if (totalSimilarSlides <= 6) {
                document.querySelector('.similar-swiper-prev').style.display = 'none';
                document.querySelector('.similar-swiper-next').style.display = 'none';
            } else {
                document.querySelector('.similar-swiper-prev').style.display = '';
                document.querySelector('.similar-swiper-next').style.display = '';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pageUrl = encodeURIComponent(window.location.href);
            const pageTitle = encodeURIComponent(document.title);

            // Update hrefs dynamically
            document.getElementById('fbShareBtn').href =
                `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;

            document.getElementById('twShareBtn').href =
                `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;

            // Copy link
            document.getElementById('copyLinkBtn').addEventListener('click', function() {
                navigator.clipboard.writeText(window.location.href)
                    .then(() => alert('Link copied to clipboard!'))
                    .catch(() => alert('Failed to copy link.'));
            });
        });
    </script>

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
