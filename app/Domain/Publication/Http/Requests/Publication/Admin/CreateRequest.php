<?php

namespace App\Domain\Publication\Http\Requests\Publication\Admin;

use Illuminate\Foundation\Http\FormRequest;
/**
 * Class CreateRequest
 * @package App\Domain\Publication\Http\Requests\Publication\Admin
 */
class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'        => 'O campo :attribute é obrigatório.',
            'title.max'             => 'O campo :attribute pode ter no máximo :max caracteres.',
            'publication.required'  => 'O campo :attribute é obrigatório.',
            //'date.required'         => 'O campo :attribute é obrigatório.',
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
            'title'         => 'required|max:191',
            'publication'   => 'required',
            //'date'          => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title'         => 'Título',
            'publication'   => 'Publicação',
            'date'          => 'Data',
        ];
    }
}
