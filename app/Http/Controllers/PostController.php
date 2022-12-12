<?php

namespace App\Http\Controllers ;

use App\Http\Service\PostService;
use App\Http\Service\UserService;

class PostController extends Controller
{
    public function index()
    {
        $postService = new PostService;
        $posts = $postService->getNumberOfPosts(5);

        foreach ($posts as $post) {
            $user = $this->getUser($post->user_id);
            $post['user'] = $user->name;
        }
        return view ('blog', ['posts' => $posts]);
    }

    public function getUser($id)
    {
        return (new UserService())->find($id);
    }
}
