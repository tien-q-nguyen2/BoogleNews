<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headline;
use App\User;

class LikeOrUnlikeController extends Controller
{
    public function like($postId)
    {
        $user = request()->user();
        $headline = Headline::find($postId);

        $user->likedHeadlines()->attach($headline);

        return back();
        //return redirect("/");
        //return $postId;
    }

    public function unlike($postId)
    {
        $user = request()->user();
        $headline = Headline::find($postId);

        $user->likedHeadlines()->detach($headline);

        return back();
        //return redirect("/");
        //return $postId;
    }
}
