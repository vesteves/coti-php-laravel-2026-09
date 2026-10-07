<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Auth;

class UpdateQuartoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'disponivel' => $this->disponivel === 'true',
            'valorDiaria' => intval($this->valorDiaria)
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'min:3'], // aaa
            'tipo' => ['required', 'in:Solteiro,Casal'], // enum
            'valorDiaria' => ['required', 'numeric', 'min:3'], // 3
            'disponivel' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Informe o nome do quarto.',
            'nome.min' => 'O nome deve possuir pelo menos 3 caracteres.',

            'tipo.required' => 'Selecione o tipo do quarto.',
            'tipo.in' => 'O tipo selecionado não é permitido.',

            'valorDiaria.required' => 'Informe o valor da diária.',
            'valorDiaria.numeric' => 'A diária precisa ser um número.',
            'valorDiaria.min' => 'O valor da diária deve ser de pelo menos R$ 1.',

            'disponivel.boolean' => 'O dado de disponibilidade precisa ser true ou false',
        ];
    }
}
