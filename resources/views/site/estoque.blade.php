@extends('layouts.site')
@section('content')
    <div class="container my-5">
        <div>
            <div class="row justify-content-center">
                <div class="filter col-md-4">
                    <div class="form-group">
                        <select class="form-control" id="orderby">
                            <option>Ordenar por</option>
                            <option value="menor-preco">Menor Preço</option>
                            <option value="maior-preco">Maior Preço</option>
                            <option value="maior-ano">Maior Ano</option>
                            <option value="menor-ano">Menor Ano</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-grid">
            @foreach ($veiculos as $veiculo)
                <div>
                    <a href="{{ route('site.car.detail', $veiculo->id) }}">
                        <div class="product">
                            <div class="product-img">
                                @foreach ($veiculo->imagens as $item)
                                    @if ($loop->first)
                                        <img src="{{ asset($item->path) }}" alt="" />
                                    @endif
                                @endforeach
                            </div>
                            <div class="product-desc">
                                <div>
                                    <h4>{{ $veiculo->modelo }} </h4>
                                    <h6>{{ $veiculo->ano }} - {{ $veiculo->status }} - {{  'R$ '.number_format($veiculo->preco, 2, ',', '.') }} </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $veiculos->links() }}
    </div>
@endsection
