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
        <div class="container d-flex justify-content-around align-items-center py-5">
            <nav class="d-flex flex-column flex-wrap align-content-start">
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
            <div class="logo">
                <!-- <img src="../../assets/img/dc-logo-bg.png" alt=""> -->
            </div>
        </div>
    </section>
</footer>
