<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

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
}
