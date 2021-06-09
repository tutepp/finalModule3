<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCoffeeRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'price' => 'required|numeric|min:10000',
        ];
    }
    public function message()
    {
        $messages = [
            'name.required' => 'Cần điền đày đủ họ và tên tác giả',
            'name.min' => 'Tên phải từ 2 tới 30 ki tự!',
            'name.max' => 'Tên phải từ 2 tới 30 ki tự!',
            'price.required' => 'Vui lòng cung cấp gia tien!',
            'price.numeric' => 'Gia phải dưới dạng số',
            'price.min' => 'Gia phai tren 10000!',
        ];
        return $messages;
    }

}
