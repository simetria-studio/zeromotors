@extends('layouts.painel')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Configurações do site</h4>
            </div>
            <div class="card-body">
                <form action="@if (!isset($configs)){{ route('painel.store.config') }} @else {{ route('painel.update.config', $configs->id) }}  @endif" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">E-mail</label>
                                <input type="text" class="form-control" name="email" value="{{ $configs->email ?? '' }}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telefone</label>
                                <input type="text" class="form-control" name="telefone" value="{{ $configs->telefone ?? '' }}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Whastapp</label>
                                <input type="text" class="form-control" name="whatsapp" value="{{ $configs->whatsapp ?? '' }}" id="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <button class="btn btn-dark">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
