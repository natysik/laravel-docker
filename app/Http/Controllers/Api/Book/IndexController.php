<?php

namespace App\Http\Controllers\Api\Book;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __invoke(): string
	{
		return 'in index controller';
	}
}