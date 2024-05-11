<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conten extends Model
{
    protected $table = 'conten_basura';
    protected $fillable=[
        'lugar',
        'tipo_conten'
    ];
    use HasFactory;
}
