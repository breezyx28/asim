<?php

namespace App\Http\Requests\PaymentMethods;

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
            'name' => 'nullable|string|max:191',
            'payment_number' => 'nullable|numeric|digits_between:14,22',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'إسم طريقة الدفع يجب ان يكون نص',
            'name.max' => 'إسم طريقة الدفع تجاوز الطول المسموج للنص',

            'payment_number.numeric' => 'الرقم يجب ان يكون من نوع رقم',
            'payment_number.digits_between' => 'طول الرقم يجب ان يتراوح بين ال14 إلى 22',
        ];
    }
}
