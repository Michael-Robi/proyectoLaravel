<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearEstudianteRequest extends FormRequest
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
          'nombre' => 'required|string|min:6|max:60',
          'apellido' => 'required|string|min:6|max:60',
          'genero' =>  'required|in:masculino,femenino',
          'grado' => 'required|in:6,7,8,9,10,11',
        ];
    }
}
