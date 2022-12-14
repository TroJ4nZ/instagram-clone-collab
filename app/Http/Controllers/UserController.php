<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        // $user = User::find($user);
        $user = Auth::user(); // fetch logged in user
        $posts = $user->posts; // get all posts
        $postImages = null;
        foreach ($posts as $post) {
            // for each fetched post, get the images that correspond to the post
            $postImages = $post->postImages;
        }
        return view('users.profile')->with(['user' => $user, 'postImages' => $postImages]);
    }

    public function edit(User $user)
    {
        return view('users.edit')->with(['user' => Auth::user()]);
    }

    public function update(UpdateProfileRequest $request)
    {
        // dd($request);
        $user = Auth::user();
        // if ($request->file('image')->isValid()) {
            // $path =$request->file('image')->store('profile_images', 'public');
            // $data = request()->validate([
            //     'title' => $request->input('title'),
            //     'description' => $request->input('description'),
            //     'url' => $request->input('url')
            //     // 'image' => $request->input('image'),

            // ]);
            $data = $request->only('title', 'description', 'url');
            if($request->file('image')->isValid()) {
                $data['image'] = $request->file('image')->store('profile_images', 'public');
            }
            $user->profile->update($data);

            return redirect()->route('users.profile');
        // }
    }
}
