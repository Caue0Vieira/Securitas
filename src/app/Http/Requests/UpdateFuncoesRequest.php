<?php

namespace App\Http\Requests;

use App\Models\Funcoes;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFuncoesRequest extends FormRequest
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
        $rules = Funcoes::$rules;
        
        return $rules;
    }
}
