<?php
$concern = \App\Models\FooterConcern::orderBy('order')->get();
$links = \App\Models\FooterLink::orderBy('order')->get();
?>
<footer class="footer-section mt-5 pt-5">
    <div class="container">
      <div class="row">

        <!-- Discover Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h4 class="mb-4">Our Concerns</h4>
          <ul class="list-unstyled">
            @foreach ($concern as $item)
              <li class="mb-2"><a href="{{ $item->value }}" class="text-decoration-none text-muted">{{ $item->key }}</a></li>
            @endforeach
            
          </ul>
        </div>

        <!-- Quick Links Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h4 class="mb-4">Quick Links</h4>
          <ul class="list-unstyled">
            @foreach ($links as $item)
            <li class="mb-2"><a href="{{ $item->value }}" class="text-decoration-none text-muted">{{ $item->key }}</a></li>
            @endforeach
          </ul>
        </div>

        <!-- Contact Us Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h4 class="mb-4">Contact Us</h4>
            <p class="text-muted mb-2">{{ system_key('system_footer_top_email') }}</p>
            <p class="text-muted mb-2">{{ system_key('system_footer_bottom_email') }}</p>
            <p class="text-muted mb-2">{{ system_key('system_footer_top_phone') }}</p>
            <p class="text-muted mb-2">{{ system_key('system_footer_bottom_phone') }}</p>
            
            <h4 class="mb-3">Our Address</h4>
            <p class="text-muted">
              {{ system_key('system_footer_address_top') }}<br>
              {{ system_key('system_footer_address_bottom') }}
            </p>
          </div>
          
          <!-- Get the app Column -->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-4">Get the app</h4>
            <div class="app-buttons">
              <a href="{{ system_key('system_footer_apple_url') }}" class="store-link mb-3">
                <img src="{{ asset('assets/frontassets/') }}/images/footer/Link.png" alt="Download on Apple Store" class="img-fluid w-100">
              </a>
              <a href="{{ system_key('system_footer_google_url') }}" class="store-link">
                <img src="{{ asset('assets/frontassets/') }}/images/footer/Link1.png" alt="Get it on Google Play" class="img-fluid w-100">
              </a>
            </div>
          </div>
          
      </div>
    </div>
  </footer>