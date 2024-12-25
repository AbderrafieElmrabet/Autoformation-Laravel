<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'category_id'];
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}