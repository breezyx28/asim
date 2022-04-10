<?php

namespace App\Http\Requests\ProductDetails;

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
            'feature' => 'nullable|string|max:191',
            'description' => 'nullable|string|max:191',
            'section' => 'nullable|string|max:191',
            'product_id' => 'nullable|exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'feature.string' => 'التقنية يجب ان تكون نص',
            'feature.max' => 'التقنية تجاوزت الحد المسموح للأحرف',

            'description.string' => 'الوصف يجب ان تكون نص',
            'description.max' => 'الوصف تجاوزت الحد المسموح للأحرف',

            'section.string' => 'القسم يجب ان تكون نص',
            'section.max' => 'القسم تجاوزت الحد المسموح للأحرف',

            'product_id.exists' => 'المنتج غير موجود في السجلات',
        ];
    }
}
