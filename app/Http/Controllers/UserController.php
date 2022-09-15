<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        // $user = User::find($user);

        return view('users.profile')->with(['user' => Auth::user()]);
    }

    public function edit(User $user){
        return view('users.edit')->with(['user' => Auth::user()]);
    }

    public function update(User $user, ){

        $data=request()->validate([
            'title'=>'',
            'description'=>'',
            'url'=>'',
            'image'=>'',

        ]);
        $user->profile->update($data);

        return redirect("/profile/{ $users->id}");
    }


}
