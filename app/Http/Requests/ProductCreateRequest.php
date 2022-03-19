<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' => 'required | unique:products',
            'price' => 'required |numeric',
            //lt: giá khuyến mãi nhỏ hơn giá gốc, lte: giá khuyến mãi bằng giá gốc
            'sale_price' => 'lt:price|numeric',
            //'upload' => 'mimes:jpg,jpeg,png,gif|required',
            'descriptions' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm không được trùng',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'sale_price.numeric' => 'Giá khuyến mãi phải là số',
            'sale_price.lt' => 'Giá khuyến mãi phải nhỏ hơn giá sản phẩm',
            'upload.required' => 'Ảnh chưa có',
            'descriptions.required' => 'Chưa có mô tả sản phẩm',
        ];
    }   
}
