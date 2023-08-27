<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'postcode' => 'required|regex:/^\d{3}-\d{4}$/u',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => '名字を入力してください',
            'firstname.string' => '名字を文字列で入力してください',
            'lastname.required' => '名前を入力してください',
            'lastname.string' => '名字を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex:/^\d{3}-\d{4}$/u' => 'ハイフンを含めた8文字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => '意見を入力してください',
            'opinion.max:120' => '120文字以内で入力してください',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->input('postcode'), 'a'),
        ]);
    }
}
