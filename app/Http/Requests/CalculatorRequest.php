<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    protected $rules = [
        'a' => 'required|integer',
        'b' => 'required|integer',
    ];
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function authorize()
    {
        return true;
    }
    public function rules(Request $request): array
    {
        return $this->rules;
        // TODO @laravel-test
    }

    public function getA(Request $request): int
    {
        return $this->rules;
    }

    public function getB(Request $request): int
    {
        return $this->rules;
    }
}
