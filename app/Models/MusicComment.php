<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MusicComment extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'music_id',
        'comment_id'
    ];

    public function music(): BelongsTo
    {
        return $this->belongsTo(Musics::class);
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
}
