<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect (){

        return Socialite::driver('google')->redirect();
    }
    public function callback(Request $request){
        try{

            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->email)->first();

            if($user){
                Auth::login($user);
                return redirect()->intended('/home');
            }else{
                $uuid = Str::uuid()->toString();

                $user = new User();
                $user->name = $google_user->name;
                $user->email = $google_user->email;
                $user->password = Hash::make($uuid.now());
                $user->save();
                Auth::login($user);
                return redirect()->intended('/home');
            }
        }catch (\Throwable $th){
            dd('Something went wrong!'. $th->getMessage());
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect("/");
    }
}
