<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingOverallRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('administrator');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'task_complete_allowed' => 'required',
            'task_assign_allowed'   => 'required',
            'lead_complete_allowed' => 'required',
            'lead_assign_allowed'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'task_complete_allowed.required' => '任务全部允许：必填',
            'task_assign_allowed' => '任务分配允许：必填'
            'lead_complete_allowed' => '上级全部允许：必填',
            'lead_assign_allowed' => '上级分配允许：必填'
        ];
    }
}
