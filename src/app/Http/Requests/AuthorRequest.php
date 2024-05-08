<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'last_name' => 'required', // 姓を入力してください
            'first_name' => 'required', // 名を入力してください
            'gender' => 'required', // 性別
            'email' => 'required|email', // メールアドレス
            'phone1' => 'required|numeric', // 数字のみを許可, // 電話番号を入力してください
            'address' => 'required', // 住所
            'inquiry_type' => 'required', // お問い合わせの種類
            'message' => 'required|min:0|max:120', // お問い合わせ内容
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'phone.required' => '電話番号を入力してください',
            'phone.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'message.required' => 'お問い合わせ内容を入力してください',
            'message.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }

    protected function getRedirectUrl()
    {
        return 'verror';
    }
}
