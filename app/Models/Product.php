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

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function getModulesAttribute(): array
    {
        return $this->prices->groupBy('name')->map(function ($rows, $name) {
            $rep = $rows->first();
            return [
                'name'              => $name,
                'short_description' => $rep?->short_description,
                'description'       => $rep?->description,
                'is_featured'       => $rows->contains('is_featured', true) ? '1' : '0',
                'monthly'           => optional($rows->firstWhere('period', 'monthly'))->price,
                'annual'            => optional($rows->firstWhere('period', 'annual'))->price,
                'is_quote'          => $rows->contains('is_quote', true) ? '1' : '0',
                'quote_message'     => optional($rows->firstWhere('is_quote', true))->quote_message,
                'features'          => $rep?->features ?? [],
            ];
        })->values()->toArray();
    }

    public function setModulesAttribute($value): void
    {
        // handled by ProductResource::syncModules()
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
