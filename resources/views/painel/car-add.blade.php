@extends('layouts.painel')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Veículos </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <div class="input-group-append">

                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body tab p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <select class="form-control" id="marca" name="marca" data-live-search="true">
                                            <option>Selecione a marca</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <select class="form-control" id="modelo" name="modelo">
                                            <option>Selecione o modelo</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ano</label>
                                        <select class="form-control" id="ano" name="ano">
                                            <option>Selecione o ano</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Preço da FIPE</label>
                                        <input type="text" class="form-control" name="fipe" id="fipe" disabled>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Foto do veículo</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group col-12 mb-2 required" data-check="foto">
                                                <div class="row">
                                                    <div class="col-6 col-md-3 mb-2 preview-foto">
                                                        <button type="button"
                                                            class="btn btn-custom-1 btn-add-foto mb-3">+</button>
                                                        <input type="file" name="foto[]" class="d-none add-foto">
                                                        <div class="foto"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">KM</label>
                                        <input type="text" class="form-control" id="km" name="km">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">COR</label>
                                        <input type="text" class="form-control" name="cor">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Cambio</label>
                                            <select class="form-control" name="cambio">
                                                <option>Selecione </option>
                                                <option value="Manual">Manual</option>
                                                <option value="Auto">Automático</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Potencia</label>
                                        <input type="text" class="form-control" id="potencia" name="potencia">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Portas</label>
                                        <select class="form-control" name="portas">
                                            <option>Selecione </option>
                                            <option value="4">4 Portas</option>
                                            <option value="2">2 Portas</option>
                                            <option value="5">5 Portas</option>
                                            <option value="6">6 Portas</option>
                                            <option value="3">3 Portas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Combustivel</label>
                                            <select class="form-control" name="combustivel">
                                                <option>Selecione </option>
                                                <option value="flex">Flex</option>
                                                <option value="total flex">Total Flex</option>
                                                <option value="elétrico">Elétrico</option>
                                                <option value="gasolina">Gasolina</option>
                                                <option value="alcool">Alcool</option>
                                                <option value="diesel">Diesel</option>
                                                <option value="hibrido">Hibrido</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>Selecione </option>
                                            <option value="novo">Novo</option>
                                            <option value="usado">Usado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Preço de Venda</label>
                                        <input type="text" class="form-control" id="preco" name="preco">
                                    </div>
                                </div>
                            </div>
                            @component('components.opcionais', ['opt' => $opt])
                            @endcomponent

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Mais informações</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="summernote"></div>
                                        </div>
                                        <div class="d-none">
                                            <textarea name="info" id="text-code" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 my-4 mx-auto">
                                    <button type="submit" id="enviar" class="btn btn-light">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <script>

    </script>
@endsection
