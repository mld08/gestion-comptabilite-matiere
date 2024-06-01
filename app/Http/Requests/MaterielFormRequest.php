<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterielFormRequest extends FormRequest
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
            'reference' => ['required', 'min:1'],
            'designation' => ['required', 'min:1'],
            'quantite' => ['required', 'integer', 'min:1'],
            'prix_total' => ['required', 'min:1'],
            'prix_unitaire' => ['required', 'min:1'],
            'fournisseur' => ['required', 'string', 'max:255'],
            'rc_fournisseur' => ['required', 'string', 'max:255'],
            'adresse' => ['required','string','max:255'],
            'telephone' => ['required','string','max:255'],
            'email' => ['required','string','max:255']
        ];
    }
}
