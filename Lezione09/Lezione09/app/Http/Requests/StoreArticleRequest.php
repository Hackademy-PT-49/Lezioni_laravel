<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:255',
            'description'=>'required',
            'category'=>'required',
            'body'=>'required',
            'image'=>'image',
        ];
    }

    public function messages()
    {
        return [
                'title.required'=>'test',
                'title.max'=>'Il campo :attribute può avere una lunghezza al massimo di :max caratteri'
        ];
    }


}
