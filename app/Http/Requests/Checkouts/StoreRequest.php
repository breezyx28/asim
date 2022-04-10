<?php

namespace App\Http\Requests\Checkouts;

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
            'order_number' => 'required|numeric',
            'total_price' => 'required|numeric',
            'payment_method_id' => 'required|exists:payment_methods,id',
        ];
    }

    public function messages()
    {
        return [
            'order_number.required' => 'رقم الطلب مطلوب',
            'order_number.numeric' => 'رقم الطلب يجب ان يكون رقمي',

            'total_price.required' => 'الإجمالي مطلوب',
            'total_price.numeric' => 'الإجمالي يجب ان يكون رقمي',

            'payment_method_id.required' => 'طريقة الدفع مطلوبة',
            'payment_method_id.exists' => 'طريقة الدفع غير موجودة في السجلات',
        ];
    }
}
