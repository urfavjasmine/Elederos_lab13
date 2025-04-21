<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';
    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'title',
        'body'
    ];
    protected $keyType = 'int';
    public $incrementing = true;
}