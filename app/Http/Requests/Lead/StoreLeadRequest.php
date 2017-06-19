<?php

namespace App\Http\Requests\Lead;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('lead-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'note' => 'required',
            'status' => 'required',
            'user_assigned_id' => 'required',
            'user_created_id' => '',
            'client_id' => 'required',
            'contact_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '标题：必填',
            'note.required' => '备注：必填',
            'status.required' => '类型：必填',
            'user_assigned_id.required' => '分配用户：必填',
            'client_id.required' => '分配客户：必填',
            'contact_date.required' => '联系时间：必填'
        ];
    }
}
