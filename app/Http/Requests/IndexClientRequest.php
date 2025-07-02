<?php

namespace App\Http\Requests;

use App\Models\Product;

class IndexClientRequest extends IndexRequest
{
    public function rules(): array
    {
        $namesProducts = Product::all()
            ->pluck('name')
            ->toArray();
        return [
            // 'product' => "required|string|in:Gesrest,360sys,HotelHUB,Comprobante-e,Mr. Soft",
            'product' => [
                'required',
                'string',
                'in:' . implode(',', $namesProducts),
            ],
            'limit' => "nullable|integer|min:1",
        ];
    }
}
