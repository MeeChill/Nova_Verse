<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;

    protected $table = 'comics';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'release_date',
        'genre',
        'number_of_pages',
        'synopsis',
        'main_characters',
        'review_id',
        'rating',
        'poster',
    ];
}
