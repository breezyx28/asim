<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'إسم المستخدم مطلوب',
            'username.string' => 'إسم المستخدم يجب ان يكون نص',

            'password.required' => 'كلمة السر مطلوب',
            'password.string' => 'كلمة السر يجب ان يكون نص',
        ];
    }
}
