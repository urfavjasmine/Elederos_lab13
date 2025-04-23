<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'body', 'user_id'];

    // In Post.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}