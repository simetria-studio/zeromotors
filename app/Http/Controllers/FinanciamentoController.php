<?php

namespace App\Http\Controllers;

use App\Models\Financimento;
use Illuminate\Http\Request;

class FinanciamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = Financimento::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'ano' => $request->input('ano'),
            'km' => $request->input('km'),
            'cor' => $request->input('cor'),
            'opcionais' => $request->input('opcionais'),
            'valor_financiamento' => $request->input('valor_financiamento'),
            'entrada_financiamento' => $request->input('entrada_financiamento'),
            'parcela_financiamento' => $request->input('parcela_financiamento'),
            'regime' => $request->input('regime'),
            'cargo' => $request->input('cargo'),
            'renda' => $request->input('renda'),
            'tempo_emprego' => $request->input('tempo_emprego'),
            'banco' => $request->input('banco'),
            'agencia' => $request->input('agencia'),
            'tempo_conta' => $request->input('tempo_conta'),
            'conta' => $request->input('conta'),
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'rg' => $request->input('rg'),
            'data_rg' => $request->input('data_rg'),
            'nome_pai' => $request->input('nome_pai'),
            'nome_mae' => $request->input('nome_mae'),
            'naturalidade' => $request->input('naturalidade'),
            'cnh' => $request->input('cnh'),
            'whatsapp' => $request->input('whatsapp'),
            'email' => $request->input('email'),
            'cep' => $request->input('cep'),
            'endereco' => $request->input('endereco'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'mensagem' => $request->input('mensagem'),
            'nome_1' => $request->input('nome_1'),
            'celular_1' => $request->input('celular_1'),
            'nome_2' => $request->input('nome_2'),
            'celular_2' => $request->input('celular_2'),
        ]);

        return redirect()->route('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
