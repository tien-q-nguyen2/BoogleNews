<?php
// Author: Tien Quang Nguyen
// Date: Nov 6, 2018

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headline;
use App\User;

class LikeOrUnlikeController extends Controller
{
    public function like($postId)
    {
        $user = request()->user();
        if($user === null){
            return redirect("/login");
        }
        $headline = Headline::find($postId);

        $user->likedHeadlines()->attach($headline);
    }

    public function unlike($postId)
    {
        $user = request()->user();
        if($user === null){
            return redirect("/login");
        }
        $headline = Headline::find($postId);

        $user->likedHeadlines()->detach($headline);
    }
}
