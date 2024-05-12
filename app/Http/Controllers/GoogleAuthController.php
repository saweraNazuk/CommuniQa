<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();

    }

    public function faceredirect()
    {
        return Socialite::driver('facebook')->redirect();

    }
    public function gitredirect()
    {
        return Socialite::driver('github')->redirect();

    }
    
    public function gitcallback()
    {
       
            $gitUser = Socialite::driver('github')->stateless()->user();
        //    dd($gitUser);

            //  $user = User::where ('google_id',$gitUser->getid())->first();

             $uuid = Str::uuid()->toString();
            $user= new User();
            $user->name=$gitUser->getName();
            $user->email=$gitUser->getEmail();
            $user->password=Hash::make($uuid.now());
          
            $user->save();
            Auth::login($user);
            return redirect('/dashboard');
    }



    public function callback()
    {
       try{
        $googleUser = Socialite::driver('google')->user();
       
         $user = User::where ('google_id',$googleUser->getid())->first();

            if(!$user){
            $new_user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
            ]);
            Auth::login($new_user);
               return redirect()->intended('dashboard');
         }
         else{
            Auth::login($user);
            return redirect()->intended('dashboard');
           }
       }

             catch(\Throwable $th)
             {
             dd('something went wrong'. $th->getMessage());

             }
    }

    public function facecallback()
    {
       try{
        $facebookUser = Socialite::driver('facebook')->user();
       
         $user = User::where ('google_id',$facebookUser->getid())->first();

            if(!$user){
            $new_user = User::create([
                'name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail(),
                'google_id' => $facebookUser->getId(),
                
            ]);
            Auth::login($new_user);
               return redirect()->intended('dashboard');
         }
         else{
            Auth::login($user);
            return redirect()->intended('dashboard');
           }
       }

             catch(\Throwable $th)
             {
             dd('something went wrong'. $th->getMessage());

             }
    }

    
    
}
