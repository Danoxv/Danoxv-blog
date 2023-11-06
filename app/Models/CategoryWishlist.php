<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryWishlist extends Model
{
	use HasFactory;

	protected $table = 'category_wishlist';

	public function wishlists(): HasMany
	{
		return $this->hasMany(Wishlist::class);
	}
}
