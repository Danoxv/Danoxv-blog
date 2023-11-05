<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
	public function getProjects(): Response
	{
		return Inertia::render('Site/Projects', []);
	}
}
