@php
$concerns = App\Models\SamairaGroup::orderBy('order')->get();
@endphp

<nav class="rg-navbar all-page-navbar">
    <div class="rg-navbar-container">
     {{$logo}}
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