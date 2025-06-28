<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>
    <meta property="og:title" content="Embrace Sideboard" />
    <meta property="og:description" content="Teixeira Design Studio" />
    <meta property="og:image" content="URL_TO_PRODUCT_IMAGE" />
    <meta property="og:url" content="PAGE_URL" />
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-medica/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-medica.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">
</head>

<body>
    @php
        $weights = json_decode($product->weight, true);
        $sizes = json_decode($product->size, true);
    @endphp
    <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->

    <!-- Navbar Start -->
    <x-layouts.navbar>
<x-slot name="shop">
            <li><a href="{{ route('page.medica.shop') }}">Shop</a></li>
        </x-slot>
        <x-slot name="nav">
            <a class="mini-cart-icon" href="{{ route('page.medica.checkout') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="pro-count blue productCount">{{ $totalItems }}</span>
            </a>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <div class="container product-main-container content-margin-top border-top">
        <div class="row mt-5">
            <!-- Left: Image Slider -->
            <div class="col-md-6">
                <div class="product-image-slider-container">
                    <div class="main-image mt-5">
                        <img id="mainProductImage" class=" rounded"
                            src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                            alt="Product Image" />
                    </div>
                    <div class="thumbnail-images">
                        <div class="swiper thumbnail-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="thumbnail selected"
                                        src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Thumbnail 1"
                                        data-img="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}" />
                                </div>
                                @foreach ($product->Images as $image)
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

                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h2 class="product-title mb-1">{{ $product->title }}</h2>
                        <div class="icon-group">

                            <button class="icon-btn share-btn" id="shareBtn" title="Share"><i
                                    class="fa fa-share-alt"></i></button>
                        </div>
                    </div>

                    <div class="product-meta-row d-flex align-items-start mb-3 flex-wrap">
                        <div class="price-col d-flex flex-column align-items-start me-4">
                            <span class="product-price-new main-price">{{ $product->descount_price }} Taka</span>
                            <span class="product-price-old">{{ $product->price }} Taka</span>
                        </div>

                    </div>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_name" value="{{ $product->title }}">
                        <input type="hidden" name="price" value="{{ $product->descount_price }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <hr>
                        <!-- Weight Options -->
                        <div class="mb-4">
                            <div class="mb-2 choose-label">Choose a Weight</div>
                            <div class="size-options enhanced-sizes" id="weightOptions">
                                @foreach ($weights as $weight)
                                    <label>
                                        <input type="radio" name="weight" value="{{ $weight }}"
                                            @if ($loop->first) checked @endif>
                                        {{ $weight }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <hr>

                        <!-- Quantity Options -->
                        <div class="mb-4">
                            <div class="mb-2 choose-label">Choose a Size</div>
                            <div class="size-options enhanced-sizes" id="quantityOptions">
                                @foreach ($sizes as $size)
                                    <label>
                                        <input type="radio" name="size" value="{{ $size }}"
                                            @if ($loop->first) checked @endif>
                                        {{ $size }}
                                    </label>
                                @endforeach
                            </div>
                        </div>


                        <div class="d-flex align-items-center mb-4">
                            <div class="quantity-box enhanced-qty me-3">
                                <a class="qty-btn  text-decoration-none " style="cursor: pointer" id="qty-minus">-</a>
                                <input type="text" id="qty-input" name="quantity" value="1" readonly>
                                <a class="qty-btn   text-decoration-none  " style="cursor: pointer"
                                    id="qty-plus">+</a>
                            </div>
                            <button class="btn btn-primary add-to-cart-btn enhanced-cart-btn"><i
                                    class="fa fa-shopping-cart me-2"></i>Add To Cart</button>
                        </div>

                    </form>
                    <div class="delivery-info enhanced-delivery-info">
                        <div class="delivery-card free-delivery mb-2">
                            <i class="fa fa-truck me-2"></i>
                            <div>
                                <span class="delivery-title">Free Delivery</span>
                                <span class="delivery-desc">Enter your Postal code for Delivery Availability</span>
                            </div>
                        </div>
                        <div class="delivery-card return-delivery">
                            <i class="fa fa-undo me-2"></i>
                            <div>
                                <span class="delivery-title">Return Delivery</span>
                                <span class="delivery-desc">Free 30 days Delivery Return.
                            </div>
                        </div>
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
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab">Reviews</button>
                </li> --}}
            </ul>
            <div class="tab-content product-tab-content" id="productTabContent">
                <!-- Description Tab -->
                <div class="tab-pane fade show active" id="desc" role="tabpanel">
                    <div class="product-description p-4">
                        <h5>Product Description</h5>
                        <p>{{ $product->description }}
                        </p>
                    </div>
                </div>
                <!-- Reviews Tab -->
                {{-- <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="reviews-section p-4">
                        <h5 class="mb-3">Customers Feedback</h5>
                        <div class="review-summary-card d-flex mb-4">
                            <div
                                class="review-summary-left d-flex flex-column align-items-center justify-content-center p-3">
                                <div class="review-score">4.8</div>
                                <div class="review-stars mb-1">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-half-alt text-warning"></i>
                                </div>
                                <div class="review-label">Product Rating</div>
                            </div>
                            <div class="review-summary-right flex-grow-1 p-3">
                                <div class="review-bar-row d-flex align-items-center mb-2">
                                    <div class="review-bar-label me-2">5 <i class="fa fa-star text-warning"></i></div>
                                    <div class="review-bar flex-grow-1 me-2">
                                        <div class="review-bar-fill" style="width:70%"></div>
                                    </div>
                                    <div class="review-bar-percent">70%</div>
                                </div>
                                <div class="review-bar-row d-flex align-items-center mb-2">
                                    <div class="review-bar-label me-2">4 <i class="fa fa-star text-warning"></i></div>
                                    <div class="review-bar flex-grow-1 me-2">
                                        <div class="review-bar-fill" style="width:15%"></div>
                                    </div>
                                    <div class="review-bar-percent">15%</div>
                                </div>
                                <div class="review-bar-row d-flex align-items-center mb-2">
                                    <div class="review-bar-label me-2">3 <i class="fa fa-star text-warning"></i></div>
                                    <div class="review-bar flex-grow-1 me-2">
                                        <div class="review-bar-fill" style="width:10%"></div>
                                    </div>
                                    <div class="review-bar-percent">10%</div>
                                </div>
                                <div class="review-bar-row d-flex align-items-center mb-2">
                                    <div class="review-bar-label me-2">2 <i class="fa fa-star text-warning"></i></div>
                                    <div class="review-bar flex-grow-1 me-2">
                                        <div class="review-bar-fill" style="width:3%"></div>
                                    </div>
                                    <div class="review-bar-percent">3%</div>
                                </div>
                                <div class="review-bar-row d-flex align-items-center">
                                    <div class="review-bar-label me-2">1 <i class="fa fa-star text-warning"></i></div>
                                    <div class="review-bar flex-grow-1 me-2">
                                        <div class="review-bar-fill" style="width:2%"></div>
                                    </div>
                                    <div class="review-bar-percent">2%</div>
                                </div>
                            </div>
                        </div>
                        <h5>Reviews</h5>
                        <div class="review-list">
                            <div class="review-item d-flex mb-4">
                                <div class="review-avatar me-3">
                                    <span class="avatar-circle">A.T</span>
                                </div>
                                <div class="review-content">
                                    <div class="review-user fw-bold">Nicolas Cage <span class="review-date">3 days
                                            ago</span></div>
                                    <div class="review-stars mb-1">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star-half-alt text-warning"></i>
                                    </div>
                                    <div class="review-title fw-semibold">Greete Product</div>
                                    <div class="review-text mb-2">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour</div>
                                    <div class="review-actions">
                                        <a href="#" class="me-3 text-muted"><i class="fa fa-thumbs-up"></i>
                                            Like</a>
                                        <a href="#" class="text-muted"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="review-item d-flex mb-4">
                                <div class="review-avatar me-3">
                                    <span class="avatar-circle">A.T</span>
                                </div>
                                <div class="review-content">
                                    <div class="review-user fw-bold">Sr.Robert Downey <span class="review-date">2 days
                                            ago</span></div>
                                    <div class="review-stars mb-1">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <div class="review-title fw-semibold">The best product in Market</div>
                                    <div class="review-text mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature from 45 BC,
                                        making it over 2000 years old.</div>
                                    <div class="review-actions">
                                        <a href="#" class="me-3 text-muted"><i class="fa fa-thumbs-up"></i>
                                            Like</a>
                                        <a href="#" class="text-muted"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="view-all-reviews-link">View All Reviews</a>
                        </div>
                        <div class="write-review-form mb-5">
                            <h5 class="mb-3 fw-bold">Write a Review</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">What is it like to Product?</label>
                                    <div class="star-rating-input mb-2">
                                        <i class="fa fa-star" data-value="1"></i>
                                        <i class="fa fa-star" data-value="2"></i>
                                        <i class="fa fa-star" data-value="3"></i>
                                        <i class="fa fa-star" data-value="4"></i>
                                        <i class="fa fa-star" data-value="5"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Review Title</label>
                                    <input type="text" class="form-control" placeholder="Great Products">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Review Content</label>
                                    <textarea class="form-control" rows="4"
                                        placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary px-5 py-2 submit-review-btn">Submit
                                    Review</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Similar Items Slider Section -->
    <div class="container similar-items-section my-5">
        <h3 class="mb-4 fw-bold">Similar Items You Might Also Like</h3>
        <div class="swiper similar-items-swiper">
            <div class="swiper-wrapper">
                @foreach ($prods as $prod)
                    <div class="swiper-slide">
                        <div class="similar-card">
                            <div class="similar-card-img"><img
                                    src="{{ $prod->image ? Storage::url($prod->image) : asset('assets/img/no-profile.png') }}"
                                    alt="TDX Sinkers"></div>
                            <div class="similar-card-body">
                                <div class="similar-title">{{ $prod->title }}</div>
                                <div class="similar-price">BDT {{ $product->descount_price }} </div>
                                <div class="similar-price text-decoration-line-through fw-light text-secondary"
                                    style="font-size: 14px">BDT {{ $product->price }} </div>
                                <div class="similar-sub">Check it out now <a
                                        href="{{ route('page.medica.product', $prod) }}">click here</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-button-prev similar-swiper-prev"></div>
            <div class="swiper-button-next similar-swiper-next"></div>
        </div>
    </div>

    <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

    <!-- Share Popup Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content share-modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Share this property</h5>
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
                        <a href="#" class="share-social-btn facebook" id="fbShareBtn"
                            title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="share-social-btn twitter" id="twShareBtn"
                            title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                        <button class="share-social-btn email" id="showEmailForm" title="Share via Email"
                            type="button"><i class="fa fa-envelope"></i></button>
                        <button class="share-social-btn copylink" id="copyLinkBtn" title="Copy Link"
                            type="button"><i class="fa fa-link"></i></button>
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

    <!-- jQuery -->
    <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>

    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

</body>

</html>
