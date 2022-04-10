<?php

namespace App\Http\Requests\Orders;

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
            'quantity' => 'required|numeric|min:1',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'order_number.required' => 'رقم الطلب مطلوب',
            'order_number.numeric' => 'رقم الطلب يجب ان يكون رقمي',

            'quantity.required' => 'الكمية مطلوبة',
            'quantity.numeric' => 'الكمية يجب ان تكون رقمية',
            'quantity.min' => 'أقل كمية هي 1',

            'user_id.required' => 'المستخدم مطلوب',
            'user_id.exists' => 'المستخدم غير موجود في السجلات',

            'product_id.required' => 'المنتج مطلوب',
            'product_id.exists' => 'المنتج غير موجود في السجلات',
        ];
    }
}
