<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException; //added
use Exceptions; //added
use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;
use App\User;
class PostController extends Controller
{
    /**
	 * Show the form to create a new blog post.
	 *
	 * @return Response
	 */
	public function create()
	{
				
	    return view('post.create');
	}

	public function show()
	{

	    return view('errors.custom');
	}

	/**
	 * Store the incoming blog post.
	 *
	 * @param  StoreBlogPost  $request
	 * @return Response
	 */
	public function store(StoreBlogPost $request)
	{
	    // The incoming request is valid...

	    // Retrieve the validated input data...
	    $validated = $request->validated();
	    
	    dd($validated);
	    
	}
}
