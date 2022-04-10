<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'min:4'],
            'address' => ['nullable', 'string', 'max:191'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الإسم مطلوب',
            'name.string' => 'الإسم يجب ان يكون من نوع نص',
            'name.max' => 'الإسم تجاوز الطول المسموح',

            'username.required' => 'إسم المستخدم مطلوب',
            'username.string' => 'إسم المستخدم يجب ان يكون من نوع نص',
            'username.max' => 'إسم المستخدم تجاوز الطول المسموح',
            'username.unique' => 'إسم المستخدم موجود',

            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.string' => 'البريد الإلكتروني يجب ان يكون من نوع نص',
            'email.max' => 'البريد الإلكتروني تجاوز الطول المسموح',
            'email.email' => 'البريد الإلكتروني يجب ان يكون غير متوافق',
            'email.unique' => 'البريد الإلكتروني موجود',

            'password.required' => 'كلمة السر مطلوبة',
            'password.min' => 'الحد الأدنى لطول كلمة السر هو 4',

            'address.string' => 'العنوان يجب ان يكون من نوع نص',
            'address.max' => 'العنوان تجاوز الطول المسموح',
        ];
    }
}
