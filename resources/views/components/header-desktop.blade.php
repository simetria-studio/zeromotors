
    <div class="container-custom">
        <div class="header-grid">
            <div class="logo">
                <a href="{{ route('site') }}"> <img src="{{ asset('site/img/logo.png') }}" alt=""></a>
            </div>
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('site.estoque') }}">ESTOQUE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site.venda') }}">VENDA SEU CARRO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('financiamento') }}">FINANCIE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SOBRE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contato') }}">CONTATO</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="whastapp">
                <div>
                    <h4>{{ getConfigs()->whatsapp ?? '41 99753-2000' }}</h4>
                </div>
                <div>
                    <img src="{{ asset('site/img/whatsapp.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="search">
        <div class="form-group">
            <input type="search" class="form-control" id="search" placeholder="PESQUISAR...">
        </div>
    </div>
