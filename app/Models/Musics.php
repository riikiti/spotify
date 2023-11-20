<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Musics extends Model
{
    use CrudTrait;
    use HasFactory;
    use UploadFiles;

    //todo add field added to favorites from all users
    protected $table = 'musics';
    protected  $fillable = ['name', 'music', 'logo', 'description'];

}
