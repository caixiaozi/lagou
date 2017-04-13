<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
<<<<<<< HEAD
            'username' => 'required',
=======
            'email' => 'required',
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
            'password' => 'required',
            'code' => 'captcha'
        ];
    }

    public function messages()
    {
        return [
<<<<<<< HEAD
            'username.required' => '用户名不能为空',
=======
            'email.required' => '邮箱不能为空',
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
            'password.required' => '密码不能为空',
            'code.captcha' => '验证码错误',
        ];
    }
}
