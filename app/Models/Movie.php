<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'movie';

    protected $primaryKey = 'ID_Movie';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'title', 'director', 'genre', 'producer', 'release_date', 'duration',
        'main_cast', 'synopsis', 'poster', 'trailer'
    ];
}
