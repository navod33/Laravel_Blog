<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //public $table = "posts";
    protected $table = 'posts';
    use HasFactory;
    protected $fillable = [
        'title', 'user_id', 'excerpt', 'body', 'image_path', 'is_published', 'min_to_read',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
