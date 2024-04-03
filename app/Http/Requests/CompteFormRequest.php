<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompteFormRequest extends FormRequest
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
            'date' => 'required|date',
            'no_bon'=> 'required|min:1',
            'origine_destination'=> 'required|min:1',
            'entrees'=> 'required|min:1',
            'sortie_def'=> 'required|min:1',
            'prix_uni'=> 'required|integer|min:1',
            'existant'=> 'required|min:1',
            'montant_existant'=> 'required|integer|min:1',
            'sorties_provisoires'=> 'required|min:1',
            'date_sorties_provisoires'=> 'required|date',
        ];
    }
}
