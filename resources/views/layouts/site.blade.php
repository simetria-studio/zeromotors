<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('site/css/main.min.css') }}">
    <title>ZERO 41 MOTORS</title>
</head>

<body>
    <header>
        <div class="header-desktop">
            @component('components.header-desktop')
            @endcomponent
        </div>
        <div class="header-mobile">
            @component('components.header-mobile')
            @endcomponent
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <a href="/">
                    <img src="{{ asset('site/img/logo.png') }}" alt="">
                </a>
            </div>
            <div class="container">
                <div class="footer-grid">
                    <div class="text-footer">
                        <h5>
                            HORÁRIO DE ATENDIMENTO<br />
                            DE SEGUNDA A SEXTA, DAS 08:00 ÀS 18:30<br />
                            SÁBADO DAS 08:00 ÀS 17:30
                        </h5>
                    </div>
                    <div class="center">
                        <h5>
                            CONSIGNAÇÃO E COMPRA<br />
                            {{ getConfigs()->telefone ?? ' 41 3311-1858 41' }}<br />
                            {{ getConfigs()->whatsapp ?? ' 41 99753-2000' }}
                        </h5>
                    </div>
                    <div>
                        <h5>
                            ENDEREÇO<br />
                            Rua Marechal Floriano Peixoto, 6825 - Boqueirão - Curitiba
                        </h5>
                    </div>
                </div>
                <div class="footer-icons">
                    <div class="d-flex justify-content-center">
                        <div class="mx-2" onclick="whatsappUrl()">
                            <img src="{{ asset('site/img/whatsapp2.svg') }}" alt="" />
                        </div>
                        <div class="mx-2" onclick="instagramUrl()">
                            <img src="{{ asset('site/img/instagram2.svg') }}" alt="" />
                        </div>
                        <div class="mx-2">
                            <img src="{{ asset('site/img/youtube2.svg') }}" alt="" />
                        </div>
                        <div class="mx-2">
                            <img src="{{ asset('site/img/facebook2.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>
