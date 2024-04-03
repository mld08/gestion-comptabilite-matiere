<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'min:3'],
            'fournisseur_id' => ['array', 'exists:fournisseurs,id', 'required'],
            'description' => ['required','min:3'],
            'prix_unitaire' => ['required', 'numeric'],
            'quantite' => ['required', 'numeric']
        ];
    }
}
