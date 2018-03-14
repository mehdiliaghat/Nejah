<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'ave'=>'required',
            'ave_term'=>'required',
            'unit_getting'=>'required',
            'unit_spent'=>'required',
            'unit_term'=>'required',
            'state_term'=>'required',
            'state'=>'required',
            'term'=>'required',
            'arrival'=>'required',
            'nighday'=>'required',
            'num_term'=>'required',
        ];
    }
    public function messages()
    {
        return [

        ];
    }
}
