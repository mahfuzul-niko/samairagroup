<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Aviation Limited</title>
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

    <!-- Hero Slider Section Start -->
    <section class="hero-slider content-margin-top">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-bg">
                            <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                alt="Farming">
                        </div>
                        <div class="container">
                            <div class="hero-content">
                                <span class="welcome-text">Best Destinations around the world</span>
                                <h1>{{ $banner->title }}</h1>
                                <p>{{ $banner->subtitle }}</p>
                                <a href="{{ $banner->url }}" class="discover-btn">Find Out More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Slider Navigation -->
            <div class="slider-nav"></div>
            <!-- Journey Search Section Start -->
            <section class="journey-search-section">
                <div class="container">
                    <h2 class="journey-title mb-4"><span class="text-dark">Your Journey, Our Priority.</span></h2>
                    <div class="journey-search-box">
                        <ul class="nav nav-pills mb-3 journey-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="oneway-tab" data-bs-toggle="pill"
                                    data-bs-target="#oneway" type="button" role="tab">One Way</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="roundway-tab" data-bs-toggle="pill"
                                    data-bs-target="#roundway" type="button" role="tab">Round Way</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="multicity-tab" data-bs-toggle="pill"
                                    data-bs-target="#multicity" type="button" role="tab">Multi City</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="oneway" role="tabpanel">
                                {{-- form  --}}
                                <form class="row g-3 align-items-end journey-form">
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying from</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png"
                                                        alt="Plane Departure"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input" placeholder=""
                                                        name="from" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
                                                        @foreach ($froms as $from)
                                                            <div class="custom-dropdown-option">{{ $from->name }}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center justify-content-center">
                                        <div class="swap-icon-box d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/repeat.png"
                                                alt="Swap Icon" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying to</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png"
                                                        alt="Location"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="" name="to" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
                                                        @foreach ($tos as $to)
                                                            <div class="custom-dropdown-option">{{ $to->name }}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"
                                            tabindex="0">
                                            <div class="date-mini-box flex-grow-1">
                                                <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="" name="journey" autocomplete="off"
                                                        id="dateInput">

                                                    <a href="#" class="journey-add-return ms-2">
                                                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hyperlink.png"
                                                            alt="Return"> Add Return Trip
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="date-mini-box date-return-box flex-grow-1 d-none">
                                                <div class="journey-label-sm text-orange mb-1">Return Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="Return Date" name="return" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <!-- Replace the existing journey-input-box content with this -->
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange">Travelers & Class</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><i
                                                        class="fas fa-user-friends"></i></span>
                                                <input type="text" class="journey-value-input" name="travelers"
                                                    readonly value="1 Traveler" autocomplete="off">
                                            </div>
                                            <div class="journey-label-sm2">Economy</div>

                                            <!-- Travelers Dropdown -->
                                            <div class="travelers-dropdown">
                                                <div class="travelers-section">
                                                    <!-- Adults -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Adults</div>
                                                            <div class="traveler-age">12 years and above</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="adults">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="adults" placeholder="1" value="1">
                                                            <span class="counter-value" id="adultsCount">1</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="adults">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Children -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Children</div>
                                                            <div class="traveler-age">2-11 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="children">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="children" placeholder="0" value="0">
                                                            <span class="counter-value" id="childrenCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="children">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Infant -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Infant</div>
                                                            <div class="traveler-age">Below 2 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="infant">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="infant" placeholder="0" value="0">
                                                            <span class="counter-value" id="infantCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="infant">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Class Selection -->
                                                    <div class="class-selection">
                                                        <div class="class-type">Class</div>
                                                        <div class="class-options">
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="economy" checked>
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Economy</span>
                                                            </label>
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="business">
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Business</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Done Button -->
                                                    <button type="button" class="done-btn">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center mt-0">
                                        <button type="submit" class="btn journey-search-btn w-100"><i
                                                class="fas fa-search"></i> Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="roundway" role="tabpanel">
                                <form class="row g-3 align-items-end journey-form">
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying from</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png"
                                                        alt="Plane Departure"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Dhaka" name="from" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                    <div class="col-auto d-flex align-items-center justify-content-center">
                                        <div class="swap-icon-box d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/repeat.png"
                                                alt="Swap Icon" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying to</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png"
                                                        alt="Location"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Singapore" name="to" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                        <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"
                                            tabindex="0">
                                            <div class="date-mini-box flex-grow-1">
                                                <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="24 April, 2025" name="date"
                                                        autocomplete="off">
                                                    <a href="#" class="journey-add-return ms-2">
                                                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/hyperlink.png"
                                                            alt="Return"> Add Return Trip
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="date-mini-box date-return-box flex-grow-1 d-none">
                                                <div class="journey-label-sm text-orange mb-1">Return Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="Return Date" name="return_date"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange">Travelers Class</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><i
                                                        class="fas fa-user-friends"></i></span>
                                                <input type="text" class="journey-value-input"
                                                    placeholder="1 Travelers" name="travelers" autocomplete="off">
                                                <!-- <select class="journey-value-input journey-select" name="travelers">
                            <option>1 Travelers, Economy</option>
                            <option>2 Travelers, Economy</option>
                            <option>1 Traveler, Business</option>
                            <option>2 Travelers, Business</option>
                          </select> -->
                                            </div>
                                            <div class="journey-label-sm2">Economy</div>

                                            <!-- Travelers Dropdown -->
                                            <div class="travelers-dropdown">
                                                <div class="travelers-section">
                                                    <!-- Adults -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Adults</div>
                                                            <div class="traveler-age">12 years and above</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="adults">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="adults" placeholder="1" value="1">
                                                            <span class="counter-value" id="adultsCount">1</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="adults">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Children -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Children</div>
                                                            <div class="traveler-age">2-11 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="children">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="children" placeholder="0" value="0">
                                                            <span class="counter-value" id="childrenCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="children">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Infant -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Infant</div>
                                                            <div class="traveler-age">Below 2 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="infant">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="infant" placeholder="0" value="0">
                                                            <span class="counter-value" id="infantCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="infant">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Class Selection -->
                                                    <div class="class-selection">
                                                        <div class="class-type">Class</div>
                                                        <div class="class-options">
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="economy" checked>
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Economy</span>
                                                            </label>
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="business">
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Business</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Done Button -->
                                                    <button type="button" class="done-btn">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center mt-0">
                                        <button type="submit" class="btn journey-search-btn w-100"><i
                                                class="fas fa-search"></i> Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="multicity" role="tabpanel">
                                <!-- First static row: with travelers/class and search button -->
                                <div class="row g-3 align-items-end journey-form mt-3" id="multicity-first-row">
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying from</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png"
                                                        alt="Plane Departure"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Dhaka" name="from" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                    <div class="col-auto d-flex align-items-center justify-content-center">
                                        <div class="swap-icon-box d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/repeat.png"
                                                alt="Swap Icon" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying to</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png"
                                                        alt="Location"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Singapore" name="to" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                        <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"
                                            tabindex="0">
                                            <div class="date-mini-box flex-grow-1">
                                                <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="24 April, 2025" name="date"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange">Travelers Class</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><i
                                                        class="fas fa-user-friends"></i></span>
                                                <input type="text" class="journey-value-input"
                                                    placeholder="1 Travelers" name="travelers" autocomplete="off">
                                                <!-- <select class="journey-value-input journey-select" name="travelers">
                            <option>1 Travelers, Economy</option>
                            <option>2 Travelers, Economy</option>
                            <option>1 Traveler, Business</option>
                            <option>2 Travelers, Business</option>
                          </select> -->
                                            </div>
                                            <div class="journey-label-sm2">Economy</div>

                                            <!-- Travelers Dropdown -->
                                            <div class="travelers-dropdown">
                                                <div class="travelers-section">
                                                    <!-- Adults -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Adults</div>
                                                            <div class="traveler-age">12 years and above</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="adults">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="adults" placeholder="1" value="1">
                                                            <span class="counter-value" id="adultsCount">1</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="adults">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Children -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Children</div>
                                                            <div class="traveler-age">2-11 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="children">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="children" placeholder="0" value="0">
                                                            <span class="counter-value" id="childrenCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="children">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Infant -->
                                                    <div class="traveler-row">
                                                        <div class="traveler-info">
                                                            <div class="traveler-type">Infant</div>
                                                            <div class="traveler-age">Below 2 years</div>
                                                        </div>
                                                        <div class="traveler-counter">
                                                            <button type="button" class="counter-btn minus"
                                                                data-type="infant">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="infant" placeholder="0" value="0">
                                                            <span class="counter-value" id="infantCount">0</span>
                                                            <button type="button" class="counter-btn plus"
                                                                data-type="infant">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Class Selection -->
                                                    <div class="class-selection">
                                                        <div class="class-type">Class</div>
                                                        <div class="class-options">
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="economy" checked>
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Economy</span>
                                                            </label>
                                                            <label class="class-option">
                                                                <input type="radio" name="cabinClass"
                                                                    value="business">
                                                                <span class="class-radio"></span>
                                                                <span class="class-label">Business</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Done Button -->
                                                    <button type="button" class="done-btn">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-1 d-flex align-items-center mt-0">
                      <button type="submit" class="btn journey-search-btn w-100"><i class="fas fa-search"></i> Search</button>
                    </div> -->
                                </div>
                                <!-- Second static row: Add Another City (no travelers/class) -->
                                <div class="row g-3 align-items-end journey-form mt-3" id="multicity-second-row">
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying from</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/plane.png"
                                                        alt="Plane Departure"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Dhaka" name="from" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                    <div class="col-auto d-flex align-items-center justify-content-center">
                                        <div class="swap-icon-box d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/repeat.png"
                                                alt="Swap Icon" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="journey-input-box clickable" tabindex="0">
                                            <div class="journey-label-sm text-orange mb-1">Flying to</div>
                                            <div
                                                class="journey-input-content d-flex align-items-center justify-content-between">
                                                <span class="journey-icon-center"><img
                                                        src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/location.png"
                                                        alt="Location"></span>
                                                <div class="custom-dropdown w-100 position-relative">
                                                    <input type="text"
                                                        class="journey-value-input custom-dropdown-input"
                                                        placeholder="Singapore" name="to" autocomplete="off">
                                                    <div class="custom-dropdown-list d-none position-absolute w-100 bg-white shadow rounded-3 mt-1"
                                                        style="z-index: 10; max-height: 220px; overflow-y: auto;">
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
                                        <div class="journey-input-box date-input-box clickable d-flex align-items-center gap-3 w-100"
                                            tabindex="0">
                                            <div class="date-mini-box flex-grow-1">
                                                <div class="journey-label-sm text-orange mb-1">Journey Date</div>
                                                <div class="d-flex align-items-center">
                                                    <span class="journey-icon-center me-2"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input type="text" class="journey-value-input date-picker"
                                                        placeholder="24 April, 2025" name="date"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div
                                            class="journey-input-box custom-input d-flex align-items-center justify-content-between add-city-container">
                                            <span class="add-city-text">Add Another City</span>
                                            <button type="button" class="remove-btn"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dynamic rows will be added here -->
                                <div id="multicity-container"></div>
                                <!-- Search Button for Multi City -->
                                <div id="multicity-search-btn-row" class="row">
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn journey-search-btn"><i
                                                class="fas fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="journey-popular-search mt-4">
              <span class="me-3 text-dark">Popular Searches:</span>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill me-2 mb-2">Dhaka</a>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill me-2 mb-2">Chittagong</a>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill me-2 mb-2">Sylhet</a>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill me-2 mb-2">Singapore</a>
              <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill me-2 mb-2">Kolkata</a>
            </div> -->
                </div>
            </section>
            <!-- Journey Search Section End -->
        </div>
    </section>
    <!-- Hero Slider Section End -->

    <!-- Popular Airlines Section Start -->
    <section class="popular-airlines-section py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="popular-airlines-title mb-3">Popular Airlines in Bangladesh</h2>
                    <p class="popular-airlines-subtitle">Book cheap flights on your favourite airlines</p>
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-md-12">
                    <div class="airline-logos-grid">
                        @foreach ($airlines as $airline)
                            <div class="airline-logo-item"><img
                                    src="{{ $airline->image ? Storage::url($airline->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Biman Bangladesh Airlines"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Airlines Section End -->

    <!-- Our Travel Partners start  -->
    <section class="sister-concern py-5">
        <div class="container text-center">
            <h3 class="mb-4">Our Travel Partners</h3>
            <div class="logos-wrapper">
                <div class="logos-slider">
                    <!-- First set of logos -->
                    <div class="d-flex">
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png"
                                alt="Logo 1" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png"
                                alt="Logo 2" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png"
                                alt="Logo 3" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png"
                                alt="Logo 4" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png"
                                alt="Logo 5" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png"
                                alt="Logo 6" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png"
                                alt="Logo 7" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png"
                                alt="Logo 8" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png"
                                alt="Logo 9" class="sister-logo">
                        </div>
                    </div>
                    <!-- Duplicate set of logos for seamless loop -->
                    <div class="d-flex">
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png"
                                alt="Logo 1" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png"
                                alt="Logo 2" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png"
                                alt="Logo 3" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png"
                                alt="Logo 4" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png"
                                alt="Logo 5" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png"
                                alt="Logo 6" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png"
                                alt="Logo 7" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png"
                                alt="Logo 8" class="sister-logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png"
                                alt="Logo 9" class="sister-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Travel Partners End  -->

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
    <script>
        $(function() {
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
                },
                on: {
                    init: function() {
                        const sliderNav = document.querySelector('.slider-nav');
                        sliderNav.innerHTML = '';
                        for (let i = 0; i < this.slides.length; i++) {
                            const button = document.createElement('button');
                            button.className = 'nav-button' + (i === 0 ? ' active' : '');
                            button.setAttribute('data-slide', i);
                            button.innerHTML = '<span class="nav-circle"></span>';
                            sliderNav.appendChild(button);
                        }
                        const navButtons = document.querySelectorAll('.nav-button');
                        navButtons.forEach((button, index) => {
                            button.addEventListener('click', function() {
                                heroSwiper.slideTo(index);
                                updateActiveButton(index);
                            });
                        });
                    }
                }
            });

            function updateActiveButton(index) {
                const navButtons = document.querySelectorAll('.nav-button');
                navButtons.forEach(button => button.classList.remove('active'));
                navButtons[index].classList.add('active');
            }
            heroSwiper.on('slideChange', function() {
                updateActiveButton(heroSwiper.realIndex);
            });
            // Mobile Menu Toggle
            $('.mobile-menu-btn').on('click', function() {
                $('.nav-menu').toggleClass('active');
                $(this).toggleClass('active');
            });
            // Handle Dropdown Menus
            const dropdownItems = document.querySelectorAll('.has-dropdown');
            let currentDropdown = null;

            function closeDropdown(dropdown) {
                if (dropdown) {
                    dropdown.classList.remove('show-dropdown');
                }
            }
            dropdownItems.forEach(item => {
                if (window.innerWidth >= 992) {
                    item.addEventListener('mouseenter', function() {
                        if (currentDropdown && currentDropdown !== this) {
                            closeDropdown(currentDropdown);
                        }
                        this.classList.add('show-dropdown');
                        currentDropdown = this;
                    });
                    item.addEventListener('mouseleave', function() {
                        closeDropdown(this);
                        currentDropdown = null;
                    });
                } else {
                    item.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (currentDropdown && currentDropdown !== this) {
                            closeDropdown(currentDropdown);
                        }
                        this.classList.toggle('show-dropdown');
                        currentDropdown = this.classList.contains('show-dropdown') ? this : null;
                    });
                }
            });
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.has-dropdown').length && currentDropdown) {
                    closeDropdown(currentDropdown);
                    currentDropdown = null;
                }
            });
            // Show return date box on Add Return Trip click (works for both tabs)
            $('.journey-add-return').on('click', function(e) {
                e.preventDefault();
                if (history.pushState) {
                    history.pushState(null, null, ' ');
                }
                var tabEl = document.querySelector('#roundway-tab');
                if (window.bootstrap && window.bootstrap.Tab) {
                    var tab = new bootstrap.Tab(tabEl);
                    tab.show();
                } else if ($(tabEl).tab) {
                    $(tabEl).tab('show');
                }
                setTimeout(function() {
                    var $roundwayTab = $('#roundway');
                    $roundwayTab.find('.journey-add-return').hide();
                    $roundwayTab.find('.date-return-box').removeClass('d-none').addClass('d-block');
                    $roundwayTab.find('.date-picker').each(function() {
                        if (!$(this).hasClass('flatpickr-input')) {
                            flatpickr(this, {
                                dateFormat: 'd F, Y',
                                minDate: 'today',
                                defaultDate: 'today',
                                allowInput: true
                            });
                        }
                    });
                }, 150);
            });
            // When One Way tab is clicked, reset Add Return Trip design
            $('#oneway-tab').on('click', function(e) {
                e.preventDefault();
                if (history.pushState) {
                    history.pushState(null, null, ' ');
                }
                var tabEl = document.querySelector('#oneway-tab');
                if (window.bootstrap && window.bootstrap.Tab) {
                    var tab = new bootstrap.Tab(tabEl);
                    tab.show();
                } else if ($(tabEl).tab) {
                    $(tabEl).tab('show');
                }
                var $onewayTab = $('#oneway');
                $onewayTab.find('.journey-add-return').show();
                $onewayTab.find('.date-return-box').removeClass('d-block').addClass('d-none');
                $onewayTab.find('.date-picker').each(function() {
                    if (!$(this).hasClass('flatpickr-input')) {
                        flatpickr(this, {
                            dateFormat: 'd F, Y',
                            minDate: 'today',
                            defaultDate: 'today',
                            allowInput: true
                        });
                    }
                });
            });
            // Flatpickr JS
            flatpickr('.date-picker', {
                dateFormat: 'd F, Y',
                minDate: 'today',
                defaultDate: 'today',
                allowInput: true
            });
            // Custom Dropdown Live Search for 'Flying From'
            $(document).on('input focus', '.custom-dropdown-input', function() {
                var $input = $(this);
                var $dropdown = $input.siblings('.custom-dropdown-list');
                var filter = $input.val().toLowerCase();
                $('.custom-dropdown-list').addClass('d-none');
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
        });
    </script>


    <!-- Flatpickr JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/flatpickr.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all traveler input boxes
            const travelerBoxes = document.querySelectorAll('.journey-input-box');

            travelerBoxes.forEach(box => {
                if (box.querySelector('[name="travelers"]')) {
                    const dropdown = box.querySelector('.travelers-dropdown');
                    const travelersDisplay = box.querySelector('[name="travelers"]');
                    const classDisplay = box.querySelector('.journey-label-sm2');
                    const doneBtn = box.querySelector('.done-btn');

                    if (!dropdown) return; // Skip if no dropdown found

                    // State for this traveler box
                    const state = {
                        adults: 1,
                        children: 0,
                        infant: 0,
                        childrenAges: [],
                        cabinClass: 'Economy'
                    };
                    // Make sure Economy is selected by default
                    const economyRadio = box.querySelector('input[name="cabinClass"][value="economy"]');
                    if (economyRadio) {
                        economyRadio.checked = true;
                        // Update the display immediately
                        if (classDisplay) {
                            classDisplay.textContent = state.cabinClass;
                        }
                    }

                    // Toggle dropdown
                    box.addEventListener('click', function(e) {
                        e.stopPropagation();
                        // Close all other dropdowns first
                        document.querySelectorAll('.travelers-dropdown').forEach(d => {
                            if (d !== dropdown) d.classList.remove('active');
                        });
                        dropdown.classList.toggle('active');
                        console.log('Toggling dropdown');
                    });

                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!box.contains(e.target)) {
                            dropdown.classList.remove('active');
                        }
                    });

                    // Prevent dropdown from closing when clicking inside it
                    dropdown.addEventListener('click', function(e) {
                        e.stopPropagation();
                    });

                    // Handle counter buttons
                    box.querySelectorAll('.counter-btn').forEach(button => {
                        button.addEventListener('click', function(e) {
                            e.stopPropagation();
                            const type = button.dataset.type;
                            const isPlus = button.classList.contains('plus');

                            updateCount(type, isPlus);
                            updateDisplay();
                        });
                    });

                    function updateCount(type, isPlus) {
                        const limits = {
                            adults: {
                                min: 1,
                                max: 5
                            },
                            children: {
                                min: 0,
                                max: 4
                            },
                            infant: {
                                min: 0,
                                max: 4
                            }
                        };

                        if (isPlus && state[type] < limits[type].max) {
                            state[type]++;
                            if (type === 'children') {
                                state.childrenAges.push(2);
                                updateChildrenAgeSelects();
                            }
                        } else if (!isPlus && state[type] > limits[type].min) {
                            state[type]--;
                            if (type === 'children') {
                                state.childrenAges.pop();
                                updateChildrenAgeSelects();
                            }
                        }

                        // Update both the span and input field
                        const spanElement = box.querySelector(`#${type}Count`);
                        const inputElement = box.querySelector(`input[name="${type}"]`);
                        
                        if (spanElement) {
                            spanElement.textContent = state[type];
                        }
                        if (inputElement) {
                            inputElement.value = state[type];
                        }
                        
                        updateButtonStates();
                    }

                    function updateButtonStates() {
                        box.querySelectorAll('.counter-btn').forEach(button => {
                            const type = button.dataset.type;
                            const isPlus = button.classList.contains('plus');
                            const count = state[type];

                            if (isPlus) {
                                button.disabled = (type === 'adults' && count >= 9) ||
                                    (type === 'children' && count >= 8) ||
                                    (type === 'infant' && count >= 4);
                            } else {
                                button.disabled = (type === 'adults' && count <= 1) ||
                                    ((type === 'children' || type === 'infant') && count <= 0);
                            }
                        });
                    }

                    // Handle cabin class selection
                    box.querySelectorAll('input[name="cabinClass"]').forEach(input => {
                        input.addEventListener('change', function(e) {
                            e.stopPropagation();
                            // Capitalize first letter for display
                            state.cabinClass = e.target.value.charAt(0).toUpperCase() + e
                                .target.value.slice(1);
                            updateDisplay();
                        });
                    });

                    function createChildAgeSelect(index) {
                        const div = document.createElement('div');
                        div.className = 'child-age-row';

                        const label = document.createElement('div');
                        label.className = 'child-age-label';
                        label.textContent = `Child ${index + 1} age`;

                        const select = document.createElement('select');
                        select.className = 'child-age-select';
                        select.setAttribute('data-index', index);

                        for (let i = 2; i <= 11; i++) {
                            const option = document.createElement('option');
                            option.value = i;
                            option.textContent = `${i}`;
                            if (i === state.childrenAges[index]) {
                                option.selected = true;
                            }
                            select.appendChild(option);
                        }

                        select.addEventListener('change', function(e) {
                            state.childrenAges[index] = parseInt(e.target.value);
                        });

                        div.appendChild(label);
                        div.appendChild(select);
                        return div;
                    }

                    function updateChildrenAgeSelects() {
                        const container = box.querySelector('.children-age-container');
                        if (!container) return;

                        container.innerHTML = '';
                        for (let i = 0; i < state.children; i++) {
                            container.appendChild(createChildAgeSelect(i));
                        }
                    }

                    function updateDisplay() {
                        const totalTravelers = state.adults + state.children + state.infant;
                        const travelersText =
                            `${totalTravelers} ${totalTravelers === 1 ? 'Traveler' : 'Travelers'}`;

                        travelersDisplay.value = travelersText;
                        if (classDisplay) {
                            classDisplay.textContent = state.cabinClass;
                        }
                    }

                    // Done button
                    if (doneBtn) {
                        doneBtn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            dropdown.classList.remove('active');
                        });
                    }

                    // Initial setup
                    updateButtonStates();
                    updateDisplay();
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('multicity-container');
            const MAX_ROWS = 3;

            function createRow(isRemovable = true) {
                const row = document.createElement('div');
                row.className = 'row g-3 align-items-end journey-form mt-3';
                row.innerHTML = `
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
    <div class="col-auto d-flex align-items-center justify-content-center">
      <div class="swap-icon-box d-flex align-items-center justify-content-center">
        <img src="{{ asset('assets/frontassets/') }}/images/samaira-mptravels/repeat.png" alt="Swap Icon" />
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
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="journey-input-box custom-input d-flex align-items-center justify-content-between add-city-container">
        <span class="add-city-text">Add Another City</span>
        ${isRemovable ? `<button type="button" class="remove-btn"><i class="fas fa-times"></i></button>` : ''}
      </div>
    </div>
        `;
                return row;
            }

            function updateAddCityListeners() {
                // Get all rows in the container
                const allRows = container.querySelectorAll('.row');

                // Hide all add city texts and remove buttons initially
                container.querySelectorAll('.add-city-container').forEach(box => {
                    const addCityText = box.querySelector('.add-city-text');
                    const removeBtn = box.querySelector('.remove-btn');

                    if (addCityText) addCityText.style.display = 'none';
                    if (removeBtn) removeBtn.style.display = 'none';
                });

                // Show "Add Another City" text only on the last row (if under max limit)
                if (allRows.length > 0 && allRows.length < MAX_ROWS) {
                    const lastRow = allRows[allRows.length - 1];
                    const lastAddCityBox = lastRow.querySelector('.add-city-container');
                    if (lastAddCityBox) {
                        const addCityText = lastAddCityBox.querySelector('.add-city-text');
                        if (addCityText) addCityText.style.display = 'block';
                    }
                }

                // Show remove button on all dynamic rows (all rows except the static second row)
                allRows.forEach((row, index) => {
                    const addCityBox = row.querySelector('.add-city-container');
                    if (addCityBox) {
                        const removeBtn = addCityBox.querySelector('.remove-btn');
                        if (removeBtn) {
                            removeBtn.style.display = 'block';
                        }
                    }
                });

                // Add click listener to the last row's "Add Another City" text
                if (allRows.length > 0 && allRows.length < MAX_ROWS) {
                    const lastRow = allRows[allRows.length - 1];
                    const lastAddCityBox = lastRow.querySelector('.add-city-container');
                    if (lastAddCityBox) {
                        // Remove existing listeners
                        const newAddCityBox = lastAddCityBox.cloneNode(true);
                        lastAddCityBox.parentNode.replaceChild(newAddCityBox, lastAddCityBox);

                        // Add new listener
                        newAddCityBox.addEventListener('click', function(e) {
                            if (e.target.closest('.remove-btn')) return;
                            if (container.children.length < MAX_ROWS) {
                                const newRow = createRow(true);
                                container.appendChild(newRow);
                                updateAddCityListeners();
                            }
                        });
                    }
                }

                // Add remove button listeners
                container.querySelectorAll('.remove-btn').forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const row = btn.closest('.row');
                        if (row) {
                            row.remove();
                            updateAddCityListeners();
                        }
                    });
                });
            }

            // Initial setup
            updateAddCityListeners();

            // Attach event to the static second row's add city button
            const staticAddCityBox = document.querySelector('#multicity-second-row .add-city-container');
            if (staticAddCityBox) {
                // Hide the remove button on static second row
                const staticRemoveBtn = staticAddCityBox.querySelector('.remove-btn');
                if (staticRemoveBtn) {
                    staticRemoveBtn.style.display = 'none';
                }

                // Show "Add Another City" text initially
                const staticAddCityText = staticAddCityBox.querySelector('.add-city-text');
                if (staticAddCityText) {
                    staticAddCityText.style.display = 'block';
                }

                staticAddCityBox.addEventListener('click', function(e) {
                    if (e.target.closest('.remove-btn')) return;
                    if (container.children.length === 0) {
                        const newRow = createRow(true);
                        container.appendChild(newRow);
                        updateAddCityListeners();
                    }
                });
            }
        });
    </script>

    <!-- popular section er opore margin barano  -->
    <script>
        function adjustPopularSectionPosition() {
            var journeySection = document.querySelector('.journey-search-section');
            var popularSection = document.querySelector('.popular-airlines-section');
            if (!journeySection || !popularSection) return;

            // Detect which tab is active
            var multiCityTab = document.getElementById('multicity-tab');
            var multiCityPane = document.getElementById('multicity');
            var isMultiCityActive = multiCityTab && multiCityTab.classList.contains('active');
            // Fallback: check if multicity pane is visible
            if (!isMultiCityActive && multiCityPane) {
                isMultiCityActive = multiCityPane.classList.contains('active') || multiCityPane.classList.contains('show');
            }

            if (isMultiCityActive) {
                // Only adjust margin if Multi City is active
                var heroSlider = document.querySelector('.hero-slider');
                if (!heroSlider) return;
                var journeyRect = journeySection.getBoundingClientRect();
                var heroRect = heroSlider.getBoundingClientRect();
                var offset = (journeyRect.bottom - heroRect.bottom);
                popularSection.style.marginTop = Math.max(offset + 32, 32) + 'px'; // 32px for spacing
            } else {
                // Reset margin when not in Multi City
                popularSection.style.marginTop = '32px';
            }
        }

        // Run on page load and whenever multicity rows are added/removed
        window.addEventListener('DOMContentLoaded', adjustPopularSectionPosition);
        window.addEventListener('resize', adjustPopularSectionPosition);

        // Observe DOM changes in the journey search section
        var journeySection = document.querySelector('.journey-search-section');
        if (journeySection) {
            var observer = new MutationObserver(adjustPopularSectionPosition);
            observer.observe(journeySection, {
                childList: true,
                subtree: true
            });
        }

        // Listen for tab changes (Bootstrap tabs)
        document.querySelectorAll('[data-bs-toggle="pill"]').forEach(function(tabBtn) {
            tabBtn.addEventListener('shown.bs.tab', function() {
                setTimeout(adjustPopularSectionPosition, 100); // Wait for DOM update
            });
        });
    </script>
    <script>
        const input = document.getElementById('dateInput');
        const today = new Date();

        const options = {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        };
        const formattedDate = today.toLocaleDateString('en-US', options);

        input.placeholder = formattedDate;
        input.value = formattedDate;
    </script>

</body>

</html>
