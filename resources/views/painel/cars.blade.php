@extends('layouts.painel')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todos os veiculos </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <div class="input-group-append">
                                <a href="{{ route('cars.add') }}">
                                    <button class="btn btn-light">Adicionar Novo</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Preço</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($veiculos as $veiculo)
                                <tr>
                                    <td>{{ $veiculo->id }}</td>
                                    <td>{{ $veiculo->marca }}</td>
                                    <td>{{ $veiculo->modelo }}</td>
                                    <td>{{ 'R$ ' . number_format($veiculo->preco, 2, ',', '.') }}</td>
                                    <td>Disponivel</td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <button class="btn btn-danger">Apagar</button>
                                            </div>
                                            <div>
                                                <a href="{{ route('cars.add', $veiculo->id) }}"> <button
                                                        class="btn btn-info">Editar</button></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
