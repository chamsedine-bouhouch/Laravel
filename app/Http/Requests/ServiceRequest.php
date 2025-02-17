<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'titre' => 'required|unique:services',
            'categorie' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required|unique:services',
            'prix' => 'required|numeric'
            
            
        ];
    }
}
