<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                Auth::login($user);
                Log::info('Google User: Already Registered');
            } else {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt('user1234'),
                ]);
                Auth::login($user);
                Log::info('Google User: Not yet Registered');
            }
            return redirect()->intended('/');
        } catch (Exception $e) {
            Log::error('Google OAuth error:', ['error' => $e->getMessage()]);
            return redirect('/')->with('error', 'Failed to login with Google.');
        }
    }
}
