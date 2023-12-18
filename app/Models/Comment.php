<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use CrudTrait;
    //todo добавить лайки и дизлайки
    use HasFactory;

    protected $fillable = [
        'header',
        'body',
        'image'
    ];
}
