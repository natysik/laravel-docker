<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ShowController extends Controller
{
	public function __invoke($id)
	{
		try {
			$book = Book::findOrFail($id);
			return response()->json($book);
		} catch (ModelNotFoundException $exception) {
			return response()->json(['massage' => 'Book not found'], 404);
		} catch (\Exception $exception) {
			return response()->json(['massage' => $exception->getMessage()], 500);
		}
	}
}