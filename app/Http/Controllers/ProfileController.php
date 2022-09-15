<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view ('profile.edit',compact('user'));

    }
}
