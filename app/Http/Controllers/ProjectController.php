<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
	public function getProjects(): Response
	{
		$projects = Project::orderBy('created_at', 'desc')->paginate(8);
		abort_if($projects->isEmpty(), 404, 'Projects not found');
		return Inertia::render('Site/Projects', ['models' => $projects]);
	}
}
