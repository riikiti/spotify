<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMusic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'music_id'
    ];
}
