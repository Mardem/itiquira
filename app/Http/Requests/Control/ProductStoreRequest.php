<?php

namespace App\Http\Requests\Control;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (\Auth::user()->profile == array_search('ADMIN', User::PROFILES)) {
            return true;
        }
        return false;
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
            'price' => 'required',
            'available' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'price' => 'preço',
            'plan_id' => 'plano',
            'available' => 'quantidade'
        ];
    }
}
