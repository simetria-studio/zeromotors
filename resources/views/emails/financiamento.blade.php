<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="background: rgb(218, 216, 216); padding: 10px;">

        <h1 style="margin-bottom: 10px;">Informações do veículo</h1>
        <h4>Marca: {{ $marca }} </h4>
        <h4>Modelo: {{ $modelo }} </h4>
        <h4>Ano: {{ $ano }} </h4>
        <h4>km: {{ $km }} </h4>
        <h4>Cor: {{ $cor }} </h4>
        <h4>Opcionais: {{ $opcionais }} </h4>
        <h1 style="margin-bottom: 10px;">Informações do financiamento</h1>
        <h4>Valor do financiamento: {{ $valor_financiamento }} </h4>
        <h4>Entrada do financiamento: {{ $entrada_financiamento }} </h4>
        <h4>Parcela do financiamento: {{ $parcela_financiamento }} </h4>
        <h1 style="margin-bottom: 10px;">Informações de contratação</h1>
        <h4>Regime: {{ $regime }} </h4>
        <h4>Cargo: {{ $cargo }} </h4>
        <h4>Renda: {{ $renda }} </h4>
        <h4>Tempo de emprego: {{ $tempo_emprego }} </h4>
        <h1 style="margin-bottom: 10px;">Informações bancárias</h1>
        <h4>Banco: {{ $banco }} </h4>
        <h4>Agencia: {{ $agencia }} </h4>
        <h4>Tempo conta: {{ $tempo_conta }} </h4>
        <h4>Conta: {{ $conta }} </h4>
        <h1 style="margin-bottom: 10px;">Informações pessoais</h1>
        <h4>Nome: {{ $nome }} </h4>
        <h4>CPF: {{ $cpf }} </h4>
        <h4>RG: {{ $rg }} </h4>
        <h4>Data de emissão: {{ $data_rg }} </h4>
        <h4>Nome do pai: {{ $nome_pai }} </h4>
        <h4>Nome da mãe: {{ $nome_mae }} </h4>
        <h4>Naturalidade: {{ $naturalidade }} </h4>
        <h4>Possuí CNH: {{ $cnh }} </h4>
        <h4>Whatsapp: {{ $whatsapp }} </h4>
        <h4>E-mail: {{ $email }} </h4>
        <h1 style="margin-bottom: 10px;">Endereço</h1>
        <h4>CEP: {{ $cep }} </h4>
        <h4>Endereço: {{ $endereco }} </h4>
        <h4>Cidade: {{ $cidade }} </h4>
        <h4>Estado: {{ $estado }} </h4>
        <h4>Mensagem: {{ $mensagem }} </h4>
        <h1 style="margin-bottom: 10px;">Referências</h1>
        <h4>Referência 1: {{ $nome_1 }} </h4>
        <h4>Celular referência 1: {{ $celular_1 }} </h4>
        <h4>Referência 2: {{ $nome_2 }}' </h4>
        <h4>Celular referência 2: {{ $celular_2 }} </h4>

    </div>

</body>

</html>
