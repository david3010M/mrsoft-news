<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $hidden = ['created_at', 'updated_at'];


    public function news()
    {
        return $this->hasMany(News::class);
    }
}
