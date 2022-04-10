<?php

namespace App\Http\Requests\Checkouts;

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
            'order_number' => 'nullable|numeric',
            'total_price' => 'nullable|numeric',
            'payment_method_id' => 'nullable|exists:payment_methods,id',
        ];
    }

    public function messages()
    {
        return [
            'order_number.numeric' => 'رقم الطلب يجب ان يكون رقمي',

            'total_price.numeric' => 'الإجمالي يجب ان يكون رقمي',

            'payment_method_id.exists' => 'طريقة الدفع غير موجودة في السجلات',
        ];
    }
}
