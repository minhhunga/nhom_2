<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => 'required|min:6|unique:users,name',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => ':attribute bắt buộc phải nhập',
            'name.min'          => ':attribute phải có ít nhất 6 ký tự',
            'name.unique'       => ':attribute đã tồn tại trong hệ thống',

            'email.required'    => ':attribute bắt buộc phải nhập',
            'email.email'       => ':attribute phải đúng định dạng email',
            'email.unique'      => ':attribute đã tồn tại trong hệ thống',

            'password.required' => ':attribute bắt buộc phải nhập',
            'password.min'      => ':attribute phải có ít nhất 6 ký tự',
            'password.confirmed'=> 'Xác nhận :attribute không khớp',
        ];
    }

    public function attributes()
    {
        return [
            'name'     => 'Tên',
            'email'    => 'Email',
            'password' => 'Mật khẩu',
        ];
    }
}
