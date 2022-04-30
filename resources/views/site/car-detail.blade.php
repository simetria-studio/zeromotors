@extends('layouts.site')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 product-left mb-5 mb-lg-0">
                <div class="swiper-container product-slider mb-3">
                    <div class="swiper-wrapper">
                        @foreach ($veiculo->imagens as $item)
                            <div class="swiper-slide s-full">
                                <img src="{{ asset($item->path) }}" alt="..." >
                            </div>
                        @endforeach



                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="swiper-container product-thumbs">
                    <div class="swiper-wrapper">
                        @foreach ($veiculo->imagens as $item)
                            <div class="swiper-slide s-thumb">
                                <img src="{{ asset($item->path) }}" alt="..." >
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
