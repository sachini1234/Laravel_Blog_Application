<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Posts extends Model
{
    use HasFactory, Commentable;

    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];
}
