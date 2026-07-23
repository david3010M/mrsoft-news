<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'short_description',
        'description',
        'is_featured',
        'monthly',
        'annual',
        'is_quote',
        'quote_message',
        'features',
    ];

    protected $casts = [
        'monthly'     => 'decimal:2',
        'annual'      => 'decimal:2',
        'features'    => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
