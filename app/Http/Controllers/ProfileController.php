<?php
// Author: Tien Quang Nguyen
// Date: Nov 5, 2018

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $profile = $user->profile;
        $viewData = [
            'user' => $user,
            'profile' => $profile
        ];
        return view('forms/profile_form', $viewData);
    }

    public function update()
    {
        $formData = request()->all();

        request()->validate([
            'image' => 'nullable|url|max:191',
            'description' => 'required|min:10|max:255',
            'website' => 'nullable|url|max:191',
        ]);

        $user = request()->user();
        $profile = $user->profile;
        $profile->image = $formData['image'];
        if ($formData['image'] === NULL) {
            $profile->image = 'https://at-cdn-s01.audiotool.com/2013/05/11/users/guess_audiotool/avatar256x256-709d163bfa4a4ebdb25160d094551c33.jpg';
        }
        $profile->description = $formData['description'];
        $profile->website = $formData['website'];
        $profile->save();
        
        return redirect("/".$user->id);
    }
}
