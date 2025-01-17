<?php

namespace App\Http\Requests;


class IndexReelRequest extends IndexRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'limit' => "nullable|integer|min:1",
        ];
    }
}
