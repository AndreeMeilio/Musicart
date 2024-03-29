<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'music';
    protected $fillable = [
        'id_music',
        'id_genre_music',
        'judul_music',
        'artist',
        'featured_artist',
        'album',
        'release_date'
    ];
}
