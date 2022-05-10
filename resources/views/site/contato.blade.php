@extends('layouts.site')
@section('content')
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
    <div class="text-center my-4">
        <h4>ENTRE EM CONTATO CONOSCO</h4>
    </div>
    <div class="text-center">
        <p>41 3311-1858</p>
        <p>41 99753-2000</p>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('contato.send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Assunto</label>
                        <input type="text" name="assunto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Celular</label>
                        <input type="text" name="celular" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Sua mensagem</label>
                        <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
