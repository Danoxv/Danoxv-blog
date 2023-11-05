<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class WishController extends Controller
{
	public function getWishlist(): Response
	{
		return Inertia::render('Site/Wishlist', []);
	}
}
