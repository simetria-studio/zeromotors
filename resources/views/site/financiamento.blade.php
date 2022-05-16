@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <h3>APROVEITE SEU FINANCIAMENTO ONLINE!</h3>
        </div>
        <div class="text-center">
            <h5>DADOS DO VEÍCULO</h5>
        </div>
        <div class="mb-5">
            <form action="{{ route('financiamento.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Marca</label>
                            <select class="form-control" name="marca" id="marca">
                                <option>Selecione</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Modelo</label>
                            <select class="form-control" name="modelo" id="modelo">
                                <option>Selecione</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ano</label>
                            <select class="form-control" id="" name="ano">
                                <option>Selecione</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Quilometragem</label>
                            <input type="text" class="form-control" name="km" id="exampleFormControlInput1"
                                placeholder="KM">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cor</label>
                            <input type="text" class="form-control" name="cor" id="exampleFormControlInput1"
                                placeholder="Coloque a cor do veículo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Opcionais</label>
                            <textarea class="form-control" name="opcionais" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <h5>DADOS DO FINANCIAMENTO</h5>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Valor do financiamento</label>
                            <input type="text" class="form-control" name="valor_financiamento" id="exampleFormControlInput1"
                                placeholder="Valor total do financiamento">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Entrada</label>
                            <input type="text" class="form-control" name="entrada_financiamento" id="exampleFormControlInput1"
                                placeholder="Valor da entrada">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Parcelas</label>
                            <input type="text" class="form-control" name="parcela_financiamento" id="exampleFormControlInput1"
                                placeholder="Numero do parcelas">
                        </div>

                        <div class="text-center">
                            <h5>DADOS PROFISSIONAIS</h5>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Regime</label>
                            <select class="form-control" name="regime">
                                <option value="clt" selected>CLT</option>
                                <option value="Autônomo">Autônomo</option>
                                <option value="Profissional Liberal">Profissional Liberal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cargo / Função</label>
                            <input type="text" class="form-control" name="cargo" id="exampleFormControlInput1"
                                placeholder="Função exercida">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Renda</label>
                            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1"
                                placeholder="Renda mensal">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tempo de emprego</label>
                            <input type="text" class="form-control" name="renda" id="exampleFormControlInput1"
                                placeholder="Tempo de emprego">
                        </div>
                        <div class="text-center">
                            <h5>REFERÊNCIA BANCÁRIA</h5>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Banco</label>
                            <input type="text" class="form-control" name="banco" id="exampleFormControlInput1"
                                placeholder="Banco">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Agência</label>
                            <input type="text" class="form-control" name="agencia" id="exampleFormControlInput1"
                                placeholder="Numero da agência">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tempo de conta</label>
                            <input type="text" class="form-control" name="tempo_conta" id="exampleFormControlInput1"
                                placeholder="Tempo que possuí essa conta">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Conta</label>
                            <input type="text" class="form-control" name="conta" id="exampleFormControlInput1"
                                placeholder="Numero da conta com digito">
                        </div>
                        <div class="text-center">
                            <h5>DADOS PESSOAIS</h5>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1"
                                placeholder="Nome do dono">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf"
                                placeholder="Numero do cpf">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">RG</label>
                            <input type="text" class="form-control" name="rg" id="rg"
                                placeholder="Numero do rg">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Data de Emissão do RG</label>
                            <input type="text" class="form-control" name="data_rg" id="data_rg"
                                placeholder="exemplo 12/12/2012">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome do pai</label>
                            <input type="text" class="form-control" name="nome_pai" id="exampleFormControlInput1"
                                placeholder="Nome do paie">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome da mãe</label>
                            <input type="text" class="form-control" name="nome_mae" id="exampleFormControlInput1"
                                placeholder="Nome da mãe">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Naturalidade</label>
                            <input type="text" class="form-control" name="naturalidade" id="exampleFormControlInput1"
                                placeholder="Sua naturalidade">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Possuí CNH?</label>
                            <select class="form-control" name="cnh">
                                <option value="Sim" selected>Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Whatsapp</label>
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                placeholder="Numero com DDD">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                placeholder="E-mail para contato">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">CEP</label>
                            <input type="text" class="form-control" name="cep" id="buscar" placeholder="Digite seu CEP">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco"
                                placeholder="Rua e Numero">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade ">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Estado</label>
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <h5>REFERÊNCIA PESSOAL</h5>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome (1)</label>
                            <input type="text" class="form-control" name="nome_1"  placeholder="Nome da sua referência">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Celular (1)</label>
                            <input type="text" class="form-control" name="celular_1"  placeholder="Celular da sua referência" id="whatsapp1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome (2)</label>
                            <input type="text" class="form-control" name="nome_2"  placeholder="Nome da sua referência">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Celular (2)</label>
                            <input type="text" class="form-control" name="celular_2"  placeholder="Celular da sua referência" id="whatsapp2">
                        </div>
                        <div class="my-3 text-center">
                            <button type="submit" class="btn btn-large">ENVIAR</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
