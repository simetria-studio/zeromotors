<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'km',
        'cor',
        'cambio',
        'potencia',
        'portas',
        'combustivel',
        'status',
        'preco',
        'video',
    ];

    public function imagens()
    {
        return $this->hasMany(Image::class);
    }
    public function opcionais()
    {
        return $this->hasMany(Opcional::class);
    }
}
