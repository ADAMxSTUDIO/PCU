<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class TreatmentRequest extends FormRequest
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
            'patient' => 'required|regex:/^[0-9]+$/|unique:users|max:' . User::all()->count(),
            'agent' => 'required|string|max:25',
            'details' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // Patient error messages
            'patient.unique' => 'Erreur, un problème est survenu! Veuillez re-lancer la page à nouveau.',
            'patient.max' => 'Erreur, un problème est survenu! Veuillez re-lancer la page à nouveau.',
            'patient.regex' => 'Erreur, un problème est survenu! Veuillez re-lancer la page à nouveau.',
            'patient.required' => 'Il faut choisir obligatoirement un :attribute.',
            // Agent error messages
            'agent.required' => 'Le champ d\':attribute est obligatoire.',
            'agent.alpha' => 'Le champ d\':attribute est invalid.',
            'agent.max' => 'Le champ d\':attribute ne doit pas dépaser :max.',
            // Details error messages
            'details.required' => 'Le champ d\':attribute est obligatoire.',
            'details.string' => 'Le champ d\':attribute est invalid.',
            'details.max' => 'Le champ d\':attribute ne doit pas dépaser :max.',
        ];
    }
}