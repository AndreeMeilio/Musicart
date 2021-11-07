<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = "playlist";
    protected $primaryKey = "id_playlist";
    protected $fillable = [
        'id_playlist',
        'id_user',
        'nama_playlist',
        'desc_playlist'
    ];
}
