<?php

namespace App\Http\Requests\Orders;

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
            'quantity' => 'nullable|numeric|min:1',
            'user_id' => 'nullable|exists:users,id',
            'product_id' => 'nullable|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'order_number.numeric' => 'رقم الطلب يجب ان يكون رقمي',

            'quantity.numeric' => 'الكمية يجب ان تكون رقمية',
            'quantity.min' => 'أقل كمية هي 1',

            'user_id.exists' => 'المستخدم غير موجود في السجلات',

            'product_id.exists' => 'المنتج غير موجود في السجلات',
        ];
    }
}
