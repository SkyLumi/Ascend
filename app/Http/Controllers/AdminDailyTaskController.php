<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyTask;

class AdminDailyTaskController extends Controller
{
    public function index(Request $request)
    {
        $daily_tasks = DailyTask::all();
        return view('admin.daily_task', compact('daily_tasks'));
    }

    public function create(Request $request)
    {
        return view('admin.tambah.daily_task');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_daily_task' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'durasi' => 'required|integer|min:1',
            'reward_points' => 'required|integer|min:0',
        ]);

        DailyTask::create([
            'nama_daily_task' => $validated['nama_daily_task'],
            'deskripsi' => $validated['deskripsi'],
            'durasi' => $validated['durasi'],
            'reward_points' => $validated['reward_points'],
        ]);

        return redirect()->route('daily-task.index')->with('success', 'Daily Task berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $dailyTask = DailyTask::findOrFail($id);
        $dailyTask->delete();

        return redirect()->route('daily-task.index')->with('success', 'Daily Task berhasil dihapus!');
    }

    public function edit($id)
    {
        $dailyTask = DailyTask::findOrFail($id);
        return view('admin.edit.daily_task', compact('dailyTask'));
    }

    public function update(Request $request, $id)
    {
        $dailyTask = DailyTask::findOrFail($id);

        $validated = $request->validate([
            'nama_daily_task' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'durasi' => 'required|integer|min:1',
            'reward_points' => 'required|integer|min:0',
        ]);

        $dailyTask->update([
            'nama_daily_task' => $validated['nama_daily_task'],
            'deskripsi' => $validated['deskripsi'],
            'durasi' => $validated['durasi'],
            'reward_points' => $validated['reward_points'],
        ]);

        return redirect()->route('daily-task.index')->with('success', 'Daily Task berhasil diperbarui!');
    }


}
