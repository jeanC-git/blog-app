<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentService extends Controller
{

    public function save($data)
    {
        Comment::create($data);
    }
}
