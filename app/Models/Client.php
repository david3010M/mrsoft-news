<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'logo',
        'active',
        'type_id',
        'departamento',
        'imagen_referencia',
        'flyer_bienvenida',
        'flyer_informativo',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
