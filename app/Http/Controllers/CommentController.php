<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends BaseController
{


    public function __construct(
        public $commentService = new CommentService()
    )
    {
    }


    public function addComment(StoreCommentRequest $request)
    {
        $this->commentService->save($request);

        return $this->success();
    }


    public function replyComment(StoreCommentRequest $request)
    {
        $comment = $this->commentService->save($request);

        return $this->success(['comment' => $comment]);
    }


}
