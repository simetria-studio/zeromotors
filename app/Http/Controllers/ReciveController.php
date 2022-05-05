<?php

namespace App\Http\Controllers;

use App\Models\ReciveCar;
use App\Models\ReciveFoto;
use Illuminate\Http\Request;
use FlyingLuscas\Correios\Client;

class ReciveController extends Controller
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
        return view('site.thanks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = ReciveCar::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'ano' => $request->input('ano'),
            'km' => $request->input('km'),
            'cor' => $request->input('cor'),
            'opcionais' => $request->input('opcionais'),
            'nome' => $request->input('nome'),
            'whatsapp' => $request->input('whatsapp'),
            'email' => $request->input('email'),
            'cep' => $request->input('cep'),
            'endereco' => $request->input('endereco'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'mensagem' => $request->input('mensagem'),
        ]);
        if (!empty($request->foto && $request->foto !== null)) {
            foreach ($request->foto as $foto) {
                $path = $foto->store('/images/recived', ['disk' =>   'my_files']);
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                ReciveFoto::create([
                    'recived_car_id' => $veiculo->id,
                    'path' => $path
                ]);
            }
        }

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

    public function buscaCep(Request $request)
    {
        $correios = new Client;

        $cep = $correios->zipcode()->find($request->search);

        return $cep;
    }
}
