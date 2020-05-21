<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
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
}
