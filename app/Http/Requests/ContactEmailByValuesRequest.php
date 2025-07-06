<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactEmailByValuesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'emails' => 'required|array',
            'emails.*' => 'required|email',
            'values' => 'required|array',
            'values.*.key' => 'required|string',
            'values.*.value' => 'required|string',
        ];
    }
}
