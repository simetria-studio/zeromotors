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
                <form
                    action="@isset($car) {{ route('car.update', $car->id) }}@else{{ route('car.store') }} @endisset"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body tab p-0">
                        <div class="container">
                            @if (!isset($car))
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
                            @endif

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
                                                    @if (isset($car))
                                                        @foreach ($car->imagens as $item)
                                                                <div class="col-6 col-md-3 mb-2 preview-foto">
                                                                    <input type="hidden" class="fotoVal" value="{{ $item->id }}">
                                                                    <button type="button"
                                                                        class="btn mb-3 btn-custom-1 btn-remove-foto">x</button>
                                                                    <input type="file" name="foto[]" class="d-none fotoIn"
                                                                        id="fotoPath">
                                                                    <div class="foto"><img
                                                                            class="rounded img-fluid"
                                                                            src="{{ asset($item->path) }}">
                                                                    </div>
                                                                </div>
                                                         
                                                        @endforeach
                                                    @endif

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">KM</label>
                                                <input type="text" class="form-control" value="{{ $car->km ?? '' }}"
                                                    id="km" name="km">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">COR</label>
                                                <input type="text" class="form-control" value="{{ $car->cor ?? '' }}"
                                                    name="cor">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Cambio</label>
                                                    <select class="form-control" name="cambio">
                                                        <option>Selecione </option>
                                                        <option value="Manual"
                                                            @if (isset($car)) {{ $car->cambio == 'Manual' ? 'selected' : '' }} @endif>
                                                            Manual</option>
                                                        <option value="Automático"
                                                            @if (isset($car)) {{ $car->cambio == 'Automático' ? 'selected' : '' }} @endif>
                                                            Automático</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Potencia</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $car->potencia ?? '' }}" id="potencia" name="potencia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Portas</label>
                                                <select class="form-control" name="portas">
                                                    <option>Selecione </option>
                                                    <option value="4"
                                                        @if (isset($car)) {{ $car->portas == '4' ? 'selected' : '' }} @endif>
                                                        4 Portas</option>
                                                    <option value="2"
                                                        @if (isset($car)) {{ $car->portas == '2' ? 'selected' : '' }} @endif>
                                                        2 Portas</option>
                                                    <option value="5"
                                                        @if (isset($car)) {{ $car->portas == '5' ? 'selected' : '' }} @endif>
                                                        5 Portas</option>
                                                    <option value="6"
                                                        @if (isset($car)) {{ $car->portas == '6' ? 'selected' : '' }} @endif>
                                                        6 Portas</option>
                                                    <option value="3"
                                                        @if (isset($car)) {{ $car->portas == '3' ? 'selected' : '' }} @endif>
                                                        3 Portas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Combustivel</label>
                                                    <select class="form-control" name="combustivel">
                                                        <option>Selecione </option>
                                                        <option value="flex"
                                                            @if (isset($car)) {{ $car->combustivel == 'flex' ? 'selected' : '' }} @endif>
                                                            Flex</option>
                                                        <option value="total flex"
                                                            @if (isset($car)) {{ $car->combustivel == 'total flex' ? 'selected' : '' }} @endif>
                                                            Total Flex</option>
                                                        <option value="elétrico"
                                                            @if (isset($car)) {{ $car->combustivel == 'elétrico' ? 'selected' : '' }} @endif>
                                                            Elétrico</option>
                                                        <option value="gasolina"
                                                            @if (isset($car)) {{ $car->combustivel == 'gasolina' ? 'selected' : '' }} @endif>
                                                            Gasolina</option>
                                                        <option value="alcool"
                                                            @if (isset($car)) {{ $car->combustivel == 'alcool' ? 'selected' : '' }} @endif>
                                                            Alcool</option>
                                                        <option value="diesel"
                                                            @if (isset($car)) {{ $car->combustivel == 'diesel' ? 'selected' : '' }} @endif>
                                                            Diesel</option>
                                                        <option value="hibrido"
                                                            @if (isset($car)) {{ $car->combustivel == 'hibrido' ? 'selected' : '' }} @endif>
                                                            Hibrido</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>Selecione </option>
                                                    <option value="novo"
                                                        @if (isset($car)) {{ $car->status == 'novo' ? 'selected' : '' }} @endif>
                                                        Novo</option>
                                                    <option value="usado"
                                                        @if (isset($car)) {{ $car->status == 'usado' ? 'selected' : '' }} @endif>
                                                        Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Preço de Venda</label>
                                                <input type="text" class="form-control" value="{{ $car->preco ?? '' }}"
                                                    id="preco" name="preco">
                                            </div>
                                        </div>
                                    </div>
                                    @component('components.opcionais', ['opt' => $opt, 'car' => $car])
                                    @endcomponent

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-default">
                                                <div class="card-header">
                                                    <h3 class="card-title">Mais informações</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div id="summernote">
                                                        @if (isset($car))
                                                            {!! $car->info !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-none">
                                                    <textarea name="info" id="text-code" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 my-4 mx-auto">
                                            <button type="submit" id="enviar" class="btn btn-light">Salvar</button>
                                        </div>
                                    </div>
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
    <script></script>
@endsection
