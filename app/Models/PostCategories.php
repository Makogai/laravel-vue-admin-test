<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
