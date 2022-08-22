<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RideRequest extends FormRequest
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
            'car_id'=>['required', 'exists:cars,id'],
            'path_id'=>['required', 'exists:paths,id'],
            'number_of_seats'=>['required', 'integer','min:1','max:5'],
            'remaining_seats'=>['required', 'integer','min:1'],
            'date'=>['date', 'after_or_equal:today','min:2'],
            'estimated_duration'=>['required','integer'],
            'stopover'=>['required', 'String', 'max:200'],
            'energy'=>['required', 'string'],
            'air_conditioner'=>['required', 'boolean'],
        ];
    }
}
