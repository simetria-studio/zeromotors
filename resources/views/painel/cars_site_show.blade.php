@extends('layouts.painel')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Informações do veiculo</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Marca: {{ $car->marca }}</li>
                <li class="list-group-item">Modelo: {{ $car->modelo }}</li>
                <li class="list-group-item">Ano: {{ $car->ano }}</li>
                <li class="list-group-item">Cor: {{ $car->cor }}</li>
                <li class="list-group-item">Km: {{ $car->km }}</li>
                <li class="list-group-item">Opcionais: {{ $car->opcionais }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>Informações do vendedor</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nome: {{ $car->nome }}</li>
                <li class="list-group-item">E-mail: {{ $car->email }}</li>
                <li class="list-group-item">Whatsapp: {{ $car->whatsapp }}</li>
                <li class="list-group-item">Cep: {{ $car->cep }}</li>
                <li class="list-group-item">Endereço: {{ $car->endereco }}</li>
                <li class="list-group-item">Cidade: {{ $car->cidade }}</li>
                <li class="list-group-item">Estado: {{ $car->estado }}</li>
                <li class="list-group-item">Mensagem: {{ $car->mensagem }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>Fotos do veículo</h4>
        </div>
        <div class="card-body">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="car-image">
                            @foreach ($car->imagens as $item)
                                <div>
                                    <img src="{{ asset($item->path) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
