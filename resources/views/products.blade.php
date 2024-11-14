<x-main-layout>
    <div class="row flex-nowrap justify-content-between g-0" id="products-page">
        <div class="col-9 d-flex flex-wrap justify-content-between" id="products-container">

            @foreach($products as $product)
                <div class="product flex-column d-flex align-items-center mb-3">
                    <div class="product-img">
                        <a href="/products/{{$product->id}}">
                            <img class="product-img"
                                 src="{{ 'storage/' . $product->imageCard()->image_name }}"
                                 alt="">
                        </a>
                    </div>
                    <div class="product-description w-100 d-flex">
                        <div class="description">
                            <div class="product-title">{{$product->title}}</div>
                            <div class="d-flex my-1">
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
                            <div class="d-flex">
                                <div class="product-price-weigh">{{$product->price}} р.</div>
                                <div class="product-price-weigh">{{$product->weight}} г.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1">
                            <img class="buy-img"
                                 src="{{ Vite::asset('resources/images/icon-shopping-cart.png') }}"
                                 alt="Корзина">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-3" id="filters">
            Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
            Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
            Один из столбцов Один из столбцовОдин из столбцов Один из столбцов Один из столбцов
        </div>

    </div>
    @vite(['resources/css/products.css'])
</x-main-layout>
