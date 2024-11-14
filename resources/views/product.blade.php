<x-main-layout>
    <div class="d-flex flex-column" id="product-page">

        <div class="d-flex justify-content-between pe-3 ps-1">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ассортимент</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$product->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
                </ol>
            </nav>

            <div id="rating" class="d-flex mt-2">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i - 0.5 <= $product->rating)
                        @if ($i - 0.5 == $product->rating)
                            <img class="star me-1"
                                 src="{{ Vite::asset('resources/images/products/star-0,5.png') }}"
                                 alt="">
                        @else
                            <img class="star me-1"
                                 src="{{ Vite::asset('resources/images/products/star-1.png') }}"
                                 alt="">
                        @endif
                    @else
                        <img class="star me-1"
                             src="{{ Vite::asset('resources/images/products/star-0.png') }}"
                             alt="">
                    @endif
                @endfor
            </div>

        </div>

        <div class="d-flex" id="product-details">

            <div id="carouselExampleCaptions" class="carousel slide col-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($product->imagesForCarousel() as $img)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" class="@if ($loop->first) active @endif" @if ($loop->first) aria-current="true" @endif aria-label="Slide 1"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($images as $img)
                        <div class="carousel-item @if ($loop->first) active @endif" data-bs-interval="5000">
                            <img src="{{ '/storage/' . $img->image_name }}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="product-info" class="d-flex flex-column col-6">

                <h1 id="title" class="col-11 align-self-center pb-1 mb-0">{{$product->title}}</h1>

                <div id="purchase" class="d-flex align-self-center col-11 mt-4">
                    <div id="price">
                        {{$product->price}} ₽
                    </div>
                    <div id="buy-button" class="btn btn-lg align-self-center">
                        Добавить в корзину
                    </div>
                </div>
                <div class="description mt-4 p-2">
                    <ul class="list-unstyled mb-0">
                        <li><strong>Вес:</strong> {{$product->weight}} г.</li>
                        <li><strong>Производитель:</strong> {{$product->manufacturer->name}}</li>
                        <li><strong>Артикул:</strong> ДФ-660 РИТЕЙЛ</li>
                    </ul>
                </div>
                <div class="description mt-4 p-2">
                    <strong>Теги #</strong>
                    <div class="d-flex flex-wrap">
                        <a class="btn tags-links me-1 mb-1" href="">КРУГЛЫЙ</a>
                        <a class="btn tags-links me-1 mb-1" href="">КРУГЛЫЙ</a>
                        <a class="btn tags-links me-1 mb-1" href="">КРУГЛЫЙ</a>
                        <a class="btn tags-links me-1 mb-1" href="">КРУГЛЫЙ</a>
                        <a class="btn tags-links me-1 mb-1" href="">КРУГЛЫЙ</a>
                    </div>
                </div>
                <div class="description mt-4 p-2">
                    {{$product->short_description}}
                </div>
            </div>
        </div>

        <div id="additional-info" class="pt-2">
            <div id="additional-bar" class="d-flex">
                <div class="item-bar mr-1 p-2 border-item">
                    Описание
                </div>
                <div class="item-bar mr-1 p-2 border-item">
                    Отзовы
                </div>
                <div class="item-bar mr-1 p-2 border-item">
                    Цены на продукты
                </div>
            </div>
            <div class="bar-description pt-2 px-3">
                {!! nl2br($product->description) !!}
            </div>
            <div class="bar-description">
                На доработке
            </div>
            <div class="bar-description">
                На доработке
            </div>
        </div>

    </div>
    @vite(['resources/css/product.css'])
    @vite(['resources/js/product.js'])
</x-main-layout>
