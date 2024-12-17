<?php

use App\Models\User;
use App\Models\DailyTask;
use App\Models\UserTask;
use Illuminate\Console\Command;


class AddDailyTaskToUsers extends Command
{
    protected $signature = 'task:add-new-to-users';
    protected $description = 'Tambahkan daily task baru ke semua user';

    public function handle()
    {
        // Ambil semua daily tasks baru
        $tasks = DailyTask::all();

        // Ambil semua user
        $users = User::all();

        foreach ($users as $user) {
            foreach ($tasks as $task) {
                // Cek apakah tugas sudah ada untuk user
                if (!UserTask::where('id_user', $user->id)->where('id_daily_task', $task->id)->exists()) {
                    UserTask::create([
                        'id_user' => $user->id,
                        'id_daily_task' => $task->id,
                        'is_done' => false,
                        'tanggal' => now(),
                    ]);
                }
            }
        }

        $this->info('Semua daily task baru telah ditambahkan ke semua user.');
    }
}

