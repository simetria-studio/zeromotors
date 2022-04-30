@extends('layouts.site')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 product-left mb-5 mb-lg-0">
                <div class="swiper-container product-slider mb-3">
                    <div class="swiper-wrapper">
                        @foreach ($veiculo->imagens as $item)
                            <div class="swiper-slide s-full">
                                <img src="{{ asset($item->path) }}" alt="...">
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
                                <img src="{{ asset($item->path) }}" alt="...">
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="detail">
                    <div>
                        <h3>{{ $veiculo->marca }} - {{ $veiculo->modelo }}</h3>
                    </div>
                    <div>
                        <h3>{{ 'R$ ' . number_format($veiculo->preco, 2, ',', '.') }} </h3>
                    </div>
                    <div>
                        <div>
                            <p>{{ $veiculo->ano }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->cor }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->km }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->status }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->cambio }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->portas }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->potencia }}</p>
                        </div>
                        <div>
                            <p>{{ $veiculo->combustivel }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            @foreach ($veiculo->opcionais as $item)
                <p>{{$item->opcional}}</p>
            @endforeach

        </div>
    </div>
@endsection
