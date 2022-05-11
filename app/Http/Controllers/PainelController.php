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
    public function carAdd()
    {
        $opt = $this->opcionaisList();
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

    public function opcionaisList()
    {
        $optarr = [
            'ABS',
            'Acendimento automático dos faróis',
            'AirBag Cortina',
            'AirBag de joelho',
            'AirBag Duplo',
            'AirBag Motorista',
            'AirBag Passageiro',
            'Ajuste do volante em profundidade',
            'Ajuste elétrico - banco motorista',
            'Alças de segurança no teto',
            'Apoio de braço para o motorista',
            'Ar condicionado',
            'Ar Condicionado Automático',
            'Ar condicionado digital',
            'Ar quente',
            'Banco do motorista com ajuste de altura',
            'Bancos em couro',
            'Bluetooth',
            'Câmera de Ré',
            'Câmera traseira para manobras',
            'Central Multimídia',
            'Chave presencial',
            'Cinto de três pontos',
            'Comando interno da tampa do tanque',
            'Computador de bordo',
            'Conta-giros',
            'Controle automático de velocidade',
            'Controle de Estabilidade',
            'Controle de som do volante',
            'Controle de tração',
            'Controle de velocidade',
            'Controle elétrico dos vidros dianteiros',
            'Desembaçador traseiro',
            'Direção hidráulica',
            'Encosto de cabeça para todos os ocupantes',
            'Encosto de cabeça traseiro',
            'Farois com regulagem de altura',
            'Faróis de neblina',
            'Farol automático',
            'GPS',
            'Isofix',
            'Piloto Automatico',
            'Rádio',
            'Rádio Original',
            'Retrovisor com rebatimento',
            'Retrovisor fotocrômico',
            'Retrovisores elétricos',
            'Rodas de liga leve',
            'Sensor de estacionamento',
            'Sensor de estacionamento dianteiro',
            'Tração 4x4',
            'Travamento central das portas',
            'Travas elétricas',
            'USB',
            'Vidros elétricos dianteiros',
            'Vidros elétricos traseiros',
            'Volante com regulagem de altura',
            'Volante Multifuncional',
        ];

        return $optarr;
    }
}
