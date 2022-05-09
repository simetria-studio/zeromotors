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
                                <th>Modelo</th>
                                <th>Whatsapp</th>
                                <th>E-mail</th>
                                <th>Valor</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($financiamentos as $financiamento)
                                <tr>
                                    <td>{{ $financiamento->id }}</td>
                                    <td>{{ $financiamento->modelo }}</td>
                                    <td>{{ $financiamento->whatsapp }}</td>
                                    <td>{{ $financiamento->email }}</td>
                                    <td>{{ $financiamento->valor_financiamento }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                               <a href="{{ route('finaciamento.show', $financiamento->id) }}"> <button class="btn btn-info">Ver</button></a>
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
