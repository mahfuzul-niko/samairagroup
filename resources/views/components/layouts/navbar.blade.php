@php
    $concerns = App\Models\SamairaGroup::orderBy('order')->get();
    use Illuminate\Support\Facades\Route;

    $aboutRoute = match (true) {
        Route::is('page.home.contact') => route('page.home.about'),
        Route::is('page.ssdi') || Route::is('page.ssdi.contact') || Route::is('page.ssdi.about') => route(
            'page.ssdi.about',
        ),
        Route::is('page.japan') || Route::is('page.japan.contact') || Route::is('page.japan.about') => route(
            'page.japan.about',
        ),
         Route::is('page.jphomes') || Route::is('page.jphomes.properties') || Route::is( 'page.jphomes.about') || Route::is('page.jphomes.contact')=> route(
            'page.jphomes.about',
        ),
        default => route('page.home.about'),
    };
    $contactRoute = match (true) {
        Route::is('page.home.about') => route('page.home.contact'),
        Route::is('page.ssdi') || Route::is('page.ssdi.about') || Route::is('page.ssdi.contact') => route(
            'page.ssdi.contact',
        ),
        Route::is('page.japan') || Route::is('page.japan.about') || Route::is('page.japan.contact') => route(
            'page.japan.contact',
        ),
         Route::is('page.jphomes') || Route::is('page.jphomes.properties') || Route::is( 'page.jphomes.about') || Route::is('page.jphomes.contact') => route(
            'page.jphomes.contact',
        ),
        default => route('page.home.contact'),
    };
    $logourl = match (true) {
        Route::is('page.ssdi') || Route::is('page.ssdi.about') || Route::is('page.ssdi.contact') => route('page.ssdi'),
        Route::is('page.japan') || Route::is( 'page.japan.about') || Route::is('page.japan.contact') => route('page.japan'),
        Route::is('page.jphomes') || Route::is('page.jphomes.properties') || Route::is( 'page.jphomes.about') || Route::is('page.jphomes.contact') => route('page.jphomes'),

        default => route('page.home'),
    };
    $logo = match (true) {
        Route::is('page.home.contact') => null,
        Route::is('page.home.about') => null,
        Route::is('page.ssdi') || Route::is('page.ssdi.contact') || Route::is('page.ssdi.about') => system_key(
            'samaira_skills_logo',
        ),
        Route::is('page.japan')  || Route::is('page.japan.contact') || Route::is('page.japan.about') => system_key(
            'samaira_language_logo',
        ),
        Route::is('page.jphomes') || Route::is('page.jphomes.properties') || Route::is('page.jphomes.contact') || Route::is('page.jphomes.about') => system_key(
            'samaira_jphomes_logo',
        ),
        default => system_key('samaira_group_logo'),
    };
@endphp

<nav class="rg-navbar all-page-navbar">
    <div class="rg-navbar-container">
        <a href="{{ $logourl }}" class="rg-navbar-logo"><img src="{{ $logo ? Storage::url($logo) : '' }}" /></a>
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
                <a href="#">Our Concerns <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
                <!-- Mobile Mega Menu (inside <li>) -->
                <div class="rg-mega-menu mobile-mega-menu" id="brands-mega-menu-mobile">
                    <div class="rg-mega-menu-content">
                        @foreach ($concerns as $concern)
                            <a href="{{ $concern->concern_link }}"><img
                                    src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                    alt="Teer"></a>
                        @endforeach
                    </div>
                </div>
            </li>
            <li><a href="{{ $aboutRoute }}">About Us</a></li>
            <li><a href="{{ $contactRoute }}">Contact Us</a></li>
            {{ $nav }}
        </ul>
        <!-- Desktop Mega Menu (outside <li>) -->
        <div class="rg-mega-menu desktop-mega-menu" id="brands-mega-menu-desktop">
            <div class="rg-mega-menu-content">
                @foreach ($concerns as $concern)
                    <a href="{{ $concern->concern_link }}"><img
                            src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                            alt="Teer"></a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
