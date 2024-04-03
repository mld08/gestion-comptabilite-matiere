<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommandeFormRequest extends FormRequest
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
            'cod_commande' => ['required', 'min:1'],
            'date_commande' => ['required', 'date_format:Y-m-d'],
            'sujet_commande' => ['required', 'max:255'],
            'montant' => ['required', 'min:1'],
            'statut_commande' => ['required', 'max:255'],
            'type_paiement' => ['required', 'max:255'],
            'cod_facture' => ['required', 'max:255'],
            'produits' => ['required', 'array', 'exists:produits,id'],
            'clients' => ['required', 'array', 'exists:clients,id']
        ];
    }
}
