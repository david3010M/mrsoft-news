<?php

namespace App\Http\Requests;

class IndexTestimonioRequest extends IndexRequest
{
    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'destacado' => 'nullable|boolean',
            'tag_id' => ['nullable', 'integer', 'exists:tag_testimonios,id'],
            'limit' => 'nullable|integer|min:1',
        ];
    }
}
