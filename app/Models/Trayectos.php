<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayectos extends Model
{
    protected $table = 'trayecto_coleccion';
    protected $fillable=[
        'id_trayecto',
        'plazo',
        'personal'
    ];
    use HasFactory;
}
