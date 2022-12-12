<?php

namespace App\Http\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function getPosts()
    {
        return Post::all();
    }

    public function getNumberOfPosts($number)
    {
        return Post::query()->limit($number)->get();
    }
}
