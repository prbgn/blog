<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'slug', 'brief', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
