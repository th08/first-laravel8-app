<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nomeCliente'=>'required|min:5|max:50',
            'codigoCliente'=>'required|min:8|max:8|unique:clientes',
            'telefoneCliente'=>'required|min:14|max:15|unique:clientes',
            'idadeCliente'=>'required|min:2|max:2',
        ];
    }
}
