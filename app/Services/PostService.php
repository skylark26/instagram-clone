<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostService
{
    public function uploadPhoto($model, UploadedFile $image): string
    {
        return Storage::putFile('posts', $image);
    }
    public function create($model, array $attributes)
    {
        $image = $this->uploadPhoto($model, $attributes['image']);
        $attributes['image'] = $image;
        $attributes['slug'] = Str::random('12');
        $model::query()->create($attributes);
    }
}
