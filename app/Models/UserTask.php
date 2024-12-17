<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    protected $table = 'user_task';

    protected $fillable = ['id_daily_task', 'id_user', 'is_done', 'tanggal'];

    public function dailyTask()
    {
        return $this->belongsTo(DailyTask::class, 'id_daily_task');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
