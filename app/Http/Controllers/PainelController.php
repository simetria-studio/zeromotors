<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Veiculo;
use App\Models\ReciveCar;
use App\Models\SiteConfig;
use App\Models\Financimento;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
        return view('painel.index');
    }
    public function cars()
    {
        $veiculos = Veiculo::get();
        return view('painel.cars', get_defined_vars());
    }
    public function carAdd($id = null)
    {
        $opt = $this->opcionaisList();
        $car = Veiculo::with(['imagens', 'opcionais'])->find($id);
        return view('painel.car-add', get_defined_vars());
    }

    public function siteCars()
    {
        $cars = ReciveCar::get();
        return view('painel.site-cars', get_defined_vars());
    }

    public function carsSiteShow($id)
    {
        $car = ReciveCar::with('imagens')->find($id);

        return view('painel.cars_site_show', get_defined_vars());
    }

    public function banners()
    {
        $banners = Banner::get();
        return view('painel.banners', get_defined_vars());
    }

    public function financiamentos()
    {
        $financiamentos = Financimento::get();
        return view('painel.financiamentos', get_defined_vars());
    }

    public function financiamento($id)
    {
        $financiamento = Financimento::find($id);
        return view('painel.financiamento-ver', get_defined_vars());
    }

    public function siteConfig()
    {
        $configs = SiteConfig::get()->first();
        return view('painel.configs', get_defined_vars());
    }
    public function siteConfigStore(Request $request)
    {
        SiteConfig::create([
            'email' => $request->email,
            'telefone' => $request->telefone,
            'whatsapp' => $request->whatsapp,
        ]);

        return redirect()->back();
    }
    public function siteConfigUpdate(Request $request, $id)
    {
        $config = SiteConfig::find($id);

        $config->update([
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'whatsapp' => $request->input('whatsapp'),
        ]);

        return redirect()->back();
    }

    public function carEdit($id)
    {
        $car = Veiculo::find($id);
        $opt = $this->opcionaisList();
        return view('painel.car_edit', get_defined_vars());
    }

    public function opcionaisList()
    {
        $optarr = [
            'ABS',
            'Acendimento autom??tico dos far??is',
            'AirBag Cortina',
            'AirBag de joelho',
            'AirBag Duplo',
            'AirBag Motorista',
            'AirBag Passageiro',
            'Ajuste do volante em profundidade',
            'Ajuste el??trico - banco motorista',
            'Al??as de seguran??a no teto',
            'Apoio de bra??o para o motorista',
            'Ar condicionado',
            'Ar Condicionado Autom??tico',
            'Ar condicionado digital',
            'Ar quente',
            'Banco do motorista com ajuste de altura',
            'Bancos em couro',
            'Bluetooth',
            'C??mera de R??',
            'C??mera traseira para manobras',
            'Central Multim??dia',
            'Chave presencial',
            'Cinto de tr??s pontos',
            'Comando interno da tampa do tanque',
            'Computador de bordo',
            'Conta-giros',
            'Controle autom??tico de velocidade',
            'Controle de Estabilidade',
            'Controle de som do volante',
            'Controle de tra????o',
            'Controle de velocidade',
            'Controle el??trico dos vidros dianteiros',
            'Desemba??ador traseiro',
            'Dire????o hidr??ulica',
            'Encosto de cabe??a para todos os ocupantes',
            'Encosto de cabe??a traseiro',
            'Farois com regulagem de altura',
            'Far??is de neblina',
            'Farol autom??tico',
            'GPS',
            'Isofix',
            'Piloto Automatico',
            'R??dio',
            'R??dio Original',
            'Retrovisor com rebatimento',
            'Retrovisor fotocr??mico',
            'Retrovisores el??tricos',
            'Rodas de liga leve',
            'Sensor de estacionamento',
            'Sensor de estacionamento dianteiro',
            'Tra????o 4x4',
            'Travamento central das portas',
            'Travas el??tricas',
            'USB',
            'Vidros el??tricos dianteiros',
            'Vidros el??tricos traseiros',
            'Volante com regulagem de altura',
            'Volante Multifuncional',
        ];

        return $optarr;
    }
}
