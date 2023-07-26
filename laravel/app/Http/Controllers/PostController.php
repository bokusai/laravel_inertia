<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();

		$postsForResponse = [];
		foreach ($posts as $post) {
			$postsForResponse[] = [
				'title' => $post->title,
				'body' => $post->body,
			];
		}
		return Inertia::render('Post/Index', $postsForResponse);
	}
}
