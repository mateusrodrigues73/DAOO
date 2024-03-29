<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required | exists:usuarios',
            'senha' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O email é obrigatório!',
            'email.exists' => 'Usuário não cadastrado!',
            'senha.required' => 'Informe a senha!'
        ];
    }
}
