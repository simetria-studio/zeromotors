<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReciveCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'km',
        'cor',
        'opcionais',
        'nome',
        'email',
        'whatsapp',
        'cep',
        'endereco',
        'cidade',
        'estado',
        'mensagem',
    ];

    public function imagens()
    {
        return $this->hasMany(ReciveFoto::class, 'recived_car_id');
    }
}
