<link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">
@php
    use Illuminate\Support\Facades\Route;

    $aboutRoute = match (true) {
        Route::is('page.home') => route('page.home.about'),
        Route::is('page.samairaskills') => route('page.ssdi.about'),
        default => route('page.home.about'),
    };
    $footerlinks = App\Models\FooterLink::orderBy('order')->get();
@endphp

<footer class="cg-footer-section py-4">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-12 d-flex align-items-center justify-content-center gap-3">
                <div class="flex-grow-1 border-top border-info"></div>
                <img src="{{ asset('assets/frontassets/') }}/images/logo1.png" alt="Samaira Group Logo"
                    class="cg-footer-main-logo">
                <div class="flex-grow-1 border-top border-info"></div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-2 mb-4 mb-md-0">
                <h3 class="text-info fw-bold border-bottom pb-2 mb-3">USEFUL LINKS</h3>
                <ul class="list-unstyled cg-footer-section-ul">


                    <li><a href="{{ $aboutRoute }}" class="text-decoration-none">About Us</a></li>



                    <li><a href="{{ route('page.home.privacy') }}" class="text-decoration-none">Privacy</a></li>
                    @foreach ($footerlinks as $links)
                        <li>
                            <a href="{{ $links->value }}" class="text-decoration-none">
                                {{ $links->key }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
                <iframe src="{{ $content->map ?? (system_key('system_footer_map') ?? 'system_footer_map') }}"
                    width="750" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-3">
                <h3 class="text-info fw-bold border-bottom pb-2 mb-3">CONTACT US</h3>
                <address class="text-info">
                    Office:<br>
                    {{ $content->office ?? (system_key('system_footer_top_address') ?? 'office address') }}<br><br>
                    @if (route::is('page.home'))
                        Branch Office:<br>
                        {{ system_key('system_footer_bottom_address') }}<br><br>
                    @endif
                    <a href="tel:{{ $content->phone ?? system_key('system_footer_phone') }}"
                        class="text-info text-decoration-underline">Phone:</a><br>
                    <a href="tel:{{ $content->phone ?? system_key('system_footer_phone') }}"
                        class="text-decoration-none text-dark">{{ system_key('system_footer_phone') }}</a><br>
                    <a href="https://wa.me/{{ ltrim($content->whatsapp ?? system_key('system_footer_whatsapp'), '+') }}"
                        target="_blank" class="text-info text-decoration-underline">WhatsApp:</a><br>
                    <a href="https://wa.me/{{ ltrim($content->whatsapp ?? system_key('system_footer_whatsapp'), '+') }}"
                        target="_blank"
                        class="text-decoration-none text-dark">{{ $content->whatsapp ?? system_key('system_footer_whatsapp') }}</a><br>

                </address>
            </div>
        </div>
        <div class="row border-top pt-3 align-items-center bottom-footer">
            <div class="col-md-8 small">
                Copyright © 2025. Samaira Group
            </div>
            <div class="col-md-4 d-flex justify-content-md-end justify-content-center gap-3 mt-3 mt-md-0">
                <a href="{{ $content->facebook ?? system_key('system_footer_facebook') }}"
                    class="rounded-circle d-flex align-items-center justify-content-center"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="{{ $content->youtube ?? system_key('system_footer_youtube') }}"
                    class="rounded-circle d-flex align-items-center justify-content-center"><i
                        class="fab fa-youtube"></i></a>
                <a href="{{ $content->twitter ?? system_key('system_footer_x') }}"
                    class="rounded-circle d-flex align-items-center justify-content-center"><i
                        class="fab fa-twitter"></i></a>
                <a href="{{ $content->linkedin ?? system_key('system_footer_linkedin') }}"
                    class="rounded-circle d-flex align-items-center justify-content-center"><i
                        class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
