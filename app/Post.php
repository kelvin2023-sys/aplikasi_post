<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey ="id";
    protected $fillable = ['categories_id', 'title', 'content', 'image', 'views', 'status', 'publish_date',];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}