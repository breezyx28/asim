<?php

namespace App\Http\Requests\Categories;

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
            'name' => 'required|string|unique:categories,name|max:191'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'إسم الصنف مطلوب',
            'name.string' => 'إسم الصنف يجب ان يكون نص',
            'name.unique' => 'إسم الصنف موجود من قبل',
            'name.max' => 'إسم الصنف تجاوز الحد المسموح للكتابة',
        ];
    }
}
