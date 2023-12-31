<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{
	use HasFactory;

	protected $table = 'wishlist';

	public function wishlistCategory(): BelongsTo
	{
		return $this->belongsTo(CategoryWishlist::class);
	}
}
