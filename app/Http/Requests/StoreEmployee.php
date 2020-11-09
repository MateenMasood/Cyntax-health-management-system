<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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

            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phoneNo' => 'required|numeric',
            'password' => 'required_with:retypePassword|same:retypePassword',
            'retypePassword' => 'required',
            'dateOfBirth' => 'required',
            'roleId' => 'required|numeric',
            'address' => 'required',
        ];
    }
}
