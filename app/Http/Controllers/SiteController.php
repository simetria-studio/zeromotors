<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with('imagens')->get();

        return view('site.index', get_defined_vars());
    }

    public function carDetail($id)
    {
        $veiculo = Veiculo::with(['imagens', 'opcionais'])->find($id);
        return view('site.car-detail', get_defined_vars());
    }

    public function estoque()
    {
        $veiculos = Veiculo::with('imagens')->paginate(12);
        return view('site.estoque', get_defined_vars());
    }

    public function filterModel(Request $request)
    {
        if ($request->ajax()) {
            $veiculos = Veiculo::where('modelo', 'LIKE', '%' . $request->search . "%")->get();
            $viewRender = view('site.filter-model', get_defined_vars())->render();
            return response()->json([get_defined_vars()]);
        }
    }
    public function filterMarca(Request $request)
    {
        $veiculos = Veiculo::where('marca', 'LIKE', '%' . $request->search . "%")->get();

        return view('site.filter-marca', get_defined_vars());
    }

    public function vendaSeuVeiculo()
    {
        return view('site.enviar-carro');
    }

    public function financiamento()
    {
        return view('site.financiamento');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function contatoSend(Request $request)
    {

        $email = $request->email;
        $nome = $request->nome;
        $data = ['email' =>  $request->email, 'nome' => $request->nome,'assunto' => $request->assunto, 'celular' => $request->celular, 'mensagem' => $request->mensagem];

        Mail::send('emails.contato', $data, function ($m) use ($email, $nome) {
            $m->from($email, $nome);

            $m->to('zero41motors@hotmail.com', 'Contato')->subject('Contato site');
        });

        return redirect()->back();
    }
}
