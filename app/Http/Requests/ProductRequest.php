<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'product_code' => 'required',
            'serial' => 'required|max:255',
            'detail' => 'required|max:255',
            'description' => 'required|max:1000',
            'import_date' => 'required|date',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'views' => 'required|numeric',
            'buys' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không để trống trường tên ',
            'name.min' => 'Tên ít nhất có 5 kí tự ',
            'name.max' => 'Tên có tối đa 255 kí tự',
            'product_code.required' => 'Bạn chưa nhập trường mã sản phẩm ',
            'serial.required' => 'Bạn chưa nhập trường serial ',
            'serial.max' => 'Serial có tối đa 255 kí tự',
            'detail.required' => 'Bạn chưa nhập trường detail',
            'detail.max' => 'Detail có tối đa 255 kí tự ',
            'description.required' => 'Bạn chưa nhập trường description',
            'description.max' => 'description có tối đa 255 kí tự ',
            'import_date.required' => 'Bạn chưa nhập trường import_date',
            'import_date.date' => 'Bạn nhập chưa đúng định dạng',
            'quantity.required' => 'Bạn chưa nhập trường quantity',
            'quantity.numeric' => 'Bạn cần nhập giá trị số ',
            'price.required' => 'Bạn chưa nhập trường price',
            'price.numeric' => 'Bạn cần nhập giá trị là số ',
            'views.required' => 'Bạn chưa nhập trường views',
            'views.numeric' => 'Bạn cần nhập giá trị số ',
            'buys.required' => 'Bạn chưa nhập trường buys',
            'buys.numeric' => 'Bạn cần nhập giá trị số ',
            'img.image' => 'Bạn nhập file không phải ảnh '
        ];
    }
}
