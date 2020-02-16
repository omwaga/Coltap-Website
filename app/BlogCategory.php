<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['name', 'description'];

    public function articles()
    {
    	return $this->hasMany(BlogArticle::class, 'id', 'category_id');
    }
}
