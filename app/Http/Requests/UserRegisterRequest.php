<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'userName'=>'bail|required|unique:login',
            'address'=>'bail|required|',
            'phone'=>'bail|required|numeric|min:8',
            'password'=>'bail|required|same:confirmPassword',
            'confirmPassword'=>'required'

            
        ];
    }
}
