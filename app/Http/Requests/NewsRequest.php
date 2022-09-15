<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'demo'=>'required',
            'category'=>'required',
            'news.*.name.required' => 'You must have an news name.',
            'news.*.subject.required'=> 'You must have an news subject',
            'news.*.author.required' => 'You must have an news author',
        ];
    }
}
