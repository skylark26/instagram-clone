<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['caption', 'image', 'slug'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeIsAuthor()
    {

    }
}
