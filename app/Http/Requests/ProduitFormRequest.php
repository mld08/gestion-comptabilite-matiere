<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cod_produit' => ['required', 'min:1'],
            'designation' => ['required', 'min:1'],
            'quantite_stock' => ['required', 'integer', 'min:1'],
            'quantite_minimale' => ['required', 'integer', 'min:1'],
            'prix_unitaire' => ['required', 'min:1'],
            'unite_id' => ['array', 'exists:unites,id', 'required'],
            'categorie_id' => ['array', 'exists:categories,id', 'required']
        ];
    }
}
