<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller
{
    public function index()
    {
        if (empty(Auth::user()))
        {
            return view('login/login');
        }
        else
        {
            return redirect('/home');
        }
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')
            ->scopes(['email'])->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $thisUser = User::all()->where('email', $user['email'])->first();

        if($thisUser === null)
        {
            $thisUser = new User();

            $thisUser->name = $user['name'];
            $thisUser->email = $user['email'];
            $thisUser->avatar = $user->getAvatar();
            $thisUser->avatar_original = '';
            $thisUser->gender = $user['gender'];
            $thisUser->token = $user->token;

            $thisUser->save();
        }
            auth()->login($thisUser);

        return redirect('/home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
