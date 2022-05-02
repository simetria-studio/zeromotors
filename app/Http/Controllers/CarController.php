<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Opcional;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
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
        $response = Http::get('https://parallelum.com.br/fipe/api/v1/carros/marcas');

        return $response->json();
    }

    public function modelos(Request $request)
    {
        // dd($request->valor);
        $marca = $request->valor;
        $response = Http::get('https://parallelum.com.br/fipe/api/v1/carros/marcas/' . $request->valor . '/modelos');
        // $response = Http::get('https://parallelum.com.br/fipe/api/v1/carros/marcas/22/modelos');
        $modelos = $response->json();

        return \Response::json([$modelos, $marca]);
    }
    public function ano(Request $request)
    {

        $response = Http::get("https://parallelum.com.br/fipe/api/v1/carros/marcas/$request->marca/modelos/$request->valor/anos");
        $ano = $response->json();
        $marca = $request->marca;
        $modelo = $request->valor;

        return \Response::json([$ano, $marca, $modelo]);
    }
    public function info(Request $request)
    {

        $response = Http::get("https://parallelum.com.br/fipe/api/v1/carros/marcas/$request->marca/modelos/$request->modelo/anos/$request->valor");

        return $response->json();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjectVal = "Gasolina";
        $subjectVal2 = "Diesel";
        $subjectVal3 = "Álcool";

        $validated = $request->validate([
            'preco' => 'required',
            'cor' => 'required',
            'km' => 'required',
            'foto' => 'required',

        ]);

        $veiculo = Veiculo::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'ano' => str_replace([$subjectVal, $subjectVal2, $subjectVal3], '', $request->input('ano')),
            'km' => $request->input('km'),
            'cor' => $request->input('cor'),
            'cambio' => $request->input('cambio'),
            'potencia' => $request->input('potencia'),
            'portas' => $request->input('portas'),
            'combustivel' => $request->input('combustivel'),
            'status' => $request->input('status'),
            'preco' => str_replace(['.', ','], ['', '.'], $request->input('preco')),
            'info' => $request->input('info'),
            // 'video' => $request->input('video'),
        ]);
        if (!empty($request->foto && $request->foto !== null)) {
            foreach ($request->foto as $foto) {
                $path = $foto->store('/images/veiculos', ['disk' =>   'my_files']);
                Image::create([
                    'veiculo_id' => $veiculo->id,
                    'path' => $path
                ]);
            }
        }
        if (!empty($request->opcionais && $request->opcionais !== null)) {
            foreach ($request->opcionais as $opcionais) {
                Opcional::create([
                    'veiculo_id' => $veiculo->id,
                    'opcional' => $opcionais
                ]);
            }
        }

        return redirect()->route('cars')->with('success', 'Veiculo cadastrado com sucesso!');
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
