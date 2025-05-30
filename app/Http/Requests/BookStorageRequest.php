<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStorageRequest extends FormRequest
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
			'title' => 'required|string',
			'author_id' => 'required|integer|exists:authors,id',
		];
	}
}
