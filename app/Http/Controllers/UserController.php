<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Socialite::driver('twitter')->user();
        dd($user);

        return redirect()->route('user.profile', compact('user'));
    }
}
