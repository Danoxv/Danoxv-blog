<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
	public function indexPage(): Response
	{
		$wish = Wishlist::query()->orderBy(DB::raw('RAND()'))->take(3)->get();
		abort_if($wish->isEmpty(), 404, 'Wishlist not found');
		$projects = Project::query()->orderBy(DB::raw('RAND()'))->take(4)->get();
		abort_if($projects->isEmpty(), 404, 'Projects not found');
		return Inertia::render('Site/Index', ['wishlists' => $wish, 'projects' => $projects]);
	}
}
