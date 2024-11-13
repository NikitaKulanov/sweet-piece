<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    @vite(['resources/css/app.css'])
    @vite(['resources/css/home.css'])
    @vite(['resources/js/app.js'])

    <title>{{config('app.name')}}</title>
</head>
<body>
<header>
    <nav class="navbar navbar-header navbar-expand-lg navbar-light bg-light py-3">
        <div class="container-fluid px-4">
            <a id="sign-up" class="btn button-header px-2" href="#" role="button">
                <div class="sign-up-content">
                    <img class="header-img" src="{{ Vite::asset('resources/images/icon-sign-up.png') }}" alt=""><span
                        class="log_sign_text">Регистрация</span>
                </div>
            </a>

            <div class="container-wrapper">
                <div class="row">
                    <div class="col-md-auto d-flex align-items-center justify-content-center px-0">
                        <img id="map" class="img-50" onclick="location.href='{{url('/')}}';"
                             src="{{ Vite::asset('resources/images/icon-map.png') }}" alt="Карты">
                    </div>
                    <div class="col-md-auto">
                        <a id="logo" class="text-nowrap lh-1" href="/">Sweet Piece</a>
                    </div>
                    <div class="col-md-auto d-flex align-items-center justify-content-center px-0">
                        <img id="shopping" class="img-50" onclick="location.href='{{url('/')}}';"
                             src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}" alt="Корзина">
                    </div>
                </div>
            </div>

            <a id="log-in" class="btn button-header px-2" href="#" role="button">
                <div class="log-in-content">
                    <img class="header-img" src="{{ Vite::asset('resources/images/icon-log-in.png') }}" alt=""><span
                        class="log_sign_text">Вход</span>
                </div>
            </a>
        </div>
    </nav>
</header>

<main>
    <div id="content" style="height: 100vh">
        <div class="row flex-nowrap justify-content-between g-0" id="products-page">
            <div class="col-9 d-flex flex-wrap justify-content-between" id="products-container">

                <div class="product flex-column d-flex align-items-center mb-3">
                    <div class="product-img">
                        <a class="product_href" href="/product">
                            <img class="product-img"
                                 src="{{ Vite::asset('resources/images/products/tort-morkovnyj-ne-rezannyj-320x320.jpg') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="product-description w-100 d-flex">
                        <div class="description">
                            <div class="product-title">Санкт-Петербург</div>
                            <div class="d-flex product-rating">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                            </div>
                            <div class="d-flex">
                                <div class="product-price-weigh">1390 р.</div>
                                <div class="product-price-weigh">1500 г.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1">
                            <img class="buy-img"
                                 src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}"
                                 alt="Корзина">
                        </div>
                    </div>
                </div>

                <div class="product flex-column d-flex align-items-center mb-3">
                    <div class="product-img">
                        <a class="product_href" href="/product">
                            <img class="product-img"
                                 src="{{ Vite::asset('resources/images/products/tort-morkovnyj-ne-rezannyj-320x320.jpg') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="product-description w-100 d-flex">
                        <div class="description">
                            <div class="product-title">Санкт-Петербург</div>
                            <div class="d-flex product-rating">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                            </div>
                            <div class="d-flex">
                                <div class="product-price-weigh">1390 р.</div>
                                <div class="product-price-weigh">1500 г.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1">
                            <img class="buy-img"
                                 src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}"
                                 alt="Корзина">
                        </div>
                    </div>
                </div>
                <div class="product flex-column d-flex align-items-center mb-3">
                    <div class="product-img">
                        <a class="product_href" href="/product">
                            <img class="product-img"
                                 src="{{ Vite::asset('resources/images/products/tort-morkovnyj-ne-rezannyj-320x320.jpg') }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="product-description w-100 d-flex">
                        <div class="description">
                            <div class="product-title">Санкт-Петербург</div>
                            <div class="d-flex product-rating">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                                <img class="product-star"
                                     src="{{ Vite::asset('resources/images/products/icon-star.png') }}"
                                     alt="">
                            </div>
                            <div class="d-flex">
                                <div class="product-price-weigh">1390 р.</div>
                                <div class="product-price-weigh">1500 г.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1">
                            <img class="buy-img"
                                 src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}"
                                 alt="Корзина">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-3" id="filters">
                Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
                Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
                Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
            </div>

        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>
