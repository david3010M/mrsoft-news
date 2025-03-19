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
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
