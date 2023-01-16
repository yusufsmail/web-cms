<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
// use App\Http\Models\Category;
// use App\Http\Models\User;

class Post extends Model
{
    use HasFactory, Sluggable;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id', 'user_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

