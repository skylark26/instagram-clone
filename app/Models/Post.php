<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['caption', 'image', 'slug', 'user_id'];

    public function comments(): hasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function isAuthor(): bool
    {
        if (!auth()->guest()) {
            $userId = auth()->user()->id;
            return $this->user_id === $userId;
        }
        return false;
    }

    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
