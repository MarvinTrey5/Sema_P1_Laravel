<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable=[
        'id_rol',
        'nombre_rol',
        'descripcion'
    ];
    use HasFactory;
}
