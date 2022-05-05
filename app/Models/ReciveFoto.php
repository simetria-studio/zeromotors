<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReciveFoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'recived_car_id',
        'path',
    ];
}
