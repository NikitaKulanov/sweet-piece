<header>
    <nav class="navbar navbar-header navbar-expand-lg navbar-light bg-light py-3">
        <div class="container-fluid px-4">
            <a id="sign-up" class="btn button-header px-2 d-flex" href="#" role="button">
                <img class="header-img" src="{{ Vite::asset('resources/images/icon-sign-up.png') }}" alt="">
                <span class="log_sign_text">Регистрация</span>
            </a>

            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-center px-0">
                    <img id="map" class="img-50px" onclick="location.href='{{url('/')}}';"
                         src="{{ Vite::asset('resources/images/icon-map.png') }}" alt="Карты">
                </div>
                <a id="logo" class="text-nowrap lh-1 mx-3" href="/">Sweet Piece</a>

                <a id="shopping" href="/" class="d-flex position-relative align-items-center justify-content-center px-0">
                    <img class="img-50px" onclick="location.href='{{url('/')}}';"
                         src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}" alt="Корзина">
                    <span class="badge rounded-pill bg-danger">
                        99+
                    </span>
                </a>

            </div>

            <a id="log-in" class="btn button-header px-2 d-flex" href="#" role="button">
                <img class="header-img" src="{{ Vite::asset('resources/images/icon-log-in.png') }}" alt="">
                <span class="log_sign_text">Вход</span>
            </a>
        </div>
    </nav>
</header>
