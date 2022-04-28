<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Opcionais</h3>
            </div>

            <div class="card-body">
                <div class="form-group col-12 mb-2 required" data-check="foto">
                    <div class="row">
                        @foreach ($opt as $key => $value)
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="opcionais[]"
                                        id="customCheckbox{{ $key }}" value="{{ $value }}">
                                    <label for="customCheckbox{{ $key }}" class="custom-control-label">{{ $value }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
