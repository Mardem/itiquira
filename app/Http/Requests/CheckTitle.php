<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckTitle extends FormRequest
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
            'name' => 'required',
            'cpf' => 'required|formato_cpf|cpf',
            'rg' => 'required',
            'areaCode' => 'required',
            'phone' => 'required',
            'accepted' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'cpf' => 'CPF',
            'rg' => 'RG',
            'areaCode' => 'DDD',
            'phone' => 'número de telefone',
            'accepted' => 'regulamento',
        ];
    }
}
