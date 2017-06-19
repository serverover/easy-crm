<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimeTaskRequest extends FormRequest
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
            'title' => 'required',
            'comment' => '',
            'time' => 'required',
            'value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '标题：必填',
            'time.required' => '时间：必填',
            'value.required' => '数值：必填',
        ];
    }
}
