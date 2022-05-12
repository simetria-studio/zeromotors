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
                                                <form action="{{ route('car.status', $veiculo->id) }}" method="post">
                                                    @csrf
                                                    @if ($veiculo->active == 1)
                                                        <input type="hidden" name="active" value="0">
                                                        <button type="submit" class="btn btn-primary">Desativar</button>
                                                    @else
                                                        <input type="hidden" name="active" value="1">
                                                        <button type="submit" class="btn btn-success">Ativar</button>
                                                    @endif
                                                </form>
                                            </div>
                                            <div class="mx-2">
                                                <a href="{{ route('car.delete', $veiculo->id) }}"> <button
                                                        class="btn btn-danger">Apagar</button></a>
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
