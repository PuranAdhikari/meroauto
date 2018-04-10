<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarVariantCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:car_variants',
            'car_model_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'car_model_id.required' => 'The model field is required.',
        ];
    }
}
