<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Samaira Aviation Journey Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-aviation/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/flatpickr.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-aviation-limited.css">
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
    <form class="content-margin-top" action="{{ route('aviation.request.store') }}" method="POST">
        @csrf
        <div class="aviation-checkout-container">
            <div class="checkout-title">Journey Checkout</div>

            <!-- User Information Form -->
            <div class="user-info-form mb-4">
                <div class="row g-3">
                    <div class="col-md-6 form-group">
                        <label for="username" class="form-label">Full Name</label>
                        <span class="input-icon"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="username" name="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email" class="form-label">Email</label>
                        <span class="input-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <span class="input-icon"><i class="fas fa-phone"></i></span>
                        <input type="tel" class="form-control" id="phone" name="number"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="col-md-12 form-group position-relative">
                        <label for="special_request" class="form-label">Special Request</label>
                        <span class="input-icon position-absolute" style="top: 40px; left: 15px;">
                            <i class="fas fa-comment-dots"></i>
                        </span>
                        <textarea class="form-control ps-5" id="special_request" name="special_request" rows="4"
                            placeholder="Write your special request here..."></textarea>
                    </div>
                </div>
            </div>
            @if ($data['type'] == 'one_way')
                <!-- One Way Section -->
                <div class="section-title">One Way</div>
                <div class="checkout-summary">
                    <div class="summary-row">
                        <span class="summary-label">Flying From</span>
                        <span class="summary-value">{{ $data['from'] }}</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Flying To</span>
                        <span class="summary-value">{{ $data['to'] }}</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Journey Date</span>
                        <span class="summary-value">{{ $data['journey'] }}</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Travelers</span>
                        <span class="summary-value">{{ $data['adults'] }} Adults, {{ $data['children'] }} Child</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Class</span>
                        <span class="summary-value">{{ $data['class'] }}</span>
                    </div>
                </div>
            @elseif($data['type'] == 'round_way')
                <!-- Round Way Section -->
                <div class="section-title">Round Way</div>
                <div class="checkout-summary">
                    <div class="summary-row">
                        <span class="summary-label">Flying From</span>
                        <span class="summary-value">Dhaka</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Flying To</span>
                        <span class="summary-value">Singapore</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Journey Date</span>
                        <span class="summary-value">25 June, 2025</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Return Date</span>
                        <span class="summary-value">30 June, 2025</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Travelers</span>
                        <span class="summary-value">2 Adults, 1 Child</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Class</span>
                        <span class="summary-value">Business</span>
                    </div>
                </div>
            @else
                <!-- Multi City Section -->
                <div class="section-title">Multi City</div>
                <div class="checkout-summary checkout-summary-multicity">
                    <div class="summary-row">
                        <span class="summary-label">Trip 1</span>
                        <span class="summary-value">Dhaka → Singapore | 25 June, 2025</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Trip 2</span>
                        <span class="summary-value">Singapore → Bangkok | 28 June, 2025</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Trip 3</span>
                        <span class="summary-value">Bangkok → Kuala Lumpur | 2 July, 2025</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Travelers</span>
                        <span class="summary-value">2 Adults</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Class</span>
                        <span class="summary-value">Economy</span>
                    </div>
                </div>
            @endif




            <button class="checkout-btn">Confirm & Proceed</button>
        </div>
    </form>

    <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->
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
