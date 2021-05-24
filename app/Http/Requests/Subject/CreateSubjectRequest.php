<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubjectRequest extends FormRequest
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
            'certificate_id' => 'required',
            'subject_name:en' => 'required',
            'subject_name:cn' => 'required',
            'subject_name:sc' => 'required',
            'subject_color_background' => 'required',
            'subject_color_text' => 'required',
        ];
    }
}
