<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     * @param string $user
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(string $user)
    {
        if (!$user = User::where('username', $user)->first()) {
            //TODO: return a default template
            dd('no user dude');
        }

        return view('profiles.index', 
            ['user' => $user]
        );
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('profiles.edit', ['user' => $user]);
    }

    public function update(ProfileRequest $request)
    {
        $profileArray = $request->toArray();

        if ($request->image) {
            $imagePath = $request->image->store('uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
            $image->save();
    
            $profileArray['image'] = $imagePath;
        }

        auth()->user()->profile->update(
            $profileArray
        );

        return view('profiles.index', 
            ['user' => auth()->user()]
        );
    }
}
