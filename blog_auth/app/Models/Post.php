<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Category;

//A post belong to one user
class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];



public function user(){
    return $this->belongsTo(User::class);
}

public function posts(){
    return $this->hasMany(Post::class);
}

public function category(){
    return $this->belongsTo(Category::class);
}
}