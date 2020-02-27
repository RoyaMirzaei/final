<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createLoginRequest extends FormRequest
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
            'fullName'=>'required|string|between:3,30',
            'email'=>'email',
            'userName'=>'required|between:6,12',
            'password'=>'required|between:6,12',
            'passConfirm'=>'required|same:password'

        ];
    }

    public function messages()
    {
      return [
          'fullName.required'=>'لطفا نام و نام خانوادگی وارد نمایید.',
          'email.email'=>'پست الکترونیکی خود را بدرستی وارد نمایید.',
          'userName.required'=>'وارد کردن نام کاربری الزامی می باشد.',
          'userName.between'=>'نام کاربری باید بین 6 تا 12 داشته باشد. ',
          'password.required'=>'وارد کردن رمز عبور الزامی می باشد.',
          'password.between'=>'رمز عبور باید بین 6 تا 12 داشته باشد. ',
          'passConfirm.required'=>'تکرار رمز عبور خود را بدرستی وارد نمایید.',
          'passConfirm.same'=>'تکرار رمز عبور اشتباه است.'
      ];
    }
}
