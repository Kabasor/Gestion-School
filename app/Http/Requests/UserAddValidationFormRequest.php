<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddValidationFormRequest extends FormRequest
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
            'matricule' => ['required', 'string', 'min:2', 'max:30'],
            'nom' => ['required', 'string', 'min:2', 'max:30'],
            'prenom' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telephone' => 'nullable|numeric|digits:9',
            'fonction' => ['required', 'string', 'min:3', 'max:15',],
            'role' => ['required', 'string', 'min:2', 'max:50'],
            'diplome' => ['required', 'string', 'min:2', 'max:50'],
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|min:2|max:50',
            'biographie' => 'nullable|string|min:3|max:255',
            'adresse' => 'nullable|string|min:3|max:100',
            'sexe' => ['required', 'string', 'min:3', 'max:15'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png',],
            'salaire' => ['nullable', 'string', 'min:0',],
            // 'active '=>['nullable', 'string', 'min:0',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'nom' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
