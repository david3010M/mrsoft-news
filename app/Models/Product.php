<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'primary_color',
        'secondary_color',
        'installation_price',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function modules()
    {
        return $this->hasMany(ProductModule::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function reels()
    {
        return $this->hasMany(Reel::class);
    }
}
