<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','unique:users'],
            'password'=>['required','string','confirmed'],
            'image'=>'required',
            'state'=>'required',
            'street'=>'required',
            'local_government'=>'required',
            'phone_number'=>'required'

        ];
    }
}
