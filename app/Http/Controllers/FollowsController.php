<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(Request $request)
    {
        if (!$userId = $request->userId) {
            //TODO: Not allowed
            dd("404");
        }
        $user = User::findOrfail($userId);
        return auth()->user()->following()->toggle($user->profile);
    }
}
