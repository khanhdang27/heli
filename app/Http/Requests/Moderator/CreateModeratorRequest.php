<?php


namespace App\Http\Requests\Moderator;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateModeratorRequest extends FormRequest
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
            'name' => 'required',
            'full_name' => 'required',
            'email' => [Rule::unique('users','email'),'required'],
            'password' => 'required|min:8',
            'phone' => 'required|numeric'
        ];
    }
}
