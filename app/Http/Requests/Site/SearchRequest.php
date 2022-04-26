<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'criteria_id' => 'required|numeric|max:100|exists:main_criterias,id',
            'rule_id' => 'required|numeric|max:100|exists:roles,id',
            'activity_id' => 'required|numeric|max:100|exists:activities,id',
        ];
    }

    public function messages() {
        return [
            'criteria_id.exists' =>  __('المعيار اللذي قمت باختياره غير موجود'),
            'criteria_id.required' => __('من فضلك اختر معيار'),
            'criteria_id.numeric' => __('يجب ان يكون اسم المعيار ارقام'),

            'rule_id.exists' =>  __('القاعده اللتي قمت باختيارها غير موجوده'),
            'rule_id.required' => __('من فضلك اختر القاعده'),
            'rule_id.numeric' => __('يجب ان تكون القاعده ارقام'),

            'activity_id.exists' =>  __('النشاط اللذي قمت باختياره غير موجود'),
            'activity_id.required' => __('من فضلك اختر النشاط'),
            'activity_id.numeric' => __('يجب ان يكون النشاط ارقام'),
        ];
    }
}
