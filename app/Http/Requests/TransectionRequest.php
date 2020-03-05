<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransectionRequest extends FormRequest
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
            'total_price'=>'bail|required|numeric',
            'date_time'=>'bail|required|',
            'customer_id'=>'bail|required|numeric',

        ];
    }
}
