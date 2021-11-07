<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMusic extends Model
{
    use HasFactory;

    protected $table = 'genre_music';
    protected $primaryKey = 'id_genre_music';
    protected $fillable = [
        'id_genre_music',
        'nama_genre_music'
    ];

    public $incrementing = false;
}
