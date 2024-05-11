<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetos extends Model
{
    protected $table = 'objeto_basura';
    protected $fillable=[
        'id_objeto',
        'nombre_objeto'
    ];
    use HasFactory;
}
