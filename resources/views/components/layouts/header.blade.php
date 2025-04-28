<section class="top-header py-2 bg-lightblue">
    <div class="container">
        <div class="header-content d-flex align-items-center">
            <!-- Logo -->
            <div class="site-logo">
                <a href="index.html">
                    <img src="{{ asset('assets/frontassets/') }}/images/logo.png" alt="Samaira Travels Logo"
                        class="logo-img">
                </a>
            </div>

            <!-- Contact Info -->
            <div class="contact-info">
                <div class="contact-item">
                    <img src="{{ asset('assets/frontassets/') }}/images/top-header/phone.png" alt="Phone Icon"
                        class="contact-icon">
                    <div class="contact-text">
                        <small>Call anytime</small>
                        <strong>{{ system_key('system_phone') ?? 'system_phone' }}</strong>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('assets/frontassets/') }}/images/top-header/Email.png" alt="Email Icon"
                        class="contact-icon">
                    <div class="contact-text">
                        <small>Send email</small>
                        <strong>{{ system_key('system_email') ?? 'system_email' }}</strong>
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('assets/frontassets/') }}/images/top-header/location.png" alt="Location Icon"
                        class="contact-icon">
                    <div class="contact-text">
                        <small>{{ system_key('system_address_top') ?? 'system_address_top' }}</small>
                        <strong>{{ system_key('system_address_bottom') ?? 'system_address_bottom' }}</strong>
                    </div>
                </div>
                <div class="contact-item">
                    <!-- Social Icons -->
                    <div class="social-icons-center">
                        <a href="{{ system_key('system_twitter') ?? 'system_twitter' }}" class="social-icon"><i
                                class="fab fa-twitter"></i></a>
                        <a href="{{ system_key('system_facebook') ?? 'system_facebook' }}" class="social-icon"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="{{ system_key('system_pinterest') ?? 'system_pinterest' }}" class="social-icon"><i
                                class="fab fa-pinterest-p"></i></a>
                        <a href="{{ system_key('system_instagram') ?? 'system_instagram' }}" class="social-icon"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
