@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <h3>PRECISA VENDER SEU CARRO?</h3>
            <p>ENTÃO DEIXE ELE NA ZERO 41 MOTORS QUE NÓS FAZEMOS ISSO PARA VOCÊ!</p>
        </div>
        <div class="text-center">
            <h5>DADOS DO VEÍCULO</h5>
        </div>
        <div class="mb-5">
            <form action="">
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Marca</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Modelo</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ano</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Quilometragem</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cor</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Opcionais</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <h5>DADOS PESSOAIS</h5>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CEP</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cidade</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Estado</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <h5>FOTOS DO VEÍCULO</h5>
                        </div>
                        <div class="card">
                            <div class="form-group col-12 mb-2 required" data-check="foto">
                                <div class="row">
                                    <div class="col-6 col-md-3 mb-2">
                                        <button type="button" class="btn btn-custom-1 btn-add-foto mb-3">+</button>
                                        <input type="file" name="foto[]" class="d-none add-foto">
                                        <div class="foto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-success">ENVIAR</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
