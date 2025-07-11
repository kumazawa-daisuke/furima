<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'profile_image' => ['nullable', 'image', 'mimes:jpeg,png'],
            'name' => ['required', 'string', 'max:20'],
            'zipcode' => ['required', 'regex:/^\d{3}-\d{4}$/'],
            'address' => ['required', 'string'],
            'building' => ['nullable', 'string', 'max:50'],
        ];
    }

    public function messages()
    {
        return [
            'profile_image.image' => 'プロフィール画像は画像ファイルを指定してください',
            'profile_image.mimes' => 'プロフィール画像はjpegもしくはpng形式にしてください',
            'name.required' => 'ユーザー名を入力してください',
            'name.max' => 'ユーザー名は20文字以内で入力してください',
            'zipcode.required' => '郵便番号を入力してください',
            'zipcode.regex' => '郵便番号はハイフンありの8文字（例：123-4567）で入力してください',
            'address.required' => '住所を入力してください',
        ];
    }
}
