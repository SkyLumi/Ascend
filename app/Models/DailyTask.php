<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UserTask;

class DailyTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_daily_task',
        'deskripsi',
        'durasi',
        'reward_points',
    ];

    public function userTasks()
    {
        return $this->hasMany(UserTask::class, 'id_daily_task');
    }

    public function users()
    {
        return $this->hasManyThrough(
            User::class,
            UserTask::class,
            'id_daily_task',  // Foreign key di UserTask
            'id',             // Foreign key di User
            'id',             // Local key di DailyTask
            'id_user'         // Local key di UserTask
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($dailyTask) {
            // Ambil semua user
            $users = User::all();

            // Tambahkan daily task baru ke setiap user
            foreach ($users as $user) {
                // Cek apakah relasi sudah ada
                if (!UserTask::where('id_user', $user->id)->where('id_daily_task', $dailyTask->id)->exists()) {
                    UserTask::create([
                        'id_user' => $user->id,
                        'id_daily_task' => $dailyTask->id,
                        'is_done' => false, // Default belum selesai
                        'tanggal' => now(), // Tanggal saat ini
                    ]);
                }
            }
        });
    }
}
