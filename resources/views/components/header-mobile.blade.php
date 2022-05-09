<div class="grid-mob">
    <div>
        <div class="logo-mobile">
            <a href="{{ route('site') }}"> <img src="{{ asset('site/img/logo.png') }}" alt=""></a>
        </div>
    </div>
    <div>
        <div class="btn-menu">
            <button><i class="fas fa-bars"></i></button>
        </div>
    </div>
</div>
<div class="search">
    <div class="form-group">
        <input type="search" class="form-control" placeholder="PESQUISAR...">
    </div>
</div>
<div class="menu-mobile d-none">
    <div class="menu-grid">
        <div class="menu-head">
            <button class="btn-close"><i class="fas fa-window-close"></i></button>
        </div>
        <div class="menu-body">
            <ul class="nav flex-column align-content-center">
                <li class="nav-item">
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
                    <a class="nav-link" href="#">CONTATO</a>
                </li>

            </ul>
        </div>
        <div class="menu-footer">

        </div>
    </div>
</div>
