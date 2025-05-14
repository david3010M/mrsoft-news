<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'active',
        'type_id',
        'logo',
        'imagen_referencia',
        'flyer_bienvenida',
        'flyer_informativo',
    ];

    protected $hidden = [
        'direccion',
        'departamento',
        'created_at',
        'updated_at',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function comment()
    {
        return $this->hasOne(Comment::class)->where('active', true);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function departments()
    {
        return $this->hasManyThrough(
            Department::class,
            Address::class,
            'client_id',
            'id',
            'id',
            'department_id'
        )->distinct();
    }
}
