<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStorageRequest;
use App\Models\Book;

class StorageController extends Controller
{
	public function __invoke(BookStorageRequest $request)
	{
		$data = $request->validated();

		$book = Book::create(['title' => $data['title']]);

		if (isset($data['author_id'])) {
			$book->authors()->sync($data['author_id']);
		}

		return response()->json($book);
	}
}