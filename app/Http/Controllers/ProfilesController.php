<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     * @param string $userName
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(string $userName)
    {
        if (!$user = User::where('username', $userName)->first()) {
            return Response::make(view('errors.notFound'), 404);
        }

        return view('profiles.index', 
            ['user' => $user]
        );
    }

    /**
     * Render view for editing profile
     * 
     * @param int $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user->profile);

        return view('profiles.edit', ['user' => $user]);
    }

    /**
     * Update the profile
     * 
     * @param ProfileRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(ProfileRequest $request)
    {
        $profileArray = $request->toArray();

        if ($requestImage = $request->image) {
            $imagePath = $requestImage->store('uploads', 'public');
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
