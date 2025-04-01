<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video',
        'active',
        'order',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
