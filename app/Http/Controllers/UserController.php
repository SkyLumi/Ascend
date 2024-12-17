<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTask;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = User::all();

        $tasks = UserTask::with('dailyTask')
        ->where('id_user', auth()->id())
        ->get();

        return view('user.homepage', compact('tasks', 'user'));
    }
}
