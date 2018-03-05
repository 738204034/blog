<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBlogPostRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller ;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request){
        /*
         * 表单验证
         * */
        $this->validate($request, [
            'name' => 'required|max:18',
            'password' => 'required|max:18|min:6',
            'textarea' => 'max:90',
            'chengshi' => 'required',
            'file' => 'required',
        ],[
            'name.required' => '用户名不能为空',
            'name.max' => '用户名长度不能大于:max',

            'password.required' => '密码不能为空',
            'password.min' => '密码长度必须大于:min',
            'password.max' => '密码长度必须小于:max',

            'textarea.max' => '留言长度不能大于:max',

            'file.required' => '请选择图片'
        ]);

        /*
         * ajax验证
         * */
//        $input=$request->all();
//        $rules = [
//            'name' => 'required|max:18',
//            'password' => 'required|max:18|min:6',
//            'textarea' => 'max:90',
//            'chengshi' => 'required',
//            'file' => 'required',
//        ];
//        $message = [
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
//        $validator = Validator::make($input,$request->rules(),$request->message());
//
//
//        if ($validator->fails()) {
//            return response()->json(['result' =>$validator->errors()->first()]);
//        }else{
//            return response()->json(['result' => 'ok']);
//        }

    }
}
