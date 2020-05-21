<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $postRequest)
    {
        $post = $postRequest->except('_token');
        auth()->user()->posts()->create($post);

        //TODO: redirect to profile
        return "POST CREATED";
    }
}
