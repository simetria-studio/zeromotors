@extends('layouts.painel')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Veículo</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Marca: {{ $financiamento->marca }}</li>
                <li class="list-group-item">Modelo: {{ $financiamento->modelo }}</li>
                <li class="list-group-item">Ano: {{ $financiamento->ano }}</li>
                <li class="list-group-item">Cor: {{ $financiamento->cor }}</li>
                <li class="list-group-item">Km: {{ $financiamento->km }}</li>
                <li class="list-group-item">Opcionais: {{ $financiamento->opcionais }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>Informações</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nome: {{ $financiamento->nome }}</li>
                <li class="list-group-item">E-mail: {{ $financiamento->email }}</li>
                <li class="list-group-item">Whatsapp: {{ $financiamento->whatsapp }}</li>
                <li class="list-group-item">CPF: {{ $financiamento->cpf }}</li>
                <li class="list-group-item">RG: {{ $financiamento->rg }}</li>
                <li class="list-group-item">Data de Emissão do RG: {{ $financiamento->data_rg }}</li>
                <li class="list-group-item">Nome do pai: {{ $financiamento->nome_pai }}</li>
                <li class="list-group-item">Nome da mãe: {{ $financiamento->nome_mae }}</li>
                <li class="list-group-item">Naturalidade: {{ $financiamento->naturalidade }}</li>
                <li class="list-group-item">Possuí CNH?: {{ $financiamento->cnh }}</li>
                <li class="list-group-item">Whatsapp: {{ $financiamento->whatsapp }}</li>
                <li class="list-group-item">Email: {{ $financiamento->email }}</li>
                <li class="list-group-item">CEP: {{ $financiamento->cep }}</li>
                <li class="list-group-item">Endereço: {{ $financiamento->endereco }}</li>
                <li class="list-group-item">Cidade: {{ $financiamento->cidade }}</li>
                <li class="list-group-item">Estado: {{ $financiamento->estado }}</li>
                <li class="list-group-item">Mensagem: {{ $financiamento->mensagem }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>REFERÊNCIA BANCÁRIA</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Banco: {{ $financiamento->banco }}</li>
                <li class="list-group-item">Agência: {{ $financiamento->agencia }}</li>
                <li class="list-group-item">Tempo de conta: {{ $financiamento->tempo_conta }}</li>
                <li class="list-group-item">Conta: {{ $financiamento->conta }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>DADOS PROFISSIONAIS</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Regime: {{ $financiamento->regime }}</li>
                <li class="list-group-item">Cargo / Função: {{ $financiamento->cargo }}</li>
                <li class="list-group-item">Renda: {{ $financiamento->renda }}</li>
                <li class="list-group-item">Tempo de emprego: {{ $financiamento->tempo_emprego }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>DADOS DO FINANCIAMENTO</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Valor do financiamento: {{ $financiamento->valor_financiamento }}</li>
                <li class="list-group-item">Entrada: {{ $financiamento->entrada_financiamento }}</li>
                <li class="list-group-item">Parcelas: {{ $financiamento->parcela_financiamento }}</li>
            </ul>
        </div>
        <div class="card-header">
            <h4>REFERÊNCIA PESSOAL</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Referência 1: {{ $financiamento->nome_1 }}</li>
                <li class="list-group-item">Celular 1: {{ $financiamento->celular_1 }}</li>
                <li class="list-group-item">Referência 2: {{ $financiamento->nome_2 }}</li>
                <li class="list-group-item">Celular 2: {{ $financiamento->celular_2 }}</li>

            </ul>
        </div>
    </div>
@endsection
