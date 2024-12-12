<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DailyTask;
use App\Models\Challenge;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        $daily_tasks = DailyTask::all();
        $challenges = Challenge::all();

        return view('admin.dashboard', compact('users','daily_tasks','challenges'));
    }

}
