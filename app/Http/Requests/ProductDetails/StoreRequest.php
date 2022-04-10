<?php

namespace App\Http\Requests\ProductDetails;

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
            'feature' => 'required|string|max:191',
            'description' => 'required|string|max:191',
            'section' => 'required|string|max:191',
            'product_id' => 'required|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'feature.required' => 'التقنية مطلوبة',
            'feature.string' => 'التقنية يجب ان تكون نص',
            'feature.max' => 'التقنية تجاوزت الحد المسموح للأحرف',

            'description.required' => 'الوصف مطلوبة',
            'description.string' => 'الوصف يجب ان تكون نص',
            'description.max' => 'الوصف تجاوزت الحد المسموح للأحرف',

            'section.required' => 'القسم مطلوبة',
            'section.string' => 'القسم يجب ان تكون نص',
            'section.max' => 'القسم تجاوزت الحد المسموح للأحرف',

            'product_id.required' => 'المنتج مطلوبة',
            'product_id.exists' => 'المنتج غير موجود في السجلات',
        ];
    }
}
