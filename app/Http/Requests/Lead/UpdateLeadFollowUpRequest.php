<?php

namespace App\Http\Requests\Lead;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadFollowUpRequest extends FormRequest
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
            'contact_date' => 'required',
            'contact_time' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'contact_date.required' => '联系日期：必填',
            'contact_time.required' => '联系时间：必填',
        ];
    }
}
