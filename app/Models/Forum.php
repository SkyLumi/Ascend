<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Forum extends Model
{
    use HasFactory;

    // Nama tabel yang terkait (opsional jika sesuai dengan konvensi Laravel)
    protected $table = 'forums';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_user',
        'nama_forum',
        'tanggal_dibuat',
    ];

    /**
     * Relasi ke model User
     * Setiap forum memiliki satu pengguna yang membuatnya.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
