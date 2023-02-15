<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
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
            'idcs' => 'min:10|max:29',
            'email' => 'required|email|unique:users|max:45',
            'password' => [
                'required',
                'confirmed',
                'max:17',
                Password::min(7)->letters()->mixedCase()->numbers()->symbols(),
            ],
            'last' => 'required|string|max:45',
            'first' => 'required|string|max:45',
            'tel' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/',
            'profile' => 'mimes:jpg,png,jpeg|size<1000000',
            'role' => 'required',
        ];
    }
}