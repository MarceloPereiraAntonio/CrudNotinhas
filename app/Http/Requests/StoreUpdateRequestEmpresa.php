<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequestEmpresa extends FormRequest
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
            'cnpj' => 'required|min:14|max:14',
            'razaoSocial' => 'required',
            'im'=> 'required',
            'ie' => 'required',
            'garantia' => 'required'

        ];
    }

    public function messages(){
        return[
            'cnpj.required' => 'CNPJ é obrigatório',
            'cnpj.min' => 'CNPJ deve conter 14 dígitos',
            'cnpj.max' => 'CNPJ deve conter 14 dígitos',
            'razaoSocial.required' => 'Razão Social é obrigatória',
            'im.required' => 'Inscrição Municipal é obrigatória',
            'ie.required' => 'Inscrição Estadual é obrigatória',
            'garantia.required' => 'Selecione uma garantia'
        ];
    }
}
