<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('user-create');
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
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
            'image_path' => '',
            'roles' => 'required',
            'departments' => 'required'
        ];
    }

    // 验证字段必须有一个匹配字段 foo_confirmation，例如，如果验证字段是 password，必须输入一个与之匹配的password_confirmation 字段。
    public function messages()
    {
        return [
            'name.required' => '名字：必填',
            'email.required' => '邮件：必填',
            'password.required' => '密码：必填',
            'password_confirmation.required' => '确认密码：必填',
            'roles.required' => '权限：必填',
            'departments.required' => '部门：必填',
            'work_number.numeric' => '工作号码：填写数字',
            'personal_number.numeric' => '私人号码：填写数字',
            'password.min' => '密码：不可少于5位',
            'password_confirmation.min' => '确认密码：不可少于5位',
            'email.email' => '邮件：格式不对',
            'password.confirmed' => '密码不一致'
        ];
    }
}
