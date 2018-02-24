<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','slug'];

    public function articles()
    {
        return $this->hasMany(Article::class)->orderBy('id', 'desc');
    }
}
