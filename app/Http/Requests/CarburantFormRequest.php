<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarburantFormRequest extends FormRequest
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
            "designation" => ["required","string","min:1"],
            "entree" => ['in:gasoil,super'],
            "sortie" => ['in:gasoil,super'],
            "stocks" => ["required","integer","min:1"]
        ];
    }
}
