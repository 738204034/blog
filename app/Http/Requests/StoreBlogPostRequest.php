<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
class StoreBlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:18',
            'password' => 'required|max:18|min:6',
            'textarea' => 'max:90',
            'chengshi' => 'required',
            'file' => 'required',
        ];
    }
//    public function message(){
//        return [
//            'name.required' => '用户名不能为空',
//            'name.max' => '用户名长度不能大于:max',
//
//            'password.required' => '密码不能为空',
//            'password.min' => '密码长度必须大于:min',
//            'password.max' => '密码长度不能小于:max',
//
//            'textarea.max' => '留言长度不能大于:max',
//
//            'file.required' => '请选择图片'
//        ];
//    }

}
