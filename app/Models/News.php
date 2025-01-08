<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'news', 'description', 'category_id', 'content'];

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
}
