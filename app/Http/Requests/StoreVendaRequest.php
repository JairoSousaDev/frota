<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
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
            'placaVeiculo' => 'required',
            'nomeCliente' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'placaVeiculo.required' => 'Informe ou cadastre o Veículo!',
            'nomeCliente.required' => 'Informe ou cadastre o Cliente!',
        ];
    }
}
