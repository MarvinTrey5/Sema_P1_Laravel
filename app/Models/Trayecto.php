<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayecto extends Model
{
    protected $fillable=[
        'id_trayecto',
        'plazo',
        'personal'
    ];
    use HasFactory;
}
