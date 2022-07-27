<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'make_id'=>['required', 'exists:makes,id'],
            'model_id'=>['required', 'exists:car_models,id'],
            'chassis'=>['required', 'unique:cars,chassis_number'],
            'seats'=>['required', 'integer','min:2'],
            'doors'=>['required', 'integer','min:2'],
            'mileage'=>['required','integer'],
            'year'=>['required', 'integer'],
            'energy'=>['required', 'string'],
            'air_conditioner'=>['required', 'boolean'],
            'color'=>['required', 'string'],
        ];
    }
}
