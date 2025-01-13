<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'active', 'description', 'date', 'content', 'typeMedia', 'images', 'product_id', 'category_id',];

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

    public function newsRelated(int $id)
    {
//        buscar 4 news de la misma categoria y producto y las mas recientes
        $news = News::find($id);
        return News::where('category_id', $news->category_id)
            ->where('product_id', $news->product_id)
            ->where('id', '!=', $id)
            ->orderBy('date', 'desc')
            ->limit(6)
            ->get();

    }
}
