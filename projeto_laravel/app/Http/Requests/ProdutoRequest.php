<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'modelo' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'informacoes' => 'required',
            'preco' => 'required|numeric|gt:0',
            'usuario_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'modelo.required' => 'O campo modelo é obrigatório.',
            'marca.required' => 'O campo marca é obrigatório.',
            'categoria.required' => 'O campo categoria é obrigatório.',
            'informacoes.required' => 'O campo informações é obrigatório.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um valor numérico.',
            'preco.gt' => 'O campo preço deve ser maior que zero.',
            'usuario_id.required' => 'O campo usuário ID é obrigatório.'
        ];
    }
}
