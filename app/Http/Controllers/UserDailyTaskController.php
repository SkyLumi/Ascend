<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTask;
use Illuminate\Support\Facades\Auth;

class UserDailyTaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = UserTask::with('dailyTask') // Memuat relasi ke DailyTask
            ->where('id_user', auth()->id()) // Ambil data berdasarkan user yang login
            ->get();


        return view('user.daily_task', compact('tasks'));
    }

    public function update($id)
    {
        $task = UserTask::findOrFail($id);

        if ($task->id_user === Auth::id()) {
            $task->is_done = true;
            $task->save();
        }

        return redirect()->back()->with('success', 'Tugas berhasil diselesaikan!');
    }

    public function showTimer($id)
{
    $task = UserTask::with('dailyTask')->findOrFail($id);

    if ($task->id_user !== Auth::id()) {
        abort(403, 'Unauthorized access');
    }

    return view('user.timer', ['task' => $task]);
}

}
