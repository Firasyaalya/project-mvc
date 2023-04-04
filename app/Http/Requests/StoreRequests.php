<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rule_task_unique = Rule::unique('store', 'store');
        if ($this->method() !== 'POST'){
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'store' => ['required', $rule_task_unique],
            'user' => ['required']
        ];
    }

    public function messages(){
        return[
            'required' => 'Isian :attribute harus di isi',
            'user.required' => 'Nama pengguna harus di isi',
        ];
    }
}
