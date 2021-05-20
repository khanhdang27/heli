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
            'material_name:en' => 'required',
            'material_name:cn' => 'required',
            'material_name:sc' => 'required',
            'material_image' => 'required|image|mimes:jpg,jpeg,png',
            'material_file' => 'required',
            'material_price' => 'required|integer|min:0',
            'material_description:en' => 'required',
            'material_description:cn' => 'required',
            'material_description:sc' => 'required',
            'material_origin:en' => 'required',
            'material_origin:cn' => 'required',
            'material_origin:sc' => 'required',

        ];
    }
}
