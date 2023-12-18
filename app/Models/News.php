<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'header',
        'body',
        'image',
        'posted_at'
    ];
}
