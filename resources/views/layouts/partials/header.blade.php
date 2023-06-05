@php
    $menu = config('menus.header_menu');
    // dd($menu);
@endphp
<header>
    <div class="container ms-cont d-flex justify-content-between align-items-center bg-white">
        <div class="ms-logo h-100 p-2">
            <a class="h-100" href="{{ route('home') }}">
                <img src="dc-logo.png" alt="DC-logo">
            </a>
        </div>
        <nav class="ms-nav h-100">
            <ul class="h-100">
                @foreach ($menu as $item)
                    <li class="mx-2 h-100">
                        <a class="{{ Route::currentRouteName() === $item['href'] ? 'active' : ''}}" href="{{route($item['href'])}}">{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
