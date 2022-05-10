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
                    <div class="text-uppercase">
                        <h3>{{ $veiculo->marca }} - {{ $veiculo->modelo }}</h3>
                    </div>
                    <div>
                        <h3>{{ 'R$ ' . number_format($veiculo->preco, 2, ',', '.') }} </h3>
                    </div>
                    <div class="detail-grid">
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/calendar.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>ANO</h5>
                                <p>{{ $veiculo->ano }}</p>
                            </div>
                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/palette.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>COR</h5>
                                <p>{{ $veiculo->cor }}</p>
                            </div>

                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/speedometer.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>KM</h5>
                                <p>{{ $veiculo->km }}</p>
                            </div>
                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/status.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>STATUS</h5>
                                <p>{{ $veiculo->status }}</p>
                            </div>
                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/manual-transmission.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>CÂMBIO</h5>
                                <p>{{ $veiculo->cambio }}</p>
                            </div>

                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/car.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>PORTAS</h5>
                                <p>{{ $veiculo->portas }} PORTAS</p>
                            </div>

                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/engine.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>POTÊNCIA</h5>
                                <p>{{ $veiculo->potencia }} HP</p>
                            </div>
                        </div>
                        <div class="detail-flex">
                            <div>
                                <span><img src="{{ asset('site/img/icons/gas-station.png') }}" alt=""></span>
                            </div>
                            <div>
                                <h5>COMBUSTÍVEL</h5>
                                <p>{{ $veiculo->combustivel }}</p>
                            </div>

                        </div>
                    </div>
                    <div class="ficha">
                        <a href="{{ route('financiamento') }}"> <button class="btn btn-secondary">APROVE SUA FICHA</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="my-4 text-uppercase">
                <h3>Mais informações</h3>
            </div>
            {!! $veiculo->info !!}
        </div>
        <div class="my-4 text-uppercase">
            <h3>Opcional</h3>
        </div>
        <div class="opcional">
            @foreach ($veiculo->opcionais as $item)
                <div class="iten-opcional">
                    <p> <i class="fas fa-check-circle"></i> {{ $item->opcional }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
