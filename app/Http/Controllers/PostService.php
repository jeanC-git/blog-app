<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostService extends Controller
{

    public function __construct(
        public $rateService = new RateService()
    )
    {
    }


    public function findOne($post_id) : Post
    {
        return Post::where('id', $post_id)->first();
    }

    // TODO
    public function getRelatedPosts(Post $post)
    {
        return Post::query()->get();
    }

    public function like($data)
    {
        $this->rateService->like($data);
    }

    public function dislike($data)
    {
        $this->rateService->dislike($data);
    }


}
