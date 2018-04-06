<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCreateRequest extends FormRequest
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
            'english_heading' => request('language') != 'Nepali' ? 'required' : '',
            'nepali_heading' => request('language') != 'English' ? 'required' : '',
            'english_content' => request('language') != 'Nepali' ? 'required' : '',
            'nepali_content' => request('language') != 'English' ? 'required' : '',
            'slug' => 'required|unique:news',
            'category' => 'required'
        ];
    }
}