<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DestroyController extends Controller
{
	public function __invoke($id)
	{
		try {
			$book = Book::findOrFail($id);
			$book->delete();

			return response()->json(['message' => 'Book deleted successfully']);
		} catch (ModelNotFoundException $exception) {
			return response()->json(['message' => 'Book not found'], 404);
		} catch (\Exception $exception) {
			return response()->json(['message' => $exception->getMessage()], 500);
		}
	}
}