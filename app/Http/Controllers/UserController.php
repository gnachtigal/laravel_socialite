<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $user = Socialite::driver($user->provider)->stateless()->user();
        dd($user);

        return redirect('user.profile', compact('user'));
    }
}
