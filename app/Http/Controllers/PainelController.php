<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
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
