<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
	public function indexPage(): Response
	{
		return Inertia::render('Site/Index', []);
	}
}
