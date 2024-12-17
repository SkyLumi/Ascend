<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Nama tabel (jika berbeda dengan nama model)
    protected $table = 'artikel';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'id_user',
        'judul',
        'isi',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
