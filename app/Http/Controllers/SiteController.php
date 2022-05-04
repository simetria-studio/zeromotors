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
    public function filterReturn()
    {
        return view('site.filter-model');
    }
}
