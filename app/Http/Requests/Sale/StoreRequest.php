<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */

  public function rules(): array
  {
    return [
      'user_id' => 'required',
      'sale_date' => 'required|unique:products',
      'total' => 'required',
    ];
  }
  public function messages(): array
  {
    return [
      'user_id.required' => 'El código es obligatorio',
      'sale_date.required' => 'El código es obligatorio',
      'total.required' => 'El precio es obligatorio',
    ];
  }
}
