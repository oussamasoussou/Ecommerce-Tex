<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduitRequest extends FormRequest
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
            'lib' => 'required|unique:produit',
            'ref' => 'sometimes',
            'status' => 'sometimes', 
            'small_desc' => 'sometimes',
            'desc' => 'sometimes', 
            'prix' => 'sometimes',
            'prix_promo' => 'sometimes', 
            'img'=>'sometimes',
            'qte' => 'sometimes', 
            'categorie_id' => 'nullable|sometimes',
            'sous_categorie_id' => 'nullable|sometimes',
        ];
    }
}
