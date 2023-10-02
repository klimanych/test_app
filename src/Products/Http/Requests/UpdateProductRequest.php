<?php


namespace Src\Products\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array {
        return [
          'name' => 'required|min:10',
          'article' => 'required|regex:/^[A-Za-z0-9]*$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'name.min' => 'Поле "Название" должно быть не менее 10 символов',
            'article.regex' => 'Поле "Артикул" должно содержать только латинские символы и цифры'
        ];
    }
}
