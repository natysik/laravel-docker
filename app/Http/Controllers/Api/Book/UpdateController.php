<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateController extends Controller
{
	public function __invoke(BookUpdateRequest $request, $id)
	{
		$data = $request->validated();

		try {
			$book = Book::findOrFail($id);

			if (isset($data['title'])) {
				$book->update(['title' => $data['title']]);
			}

			if (isset($data['author_id'])) {
				$book->authors()->sync($data['author_id']);
			}

			return response()->json($book);
		} catch (ModelNotFoundException $exception) {
			return response()->json(['error' => $exception->getMessage()], 404);
		}
	}
}