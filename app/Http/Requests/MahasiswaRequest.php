<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik'           => 'required',
            'npm'           => 'required|max:8',
            'nama'          => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan'       => 'required',
            'email'         => 'required',
            'username'      => 'required|unique:users',
            'password'      => 'required|min:8',
        ];
    }
}
