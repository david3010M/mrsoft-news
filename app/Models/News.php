<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'content', 'typeMedia', 'images', 'product_id', 'category_id',];

    protected $casts = [
        'images' => 'array',
    ];

    protected $hidden = ['created_at', 'updated_at'];

//    public static function boot()
//    {
//        parent::boot();
//
//        static::saved(function ($news) {
//            $news->update(['user_id' => auth()->id()]);
//        });
//
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
