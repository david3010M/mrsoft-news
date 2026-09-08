<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'destacado',
        'url',
        'active',
        'client_id',
        'product_id',
    ];

    protected $casts = [
        'destacado' => 'boolean',
        'active' => 'boolean',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Motivos del testimonio (tags): por qué el cliente eligió el producto.
     * Muchos-a-muchos vía la tabla pivote testimonio_tags.
     */
    public function tags()
    {
        return $this->belongsToMany(TagTestimonio::class, 'testimonio_tags')
            ->withTimestamps();
    }
}
