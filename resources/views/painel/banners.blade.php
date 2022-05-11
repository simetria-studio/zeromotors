@extends('layouts.painel')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Cadastre os banners</h4>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Fotos dos banners</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-12 mb-2 required" data-check="foto">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-2 preview-foto">
                                            <button type="button" class="btn btn-custom-1 btn-add-foto mb-3">+</button>
                                            <input type="file" name="foto[]" class="d-none add-foto">
                                            <div class="foto"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-dark">Enviar</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $banner->id }}</td>
                                <td>
                                    <div>
                                        <img width="100" src="{{ asset($banner->path) }}" alt="">
                                    </div>
                                </td>
                                <td>
                                    @if ($banner->status == 1)
                                        Ativo
                                    @else
                                        Inativo
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <form action="{{ route('banner.status', $banner->id) }}" method="post">
                                                @csrf
                                                @if ($banner->status == 1)
                                                    <input type="hidden" name="status" value="0">
                                                    <button type="submit" class="btn btn-info">Desativar</button>
                                                @else
                                                    <input type="hidden" name="status" value="1">
                                                    <button type="submit" class="btn btn-success">Ativar</button>
                                                @endif


                                            </form>
                                        </div>
                                        <div class="mx-2">
                                            <a href="{{ route('banner.delete', $banner->id) }}"> <button
                                                    class="btn btn-danger">Apagar</button></a>
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
@endsection
