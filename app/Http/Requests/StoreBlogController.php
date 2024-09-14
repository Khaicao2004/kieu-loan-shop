<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogController extends FormRequest
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
           'name' => 'required',
           'image' => '|required|image|mimes:png,jpg,webp',
           'content' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
           'name.required' => 'Tên bài viết là bắt buộc',
           'image.required' => 'Ảnh là bắt buộc',
           'content.required' => 'Nội dung là bắt buộc'
        ];
    }
}
