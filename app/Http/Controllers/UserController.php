<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite;
use Auth;

class UserController extends Controller
{
    public function login() {
        return view('auth.users.login');
    }

    public function google() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback() {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'is_admin' => 0
        ];

        $user = User::firstOrCreate(['email' => $data['email']],$data);
        Auth::login($user, true);

        return redirect(route('welcome'));

    }
}
