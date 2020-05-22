<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Intervention\Image\Facades\Image;

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
        $imagePath = $postRequest->image->store('uploads', 'public');
        
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $postRequest->caption,
            'image'   => $imagePath
        ]);

        return redirect('/profile/'. auth()->user()->username);
    }

    public function show(int $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', [ 'post' => $post] );
    }
}
