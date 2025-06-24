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
                <div class="swiper-slide">
                    <div class="slide-bg">
                        <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/bg.png" alt="Farming">
                    </div>
                    <div class="container">
                        <div class="hero-content">
                            <span class="welcome-text">Best Destinations around the world</span>
                            <h1>Travel, enjoy
                                and live a new
                                and full life</h1>
                            <p>Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it
                                engrossed listening. Park gate sell they west hard for the.</p>
                            <a href="#" class="discover-btn">Find Out More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slide-bg">
                        <img src="{{ asset('assets/frontassets/') }}/images/joypur-agro/bg.png" alt="Farming">
                    </div>
                    <div class="container">
                        <div class="hero-content">
                            <span class="welcome-text">WELCOME TO AGRIOS FARMING</span>
                            <h1>Agriculture<br>Eco Farming</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis pulvinar dapibus leo.</p>
                            <a href="#" class="discover-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Navigation -->
            <div class="slider-nav"></div>
            <!-- Journey Search Section Start -->
            <section class="journey-search-section">
                <div class="container">
                    <h2 class="journey-title mb-4"><span class="text-dark">Your Journey, Our Priority.</span></h2>
                    <div class="journey-search-box">

                        <div class="tab-pane fade show active" id="oneway" role="tabpanel">
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
                                                <input type="text" class="journey-value-input custom-dropdown-input"
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
                                                <input type="text" class="journey-value-input custom-dropdown-input"
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
                                                    placeholder="24 April, 2025" name="date" autocomplete="off">
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
                                                    placeholder="Return Date" name="return_date" autocomplete="off">
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
                                        <div class="journey-label-sm">Economy</div>
                                    </div>
                                </div>
                                <div class="col-md-1 d-flex align-items-center mt-0">
                                    <button type="submit" class="btn journey-search-btn w-100"><i
                                            class="fas fa-download"></i> Request</button>
                                </div>
                            </form>
                        </div>

                    </div>

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
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png"
                                alt="Biman Bangladesh Airlines"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png"
                                alt="Saudia"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png"
                                alt="Air Arabia"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png"
                                alt="Qatar Airways"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png"
                                alt="Emirates"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png"
                                alt="IndiGo"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png"
                                alt="US-Bangla Airlines"></div>
                        <div class="airline-logo-item"><img
                                src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png"
                                alt="Fly Dubai"></div>
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
                    // Create navigation buttons dynamically
                    const sliderNav = document.querySelector('.slider-nav');
                    sliderNav.innerHTML = ''; // Clear existing buttons

                    // Create buttons based on number of slides
                    for (let i = 0; i < this.slides.length; i++) {
                        const button = document.createElement('button');
                        button.className = 'nav-button' + (i === 0 ? ' active' : '');
                        button.setAttribute('data-slide', i);
                        button.innerHTML = '<span class="nav-circle"></span>';
                        sliderNav.appendChild(button);
                    }

                    // Add click handlers
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

        // Update active button
        function updateActiveButton(index) {
            const navButtons = document.querySelectorAll('.nav-button');
            navButtons.forEach(button => button.classList.remove('active'));
            navButtons[index].classList.add('active');
        }

        // Update buttons on slide change
        heroSwiper.on('slideChange', function() {
            updateActiveButton(heroSwiper.realIndex);
        });

        // Mobile Menu Toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
            this.classList.toggle('active');
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
                // Desktop hover behavior
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
                // Mobile click behavior
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

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.has-dropdown') && currentDropdown) {
                closeDropdown(currentDropdown);
                currentDropdown = null;
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            const isDesktop = window.innerWidth >= 992;

            dropdownItems.forEach(item => {
                // Remove existing event listeners
                const clone = item.cloneNode(true);
                item.parentNode.replaceChild(clone, item);

                if (isDesktop) {
                    // Add desktop hover behavior
                    clone.addEventListener('mouseenter', function() {
                        if (currentDropdown && currentDropdown !== this) {
                            closeDropdown(currentDropdown);
                        }
                        this.classList.add('show-dropdown');
                        currentDropdown = this;
                    });

                    clone.addEventListener('mouseleave', function() {
                        closeDropdown(this);
                        currentDropdown = null;
                    });
                } else {
                    // Add mobile click behavior
                    clone.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (currentDropdown && currentDropdown !== this) {
                            closeDropdown(currentDropdown);
                        }
                        this.classList.toggle('show-dropdown');
                        currentDropdown = this.classList.contains('show-dropdown') ? this : null;
                    });
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                if (!e.target.closest('.nav-menu') && !e.target.closest('.mobile-menu-btn')) {
                    document.querySelector('.nav-menu').classList.remove('active');
                    document.querySelector('.mobile-menu-btn').classList.remove('active');
                    if (currentDropdown) {
                        closeDropdown(currentDropdown);
                        currentDropdown = null;
                    }
                }
            }
        });
    </script>


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
            $(this).closest('.date-mini-box').siblings('.date-return-box').removeClass('d-none').addClass(
                'd-block');
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
