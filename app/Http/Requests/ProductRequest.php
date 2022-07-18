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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'image' => 'required',
            'status' => 'required',          
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui Lòng Nhập Tên',
            'price.required' => 'Vui Lòng Nhập Price',
            'intro.required' => 'Vui Lòng Nhập Intro',
            'content.required' => 'Vui Lòng Nhập Content',
            'image.required' => 'Vui Lòng Chọn Hình Ảnh',
            'status.required' => 'Vui Lòng Cập Nhật Status',          
        ];
    }
}
