<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moviegenre extends Model
{
    use HasFactory;

    protected $table = "moviegenre";

    protected $fillable = [
        'genre_id',
        'movie_id',
    ];
}
