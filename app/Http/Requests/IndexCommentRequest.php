<?php

namespace App\Http\Requests;

class IndexCommentRequest extends IndexRequest
{
    public function rules(): array
    {
        return [
            'product' => "required|string|in:Gesrest,360sys,HotelHUB,Comprobante-e,Mr. Soft",
            'limit' => "nullable|integer|min:1",
        ];
    }
}
