<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
	protected $table = 'authors';
	protected $fillable = [];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class, 'author_books');
	}
}
