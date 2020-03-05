<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'status'=>'bail|required',
            'name'=>'bail|required',
            'selling_price'=>'bail|required|numeric',
            'buying_price'=>'bail|required|numeric',
            'quantity'=>'bail|required|numeric',
            'description'=>'required',
            'location'=>'bail|required',
            'subcategory_id'=>'required|numeric',
            
        ];
    }
}
