<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequestion extends FormRequest
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
     * 返回消息
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'title.between'=>'标题必须在6-196位之间',
            'body.required'=>'内容不能为空',
            'body.min'=>'内容最少26个字符',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|between:6,196',
            'body'=>'required|min:26'
        ];
    }
}
