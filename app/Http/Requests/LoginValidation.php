<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidation extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required','string', 'email','max:255'],
            'password' => ['required','string','min:4'],
        ];
    }

    public function messages(){
        return[


                    'email.required' =>'Email is required',
                    'email.email'=>'Email shoud be valid',
                    'password.required' =>'Password is required',
                    'password.min' =>'Password should be at least 4 characters',
                ];
    }

}
