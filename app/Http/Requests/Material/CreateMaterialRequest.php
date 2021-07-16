<?php


namespace App\Http\Requests\Material;


use Illuminate\Foundation\Http\FormRequest;

class CreateMaterialRequest extends FormRequest
{
    /**
     * @returns bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'course_id' => 'required',
            'course_material_name:en' => 'required',
            'course_material_name:cn' => 'required',
            'course_material_name:sc' => 'required',
            'course_material_description:en' => 'required',
            'course_material_description:cn' => 'required',
            'course_material_description:sc' => 'required',
            'course_material_origin:en' => 'required',
            'course_material_origin:cn' => 'required',
            'course_material_origin:sc' => 'required',
            'file' => 'file|required',
        ];
    }
}
