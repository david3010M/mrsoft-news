<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactEmailByValuesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'primaryColor' => 'nullable|string',
            'secondaryColor' => 'nullable|string',
            'foreground' => 'nullable|string',
            'emails' => 'required|array',
            'emails.*' => 'required|email',
            'values' => 'required|array',
            'values.*.key' => 'required|string',
            'values.*.value' => 'required|string',
        ];
    }
}
