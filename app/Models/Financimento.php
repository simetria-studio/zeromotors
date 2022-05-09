<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'km',
        'cor',
        'opcionais',
        'valor_financiamento',
        'entrada_financiamento',
        'parcela_financiamento',
        'regime',
        'cargo',
        'renda',
        'tempo_emprego',
        'banco',
        'agencia',
        'tempo_conta',
        'conta',
        'nome',
        'cpf',
        'rg',
        'data_rg',
        'nome_pai',
        'nome_mae',
        'naturalidade',
        'cnh',
        'whatsapp',
        'email',
        'cep',
        'endereco',
        'cidade',
        'estado',
        'mensagem',
        'nome_1',
        'celular_1',
        'nome_2',
        'celular_2',

    ];
}
