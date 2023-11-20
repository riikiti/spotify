<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musics extends Model
{
    use CrudTrait;
    use HasFactory;

    //todo add field added to favorites from all users
    protected $table = 'musics';
    protected  $fillable = ['name', 'music', 'logo', 'description',];
}
