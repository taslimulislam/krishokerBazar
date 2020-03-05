<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
            'name'=>'bail|required',
            'phone'=>'bail|required|numeric|unique:seller',
            'email'=>'bail|required|email:rfc,dns|unique:seller',
            'address'=>'required',
            'login_id'=>'bail|required|numeric'
        ];
    }
}
