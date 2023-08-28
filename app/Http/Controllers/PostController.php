<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\PostService;
use App\Http\Requests\RateRequest;
use App\Models\Post;

class PostController extends BaseController
{

    public function __construct(
        public $postService = new PostService(),
        public $commentService = new CommentService(),
    )
    {
    }

    public function find(Post $post)
    {
        $post = $this->postService->findOne($post->id);

        return $this->success(['post' => $post]);
    }

    public function getComments()
    {
        $comments = $this->commentService->find();

        return $this->success(['comments' => $comments]);
    }

    public function getRelated(Post $post)
    {
        $relatedPosts = $this->postService->getRelatedPosts($post);

        return $this->success(['relatedPosts' => $relatedPosts]);
    }

    public function save()
    {
        $this->postService()->save();

        return $this->success();
    }

    public function edit()
    {
        $this->postService->save();

        return $this->success();
    }

    public function like(RateRequest $request)
    {
        $this->postService->like($request);

        return $this->success();
    }

    public function dislike(RateRequest $request)
    {
        $this->postService->dislike($request);

        return $this->success();
    }
}
