@extends('layouts.painel')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todos os veiculos </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

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
                                <th>Whatsapp</th>
                                <th>E-mail</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->marca }}</td>
                                    <td>{{ $car->modelo }}</td>
                                    <td>{{ $car->whatsapp }}</td>
                                    <td>{{ $car->email }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <button class="btn btn-info">Ver</button>
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
