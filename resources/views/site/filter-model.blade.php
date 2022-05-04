
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
                                    <h6>{{ $veiculo->ano }} - {{ $veiculo->status }} </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach


