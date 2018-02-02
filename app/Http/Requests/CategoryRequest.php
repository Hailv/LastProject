<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống tên thẻ ',
            'name.min' => 'Tên có ít nhất 3 kí tự ',
            'name.max' => 'Tên không vượt quá 255 kí tự '
        ];
    }
}
