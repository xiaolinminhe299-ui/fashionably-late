<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:8'],
            'first_name' => ['required', 'string', 'max:8'],
            'gender' => ['required', 'integer', 'in:1,2,3'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'string', 'max:5', 'regex:/^[0-9]+$/'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['nullable', 'string', 'max:255'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }
    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'last_name.string' => '姓を文字列で入力してください',
            'last_name.max' => '姓を8文字以下で入力してください',
            
            'first_name.required' => '名を入力してください',
            'first_name.string' => '名を文字列で入力してください',
            'first_name.max' => '名を8文字以下で入力してください',
            
            'gender.required' => '性別を選択してください',
            'gender.in' => '性別を選択してください',
            
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            
            'tel.required' => '電話番号を入力してください',
            'tel.string' => '電話番号を文字列で入力してください',
            'tel.max' => '電話番号を5桁以内で入力してください',
            'tel.regex' => '電話番号を半角数字で入力してください',
            
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            
            'building.string' => '建物名を文字列で入力してください',
            'building.max' => '建物名を255文字以下で入力してください',
            
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'category_id.integer' => 'お問い合わせの種類を選択してください',
            'category_id.exists' => 'お問い合わせの種類を選択してください',
            
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせ内容を120文字以下で入力してください',
        ];
    }
}
