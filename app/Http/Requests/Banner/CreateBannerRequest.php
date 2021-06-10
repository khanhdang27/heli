<?php


namespace App\Http\Requests\Banner;


use Illuminate\Foundation\Http\FormRequest;

class CreateBannerRequest extends FormRequest
{
    /**
     * @return bool
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
            'banner_photo' => 'image|mimes:jpg,jpeg,png',
        ];
    }
}
