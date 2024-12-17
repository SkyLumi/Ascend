<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class UserChallengeController extends Controller
{
    public function index(Request $request)
    {
        $tasks = UserChallenge::with('Challenge')
            ->where('id_user', auth()->id())
            ->get();


        return view('user.challenge', compact('tasks'));
    }
}
