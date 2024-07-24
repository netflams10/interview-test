<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'article', 'blog_id', 'image'];

    protected $hidden = ['blog_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function like()
    {
        return $this->hasOne(Like::class);
    }

    public function blog()
    {
        return $this->hasOne(Blog::class, 'id');
    }
}
