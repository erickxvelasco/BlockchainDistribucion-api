<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;
    protected $table = 'razas';
    //para asignacion masiva
    /* Protected $guarded =[];//para deshabilitar de forma segura */
    protected $fillable = [
        'raza'
    ];
}
