<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'type'=> 'required',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'post_id'=> 'required',
            'password'=> 'required',
            'email'=> 'email',
            //'photo'=> 'required',
            'sex'=> 'required',
            'edu'=> 'required',
            'phone'=> 'required|numeric',
            //'date_birth'=> 'required',
            'address'=> 'required',
            'national_id'=> 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'type.required'=>'a role attribute is required',
            'first_name.required'=>'a first_name attribute is required',
            'last_name.required'=>'a last_name attribute is required',
            'post_id.required'=>'a  post.id attribute is required',
            'post_id.unique'=>'already is register',
            'password.required'=>'a  post.id attribute is required',


        ];
    }
}
