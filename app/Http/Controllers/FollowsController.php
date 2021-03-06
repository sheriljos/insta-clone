<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        if (!$userId = $request->userId) {
            return Response::make(view('errors.notFound'), 404);
        }

        $user = User::findOrfail($userId);
        return auth()->user()->following()->toggle($user->profile);
    }
}
