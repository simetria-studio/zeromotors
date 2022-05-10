@extends('layouts.site')
@section('content')
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://dicas.olx.com.br/wp-content/uploads/2021/04/tipos-de-carros-capa.png"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://dicas.olx.com.br/wp-content/uploads/2021/01/carros-mais-vendidos-2021.png"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <div class="text-center my-4 text-main">
        <h4>FILTRE NOSSOS VEÍCULOS POR <span>MARCA</span></h4>
    </div>
    <div class="container">
        <div class="marcas">
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=bmw') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/bmw.svg') }}" alt="">
                        </div>
                        <div>
                            <p>BMW</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Jeep') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/jeep.svg') }}" alt="">
                        </div>
                        <div>
                            <p>JEEP</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Hyundai') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/hyundai.svg') }}" alt="">
                        </div>
                        <div>
                            <p>HYUNDAI</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Toyota') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/toyota.svg') }}" alt="">
                        </div>
                        <div>
                            <p>TOYOTA</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Ford') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/ford.svg') }}" alt="">
                        </div>
                        <div>
                            <p>FORD</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Honda') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/honda.svg') }}" alt="">
                        </div>
                        <div>
                            <p>HONDA</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Fiat') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site//img/fiat.svg') }}" alt="">
                        </div>
                        <div>
                            <p>FIAT</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Mercedes-Benz') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site//img/mercedez.svg') }}" alt="">
                        </div>
                        <div>
                            <p>MERCEDES-BENZ</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Renault') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/renault.svg') }}" alt="">
                        </div>
                        <div>
                            <p>RENAULT</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=VW - VolksWagen') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/volkswagen.svg') }}" alt="">
                        </div>
                        <div>
                            <p>VOLKSWAGEN</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=GM - Chevrolet') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/chevrolet.svg') }}" alt="">
                        </div>
                        <div>
                            <p>CHEVROLET</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="marca1">
                <a href="{{ url('filtroMarca?search=Mitsubishi') }}">
                    <div class="d-flex flex-column align-items-center p-3 itens">
                        <div>
                            <img src="{{ asset('site/img/mitsubish.svg') }}" alt="">
                        </div>
                        <div>
                            <p>MITSUBISHI</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center my-4 text-main">
        <h4>VEÍCULOS EM <span>DESTAQUE</span></h4>
    </div>
    <div class="container">
        <div class="product-grid">
            @foreach ($veiculos as $veiculo)
                <div>
                    <a href="{{ route('site.car.detail', $veiculo->id) }}">
                        <div class="product">
                            <div class="product-img">
                                @foreach ($veiculo->imagens as $item)
                                    @if ($loop->first)
                                        <img src="{{ asset($item->path) }}" alt="" />
                                    @endif
                                @endforeach
                            </div>
                            <div class="product-desc">
                                <div>
                                    <h4>{{ $veiculo->modelo }} </h4>
                                    <h6>{{ $veiculo->ano }} - {{ $veiculo->status }} </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="com-grid">
            <div class="com-content">
                <div class="com-text">
                    <div class="com-text-2">
                        <h3>COMPRAMOS SEU VEÍCULO</h3>
                        <p>
                            Venda seu carro em 30 minutos com segurança e pagamento a VISTA!
                        </p>
                    </div>
                </div>
                <div class="com-bottom text-center">
                    <a href="{{ route('site.venda') }}"> <button class="btn btn-danger">ENVIE SEU VEÍCULO</button></a>
                </div>
            </div>
            <div class="com-content">
                <div class="com-text-new">
                    <div class="com-text-2">
                        <h3>FINANCIE SEU SONHO</h3>
                        <p>
                            Trabalhamos com todas as financeiras do mercado para conseguir a
                            melhor taxa para você!
                        </p>
                    </div>
                </div>
                <div class="com-bottom text-center">
                    <a href="{{ route('financiamento') }}"><button class="btn btn-danger">FAÇA UMA SIMULAÇAO</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5 text-main">
        <h4>SIGA-NOS NAS <span>REDES SOCIAIS</span></h4>
    </div>
    <div class="container">
        <div class="social-grid">
            <div>
                <a href="https://www.instagram.com/zero41motors_curitiba/" target="_blank">
                    <div class="social-cont">
                        <div class="ml-4">
                            <img src="{{ asset('site/img/instagram.svg') }}" alt="" />
                        </div>
                        <div>
                            <h4>@zero41motors_curitiba</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="social-cont">
                        <div class="ml-4">
                            <img src="{{ asset('site/img/facebook.svg') }}" alt="" />
                        </div>
                        <div>
                            <h4>fb.com/zero4motors</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="social-cont">
                        <div class="ml-4">
                            <img src="{{ asset('site/img/youtube.svg') }}" alt="" />
                        </div>
                        <div>
                            <h4>zero4motors</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="contact-grid">
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.5393430449835!2d-49.24648968479742!3d-25.487053141390803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfb29c55efc07%3A0x94d9c28d87687819!2sAv.%20Mal.%20Floriano%20Peixoto%2C%206825%20-%20Boqueir%C3%A3o%2C%20Curitiba%20-%20PR%2C%2081650-000!5e0!3m2!1spt-BR!2sbr!4v1649336411542!5m2!1spt-BR!2sbr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contacts">
            <h2>Zero 41 Motors</h2>
            <h5><i class="fas fa-map-marker-alt"></i> Endereço: Rua Marechal Floriano Peixoto, 6825 - Boqueirão - Curitiba
            </h5>
            <h5><i class="fas fa-envelope"></i> Email: zero41motors@hotmail.com</h5>
            <h5><i class="fas fa-phone"></i> Telefone: 41 3311-1858</h5>
            <h5><i class="fab fa-whatsapp"></i> WhatsApp: 41 99753-2000</h5>
        </div>
    </div>
@endsection
