<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'website' => ['required','string','max:255'],
            'logo' => ['required', 'image','mimes:jpeg,png,jpg,gif,svg'],

        ];
    }
    public function messages(){
        return[

                    'name.required' =>'Name is required',
                    'email.required' =>'Email should be unique',
                    'website.required' =>'Website is required',
                    'website.max'=>'Website should not be more than 255 characters',
                    'logo.required' =>'Image is required',
                    'logo.image' =>'Image must be image',
                    'logo.mimes' =>'Image must be image',

                ];
    }
}
