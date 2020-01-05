<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeRequest extends FormRequest
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
            'email' => 'email',
            'phone' => 'required',
            'service' => 'required',
            'catégorie' => 'required',
            'type' => 'required',
            'adresse' => 'required',
            'région' => 'required',
            'horaire' => 'required',
            'date_intervention' => 'required',
            'description' => 'required'
            
        ];
    }
}
