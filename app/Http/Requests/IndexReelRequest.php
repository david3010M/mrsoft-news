<?php

namespace App\Http\Requests;

use App\Models\Product;

class IndexReelRequest extends IndexRequest
{
    public function rules(): array
    {
        $namesProducts = Product::all()
            ->pluck('name')
            ->toArray();
        return [
            'product' => [
                'required',
                'string',
                'in:' . implode(',', $namesProducts) . ',Mr. Soft',
            ],
            'limit' => "nullable|integer|min:1",
        ];
    }
}
