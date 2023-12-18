<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NewsComment extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'news_id'
    ];

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }

    public function comment(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class);
    }
}
