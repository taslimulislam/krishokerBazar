<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRegisterRequest extends FormRequest
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
            'phone'=>'bail|required|numeric|min:8|unique:admin',
            'email'=>'bail|required|email:rfc,dns|unique:admin',
            'password'=>'bail|required|min:5|same:confirmPassword',
            'confirmPassword'=>'required',
            
        ];
    }
}
