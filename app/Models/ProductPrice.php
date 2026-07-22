<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'short_description',
        'description',
        'period',
        'price',
        'is_quote',
        'quote_message',
        'is_featured',
        'features',
    ];

    protected $casts = [
        'price'       => 'decimal:2',
        'is_quote'    => 'boolean',
        'is_featured' => 'boolean',
        'features'    => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
