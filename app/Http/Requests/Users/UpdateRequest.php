<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:255', 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['nullable', 'min:4'],
            'address' => ['nullable', 'string', 'max:191'],
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'الإسم يجب ان يكون من نوع نص',
            'name.max' => 'الإسم تجاوز الطول المسموح',

            'username.string' => 'إسم المستخدم يجب ان يكون من نوع نص',
            'username.max' => 'إسم المستخدم تجاوز الطول المسموح',
            'username.unique' => 'إسم المستخدم موجود',

            'email.string' => 'البريد الإلكتروني يجب ان يكون من نوع نص',
            'email.max' => 'البريد الإلكتروني تجاوز الطول المسموح',
            'email.email' => 'البريد الإلكتروني يجب ان يكون غير متوافق',
            'email.unique' => 'البريد الإلكتروني موجود',

            'password.min' => 'الحد الأدنى لطول كلمة السر هو 4',

            'address.string' => 'العنوان يجب ان يكون من نوع نص',
            'address.max' => 'العنوان تجاوز الطول المسموح',
        ];
    }
}
