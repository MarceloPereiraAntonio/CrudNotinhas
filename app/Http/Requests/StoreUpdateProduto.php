<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduto extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'descricao' => 'nullable|min:3|max:1000',
            'valor' => 'required|gte:1',
        ];
    }
    // para informar mensagem personalizada use a função 'messages' para customizar.
    public function messages(){
        return [
            'name.required' => 'Informe o nome do produto!',
            'name.min' => 'Tamanho mínimo do nome deve ser maior do que 2 caracteres ',
            'name.max' => 'Tamanho maxímo do nome é de 255 caracteres ',
            'valor.required' => 'Informe o valor do produto',
            'valor.gte' => 'Valor deve ser maior ou igual a 1 !'
        ];
    }
}
