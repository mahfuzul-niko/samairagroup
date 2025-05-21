@php
$concerns = App\Models\SamairaGroup::orderBy('order')->get();
@endphp

<nav class="rg-navbar all-page-navbar">
    <div class="rg-navbar-container">
      <a href="#" class="rg-navbar-logo"><img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" /></a>
      <button class="rg-navbar-toggle" aria-label="Toggle menu">
        <span class="rg-navbar-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <span class="rg-navbar-close"><i class="fa fa-times"></i></span>
      </button>
      <ul class="rg-navbar-menu">
        <li><a href="{{ route('page.home') }}">Home</a></li>
        <!-- <li class="rg-navbar-has-dropdown">
          <a href="#">Home <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Overview</a>
            <a href="#">Our Mission</a>
            <a href="#">Leadership</a>
          </div>
        </li> -->
        <li class="rg-navbar-has-mega" id="brands-trigger">
          <a href="#">Brands <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <!-- Mobile Mega Menu (inside <li>) -->
          <div class="rg-mega-menu mobile-mega-menu" id="brands-mega-menu-mobile">
            <div class="rg-mega-menu-content">
              @foreach ($concerns as $concern)
              <a href="{{ $concern->concern_link }}"><img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}" alt="Teer"></a>
              @endforeach
            </div>
          </div>
        </li>
         {{-- <li class="rg-navbar-has-dropdown">
          <a href="#">Enterprize <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Samaira Skill Development Institute</a>
            <a href="#">Samaira Language Institute</a>
            <a href="#">Samaira Aviation Limited</a>
          </div>
        </li>
        <li class="rg-navbar-has-dropdown">
          <a href="#">dfgdf <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Samaira Skill Development Institute</a>
            <a href="#">Samaira Language Institute</a>
            <a href="#">Samaira Aviation Limited</a>
          </div>
        </li>  --}}
        {{-- <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>  --}}
        {{$nav}}
      </ul>
      <!-- Desktop Mega Menu (outside <li>) -->
      <div class="rg-mega-menu desktop-mega-menu" id="brands-mega-menu-desktop">
        <div class="rg-mega-menu-content">
          @foreach ($concerns as $concern)
              <a href="{{ $concern->concern_link }}"><img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}" alt="Teer"></a>
              @endforeach
        </div>
      </div>
    </div>
  </nav>