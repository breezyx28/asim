<?php

namespace App\Http\Requests\Products;

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
            'name' => 'required|string|max:191',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:191',
            'brand' => 'required|string|max:191',
            'image' => 'required|image|mimes:png, jpg, jpeg',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'إسم المنتج مطلوب',
            'name.string' => 'إسم المنتج يجب ان يكون من نوع نص',
            'name.max' => 'إسم المنتج مطلوب',

            'price.required' => 'السعر مطلوب',
            'price.numeric' => 'السعر يجب ان يكون من نوع أرقام',
            'price.min' => 'السعر أقل قيمة له 0',

            'description.string' => 'الوصق يجب ان يكون من نوع نص',
            'description.max' => 'الوصق تجاوز الحد المسموع لطول الكتابة',

            'brand.required' => 'الشركة المصنعة مطلوبة',
            'brand.string' => 'الشركة المصنعة يجب ان تكون من نوع نص',
            'brand.max' => 'الشركة المصنعة تجاوزت الحد المسموح للكتابة',

            'image.required' => 'صورة المنتج مطلوبة',
            'image.image' => 'صورة المنتج يجب ان تكون من نوع صورة',
            'image.mimes' => 'صورة المنتج يجب ان تكون ضمن png, jpg, jpeg',

            'category_id.required' => 'الصنف مطلوب',
            'category_id.exists' => 'الصنف غير موجود في السجلات',

        ];
    }
}
