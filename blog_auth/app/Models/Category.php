<?php

namespace App\Http\Controllers;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}