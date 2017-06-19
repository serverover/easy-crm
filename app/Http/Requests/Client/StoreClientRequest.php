<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return auth()->user()->can('client-create');
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
            'name' => 'required',
            'company_name' => 'required',
            'vat' => 'max:12',
            'email' => 'required|email',
            'address' => '',
            'zipcode' => 'max:6',
            'city' => '',
            'primary_number' => 'max:10',
            'secondary_number' => 'max:10',
            'industry' => '',
            'company_type' => '',
            'user_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '客户名字：必填',
            'company_name.required'  => '公司名字：必填',
            'email.required'  => '邮件：必填',
            'email.email'  => '邮件格式不对',
            'user_id.required' => '请添加用户：（必填）',
            'vat.max' => '增值税：不可超过12个字段',
            'zipcode.max' => '邮政编码：不可超过6个字段',
            'primary_number.max' => '常用号码：不可超过10个字段',
            'secondary_number.max' => '联系电话：不可超过10个字段',

        ];
    }
}
