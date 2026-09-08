<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTestimonio extends Model
{
    use HasFactory;

    protected $table = 'tag_testimonios';

    protected $fillable = [
        'nombre',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function testimonios()
    {
        return $this->belongsToMany(Testimonio::class, 'testimonio_tags')
            ->withTimestamps();
    }
}
