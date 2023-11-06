<?php

namespace App\Http\Controllers;

use App\Models\CategoryWishlist;
use Inertia\Inertia;
use Inertia\Response;

class WishController extends Controller
{
	public function getWishlist(): Response
	{
		$models = CategoryWishlist::with('wishlists')->get();
		abort_if($models->isEmpty(), 404, 'Wishlist not found');
		return Inertia::render('Site/Wishlist', ['CategoriesWish' => $models]);
	}
}
