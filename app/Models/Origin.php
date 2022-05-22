<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;
    protected $table = 'origins';
    //para asignacion masiva
    //Protected $guarded =[];//para deshabilitar de forma segura
    protected $fillable = [
        'codigo_unico',
        'descripcion',
        'peso',
        'altura',
        'edad',
        'raza',
        'observaciones'
    ];
}
