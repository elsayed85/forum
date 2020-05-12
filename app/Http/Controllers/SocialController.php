<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        if (!in_array($provider, config('socialite.providers'))) {
            return redirect()->route('login');
        }
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        if (!in_array($provider, config('socialite.providers'))) {
            return redirect()->route('login');
        }
        try {
            $user = Socialite::driver($provider)->user();
            if ($provider == "facebook") {
                $newUser = User::updateOrCreate(['email' => $user['email']], [
                    'email' => $user['email'],
                    'username' => $user['name'],
                    'facebook_id' => $user['id']
                ])->first();
            } elseif ($provider == "google") {
                $newUser = User::updateOrCreate(['email' => $user['email']], [
                    'email' => $user['email'],
                    'username' => $user['name'],
                    'google_id' => $user['id']
                ])->first();
            }
            auth()->login($newUser);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('login');
        }
    }
}
