<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class IndexController extends Controller
{
	public function __invoke(): string
	{
		$books = Book::all();
		return response()->json($books);
	}
}