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
            "first_name"=> ["required","string","max:255"],
            "last_name"=> ["required","string","max:255"],
            "gender"=> ["required"],
            "email"=> ["required","string","email","max:255"],
            "tel_1"=> ["required","numeric","digits_between:1,5"],
            "tel_2"=> ["required","numeric","digits_between:1,5"],
            "tel_3"=> ["required","numeric","digits_between:1,5"],
            "address"=> ["required", "max:255"],
            "detail"=>["required"],
            "category_id"=>["required"]
        ];
    }

    public function messages()
{

        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel_1.required' => '電話番号を入力してください',
            'tel_1.numeric' => '電話番号を数値で入力してください',
            'tel_1.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tel_2.required' => '電話番号を入力してください',
            'tel_2.numeric' => '電話番号を数値で入力してください',
            'tel_2.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tel_3.required' => '電話番号を入力してください',
            'tel_3.numeric' => '電話番号を数値で入力してください',
            'tel_3.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせ内容120文字以内で入力してください',
        ];
}

}