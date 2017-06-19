<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('user-update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'address' => '',
            'work_number' => 'numeric',
            'personal_number' => 'numeric',
            'password' => 'sometimes',
            'password_confirmation' => 'sometimes',
            'image_path' => '',
            'roles' => 'required',
            'departments' => ''
        ];
    }

    public function messgaes()
    {
        return [
            'name.required' => '名字：必填',
            'email.required' => '邮件：必填',
            'password.required' => '密码：必填',
            'password_confirmation.required' => '确认密码：必填',
            'roles.required' => '权限：必填',
            'departments.required' => '部门：必填',
            'work_number.numeric' => '工作数量：必填',
            'personal_number.required' => '个人数量：必填',
            'password.min' => '密码：不可少于5位',
            'password_confirmation.min' => '确认密码：不可少于5位',
            'email.email' => '邮件：格式不对',
            'password.confirmed' => '密码不一致'
        ];
    }
}
