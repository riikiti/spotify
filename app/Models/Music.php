<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    //todo add field added to favorites from all users
    protected $fillable = [
        'name',
        'music',
        'logo',
        'description',
    ];
}
