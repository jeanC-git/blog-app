<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Like;

class RateService extends BaseService
{
    public function like($data)
    {

        Like::create($data);

    }

    public function dislike($data)
    {

        Dislike::create($data);

    }
}
