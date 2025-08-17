@php
    $concerns = App\Models\SamairaGroup::orderBy('order')->get();
    use Illuminate\Support\Facades\Route;

    $aboutRoute = match (true) {
        Route::is('page.home.contact') => route('page.home.about'),
        Route::is('page.ssdi') ||
            Route::is('page.ssdi.contact') ||
            Route::is('page.ssdi.course') ||
            Route::is('page.ssdi.course.enroll') ||
            Route::is('page.ssdi.about')
            => route('page.ssdi.about'),
        Route::is('page.japan') ||
            Route::is('page.japan.contact') ||
            Route::is('page.japan.course') ||
            Route::is('page.japan.about')
            => route('page.japan.about'),
        Route::is('page.jphomes') ||
            Route::is('page.jphomes.SingleProperty') ||
            Route::is('page.jphomes.properties') ||
            Route::is('page.jphomes.about') ||
            Route::is('page.jphomes.contact')
            => route('page.jphomes.about'),

        Route::is('page.medica') ||
            Route::is('page.medica.shop') ||
            Route::is('page.medica.product') ||
            Route::is('page.medica.contact') ||
            Route::is('page.medica.about')
            => route('page.medica.about'),
        Route::is('page.emerging') ||
            Route::is('page.emerging.product') ||
            Route::is('page.emerging.contact') ||
            Route::is('page.emerging.about')
            => route('page.emerging.about'),
        Route::is('page.gold') || Route::is('page.gold.contact') || Route::is('page.gold.about') => route(
            'page.gold.about',
        ),
        Route::is('page.sps') || Route::is('page.sps.contact') || Route::is('page.sps.about') => route(
            'page.sps.about',
        ),
        Route::is('page.job') || Route::is('page.job.contact') || Route::is('page.job.about') => route(
            'page.job.about',
        ),
        Route::is('page.agro') || Route::is('page.agro.contact') || Route::is('page.agro.about') => route(
            'page.agro.about',
        ),
        Route::is('page.raisa') || Route::is('page.raisa.contact') || Route::is('page.raisa.about') => route(
            'page.raisa.about',
        ),
        Route::is('page.aviation') || Route::is('page.aviation.contact') || Route::is('page.aviation.about') => route(
            'page.aviation.about',
        ),
        default => route('page.home.about'),
    };
    $contactRoute = match (true) {
        Route::is('page.home.about') => route('page.home.contact'),
        Route::is('page.ssdi') ||
            Route::is('page.ssdi.about') ||
            Route::is('page.ssdi.course') ||
            Route::is('page.ssdi.course.enroll') ||
            Route::is('page.ssdi.contact')
            => route('page.ssdi.contact'),
        Route::is('page.japan') ||
            Route::is('page.japan.about') ||
            Route::is('page.japan.course') ||
            Route::is('page.japan.contact')
            => route('page.japan.contact'),

        Route::is('page.jphomes') ||
            Route::is('page.jphomes.SingleProperty') ||
            Route::is('page.jphomes.properties') ||
            Route::is('page.jphomes.about') ||
            Route::is('page.jphomes.contact')
            => route('page.jphomes.contact'),
        Route::is('page.medica') ||
            Route::is('page.medica.shop') ||
            Route::is('page.medica.product') ||
            Route::is('page.medica.about') ||
            Route::is('page.medica.contact')
            => route('page.medica.contact'),
        Route::is('page.emerging') ||
            Route::is('page.emerging.product') ||
            Route::is('page.emerging.about') ||
            Route::is('page.emerging.contact')
            => route('page.emerging.contact'),
        Route::is('page.gold') || Route::is('page.gold.about') || Route::is('page.gold.contact') => route(
            'page.gold.contact',
        ),
        Route::is('page.sps') || Route::is('page.sps.about') || Route::is('page.sps.contact') => route(
            'page.sps.contact',
        ),
        Route::is('page.job') || Route::is('page.job.about') || Route::is('page.job.contact') => route(
            'page.job.contact',
        ),
        Route::is('page.agro') || Route::is('page.agro.about') || Route::is('page.agro.contact') => route(
            'page.agro.contact',
        ),
        Route::is('page.raisa') || Route::is('page.raisa.about') || Route::is('page.raisa.contact') => route(
            'page.raisa.contact',
        ),
        Route::is('page.aviation') || Route::is('page.aviation.about') || Route::is('page.aviation.contact') => route(
            'page.aviation.contact',
        ),
        default => route('page.home.contact'),
    };
    $logourl = match (true) {
        Route::is('page.ssdi') ||
            Route::is('page.ssdi.about') ||
            Route::is('page.ssdi.course') ||
            Route::is('page.ssdi.course.enroll') ||
            Route::is('page.ssdi.contact')
            => route('page.ssdi'),
        Route::is('page.japan') ||
            Route::is('page.japan.about') ||
            Route::is('page.japan.course') ||
            Route::is('page.japan.contact')
            => route('page.japan'),
        Route::is('page.jphomes') ||
            Route::is('page.jphomes.SingleProperty') ||
            Route::is('page.jphomes.properties') ||
            Route::is('page.jphomes.about') ||
            Route::is('page.jphomes.contact')
            => route('page.jphomes'),

        Route::is('page.medica') ||
            Route::is('page.medica.shop') ||
            Route::is('page.medica.product') ||
            Route::is('page.medica.about') ||
            Route::is('page.medica.contact')
            => route('page.medica'),
        Route::is('page.emerging') ||
            Route::is('page.emerging.product') ||
            Route::is('page.emerging.about') ||
            Route::is('page.emerging.contact')
            => route('page.emerging'),
        Route::is('page.gold') || Route::is('page.gold.about') || Route::is('page.gold.contact') => route('page.gold'),
        Route::is('page.sps') || Route::is('page.sps.about') || Route::is('page.sps.contact') => route('page.sps'),
        Route::is('page.job') || Route::is('page.job.about') || Route::is('page.job.contact') => route('page.job'),
        Route::is('page.agro') || Route::is('page.agro.about') || Route::is('page.agro.contact') => route('page.agro'),
        Route::is('page.raisa') || Route::is('page.raisa.about') || Route::is('page.raisa.contact') => route(
            'page.raisa',
        ),
        Route::is('page.aviation') || Route::is('page.aviation.about') || Route::is('page.aviation.contact') => route(
            'page.aviation',
        ),
        default => route('page.home'),
    };
    $logo = match (true) {
        Route::is('page.home.contact') => null,
        Route::is('page.home.about') => null,
        Route::is('page.ssdi') ||
            Route::is('page.ssdi.contact') ||
            Route::is('page.ssdi.course') ||
            Route::is('page.ssdi.course.enroll') ||
            Route::is('page.ssdi.about')
            => system_key('samaira_skills_logo'),
        Route::is('page.japan') ||
            Route::is('page.japan.contact') ||
            Route::is('page.japan.course') ||
            Route::is('page.japan.about')
            => system_key('samaira_language_logo'),
        Route::is('page.jphomes') ||
            Route::is('page.jphomes.SingleProperty') ||
            Route::is('page.jphomes.properties') ||
            Route::is('page.jphomes.contact') ||
            Route::is('page.jphomes.about')
            => system_key('samaira_jphomes_logo'),
        Route::is('page.medica') ||
            Route::is('page.medica.shop') ||
            Route::is('page.medica.product') ||
            Route::is('page.medica.contact') ||
            Route::is('page.medica.about')
            => system_key('samaira_medica_logo'),
        Route::is('page.emerging') ||
            Route::is('page.emerging.product') ||
            Route::is('page.emerging.shop') ||
            Route::is('page.emerging.contact') ||
            Route::is('page.emerging.about')
            => system_key('samaira_emerging_logo'),
        Route::is('page.job') || Route::is('page.job.contact') || Route::is('page.job.about') => system_key(
            'samaira_job_logo',
        ),
        Route::is('page.sps') || Route::is('page.sps.contact') || Route::is('page.sps.about') => system_key(
            'samaira_sps_logo',
        ),
        Route::is('page.agro') || Route::is('page.agro.contact') || Route::is('page.agro.about') => system_key(
            'samaira_agro_logo',
        ),
        Route::is('page.raisa') || Route::is('page.raisa.contact') || Route::is('page.raisa.about') => system_key(
            'samaira_raisa_logo',
        ),
        Route::is('page.aviation') || Route::is('page.aviation.contact') || Route::is('page.aviation.about')
            => system_key('samaira_aviation_logo'),
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
        @if (Route::is('page.medica*', 'page.emerging*'))
            <div class="mobile-menu-cart">
                <a class="mini-cart-icon" href="http://127.0.0.1:8000/samaira-medica-limited/checkout">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="pro-count blue productCount">0</span>
                </a>
            </div>
        @endif
        <ul class="rg-navbar-menu">
            <li><a href="{{ route('page.home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ $logourl }}">Home</a></li>
            @if (isset($shop))
                {{ $shop }}
            @endif

            <li class="rg-navbar-has-mega" id="brands-trigger">
                <a href="#">Our Concerns <span class="rg-navbar-chevron"><i
                            class="fa fa-chevron-down"></i></span></a>
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
            <li class="rg-navbar-has-dropdown">
                <a href="#">Media <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
                <div class="rg-dropdown-menu">
                    {{-- <a href="{{ route('page.home.about') }}">About Us</a> --}}
                    <a href="{{ route('page.awards') }}">Awards and Achievements</a>
                    <a href="{{ route('page.chairman') }}">About Manageing Director</a>
                    <a href="{{ route('page.news') }}">News & Events</a>
                    <a href="{{ route('page.download') }}">Download</a>
                    <a href="{{ route('page.gallery') }}">Gallery</a>
                </div>
            </li>
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
