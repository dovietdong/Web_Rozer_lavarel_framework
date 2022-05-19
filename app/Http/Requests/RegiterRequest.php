<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegiterRequest extends FormRequest
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
            'name' => 'required | unique:accounts',
            'password' => 'required',
            'phone' => 'required |numeric',
            'address' => 'required',
            're_password' => 'required | same:password',
            'email' => 'required | email'
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Tên tài khoản không được để trống',
        'name.unique' => 'Tên tài khoản đã được sử dụng',
        'password.required' => 'mat khau không được để trống',
        're_password.required' => 'mat khau không được để trống',
        're_password.same' => 'nhap lai mat khau chua dung',
        'phone.required' => 'SDT không được để trống',
        'address.required' => 'dia chi không được để trống',
        'email.required' => 'dia chi email không được để trống',
    ];
}
}
