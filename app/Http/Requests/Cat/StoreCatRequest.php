<?php

namespace App\Http\Requests\Cat;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'breed_id'=>[
                'required',
                Rule::exists('breeds', 'id')
            ],
            'name'=>[
                'required',
                'string',
                'max:255'
            ],
            'description'=>[
                'required',
                'string',
                'max:255'
            ]
        ];
    }
}
