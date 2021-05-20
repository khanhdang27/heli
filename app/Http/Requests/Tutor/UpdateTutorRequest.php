<?php

namespace App\Http\Requests\Tutor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTutorRequest extends FormRequest
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
            'tutor_name'          => 'required',
            'tutor_photo'         => 'nullable|image|mimes:jpg,jpeg,png',
            'subject_id'          => 'required',
            'tutor_info:en'       => 'required',
            'tutor_info:cn'       => 'required',
            'tutor_info:sc'       => 'required',
            'tutor_level:en'      => 'required',
            'tutor_level:cn'      => 'required',
            'tutor_level:sc'      => 'required',
            'tutor_experience:en' => 'required',
            'tutor_experience:cn' => 'required',
            'tutor_experience:sc' => 'required',
            'tutor_specialized:en' => 'required',
            'tutor_specialized:cn' => 'required',
            'tutor_specialized:sc' => 'required',
        ];
    }
}
