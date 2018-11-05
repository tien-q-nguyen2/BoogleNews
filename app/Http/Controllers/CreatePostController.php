<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Headline;

class CreatePostController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $defaultImage = 'https://picsum.photos/200/?random'.rand(1, 100);
        $viewData = [
            'user' => $user,
            'defaultImage' => $defaultImage
        ];
        return view('forms/create_post_form', $viewData);
    }

    public function update()
    {
        $formData = request()->all();

        request()->validate([
            'title' => 'required|min:10|max:191',
            'image' => 'nullable|url|max:191',
        ]);

        $user = request()->user();

        $headline = new Headline();
        $headline->title = $formData['title'];
        $headline->image = $formData['image'];
        $headline->user_id = $user->id;
        $headline->save();
        
        return redirect("/".$user->id);
    }
}
