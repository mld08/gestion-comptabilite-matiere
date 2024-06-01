<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatiereFormRequest extends FormRequest
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
            'date_operation' => 'required|date',
            'no_comptes_nomenclature'=> 'required|integer|min:1',
            'nature_matieres'=> 'required|string|min:1',
            'entrees_no_bon'=> 'required|integer|min:1',
            'entrees_nbre_unites'=> 'required|integer|min:1',
            'entrees_nature_unite'=> 'required|string|min:1',
            'sorties_no_bon'=> 'required|integer|min:1',
            'sorties_nbre_unites'=> 'required|integer|min:1',
            'sorties_nature_unite'=> 'required|string|min:1',
            'prix_uni'=> 'required|integer|min:1',
            'montant_entrees' => 'required|integer|min:1',
            'montant_sorties'=> 'required|integer|min:1',
            'sorties_provisoires'=> 'required|string|min:1',
            'observations'=> 'required|string|min:1',
        ];
    }
}
