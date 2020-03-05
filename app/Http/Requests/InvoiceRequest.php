<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'product_id'=>'bail|required|unique:invoice',
            'unit_price_quantity'=>'bail|required|numeric',
            'total_price'=>'bail|required|numeric',
            'status'=>'bail|required|min:9',
            'transection_id'=>'required|numeric',
            
        ];
    }
}
