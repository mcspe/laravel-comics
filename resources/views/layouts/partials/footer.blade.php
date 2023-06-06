@php
    $footer_menu = config('menus.footer_menu');
@endphp

<footer>
    <section class="ms-cta">
        <div class="container d-flex justify-content-between p-5">
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                <span>Digital Comics</span>
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                <span>DC Merchandise</span>
            </a>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription">
                <span>Subscription</span>
            </a>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Comic Shop Locator">
                <span>Comic Shop Locator</span>
            </a>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC Power Visa">
                <span>DC Power Visa</span>
            </a>
        </div>
    </section>
    <section class="ms-footer-menu">
        <div class="container d-flex justify-content-between align-items-start h-100">
            <nav class="d-flex flex-column flex-wrap align-content-start w-100 py-3">
                @foreach ($footer_menu as $key => $menu)
                <div class="ms-menu my-2 mx-3 h-auto">
                    <h3 class="my-2">{{ $key }}</h3>
                    <ul class="p-0">
                        @foreach ($menu as $item)
                            <li>
                                <a href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </nav>
            <div class="logo w-75">
            </div>
        </div>
    </section>
    <section class="ms-connect">
        <div class="container d-flex justify-content-between align-items-center p-4">
            <button class="btn ms-btn text-white text-uppercase p-2">Sign up now!</button>
            <div class="ms-social d-flex justify-content-between align-items-center gap-2">
                <h5 class="text-uppercase me-4 mb-0">follow us</h5>
                <a href="#" class="">
                <img class="w-75" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook"></a>
                <a href="#" class="">
                <img class="w-75" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter"></a>
                <a href="#" class="">
                <img class="w-75" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube"></a>
                <a href="#" class="">
                <img class="w-75" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest"></a>
                <a href="#" class="">
                <img class="w-75" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope"></a>
            </div>
        </div>
    </section>
</footer>
