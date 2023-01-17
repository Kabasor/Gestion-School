<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEleveRequest extends FormRequest
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
            'matricule'=>'required|min:3|unique:eleves',
            'nom'=>'required',
            'prenom'=>'required',
            'dateNaissance'=>'required|date',
            'lieuNaissance'=>'required',
            'genre'=>'required',
            'nationalite'=>'required',
            'pere'=>'required',
            'mere'=>'required',
            'tuteur'=>'required',
            'phone'=>'required|min:9',
            // 'email',
            'adresse'=>'required',
            // 'description',
            // 'image'=>'required|mimes:jpg,jpeg,gif,png,svg',
        ];
    }
    public function messages()
   {
     return[
         'required' =>'le champ :attribute est obligatoire',
         'min' => 'vous devez entrez au moin :min caractere',
         'unique' =>'le champ :attribute doit  etre unique'
     ];
   }
}
