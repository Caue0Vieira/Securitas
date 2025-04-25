<?php

namespace App\Http\Requests;

use App\Models\Funcionarios;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFuncionariosRequest extends FormRequest
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
        $rules = Funcionarios::$rules;
        
        return $rules;
    }
}
