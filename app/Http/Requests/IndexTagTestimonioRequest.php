<?php

namespace App\Http\Requests;

class IndexTagTestimonioRequest extends IndexRequest
{
    public function rules(): array
    {
        return [
            'limit' => 'nullable|integer|min:1',
        ];
    }
}
