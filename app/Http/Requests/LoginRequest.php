<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "alpha", "min:6"],
            "email" => "required",
            "password" => "required"
        ];
    }
    public function messages(): array
    {
        return
            [
                "name.required" => "Please Enter Your User Name!",
                "email.required" => "Email Not Valid Please Enter Your Valid Email",
                "password.required" => "Please Enter Your Password",

            ];

    }



}
