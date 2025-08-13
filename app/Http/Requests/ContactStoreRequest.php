<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:20','min:2'],
            'email' => ['required','email'],
            'subject' => ['nullable', 'max:255'],
            'message' => ['nullable', 'max:5000']
        ];
    }
    function messages()
    {
        return[
            'name.required' => 'Please fill the name field',
            'name.max' => 'max length of name have to be 20',
            'name.min' => 'min length of name have to be 2',
            'email.required' => 'Please fill the email field'
        ];
    }
}
