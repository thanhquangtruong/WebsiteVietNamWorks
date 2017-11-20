<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Socialite;
use App\Social;
use App\User;
use Auth;
class AuthController extends Controller
{
	public function redirectToFacebook()
	{
		
	    return Socialite::driver('facebook')->redirect();
	}
	public function handleFacbookCallback()
	{
		return '000';
	    $user = Socialite::driver('facebook')->user();
	    $social = Social::where('provider_user_id',$user->id)->where('provider','facebook')->first();
		if($social){
			$u = User::where('email',$user->email)->first();
			auth()->login($u);
			return redirect('home');
		}
		else{
			$temp = new Social;
			$temp->provider_user_id = $user->id;
			$temp->provider = 'facebook';

			$u =User::where('email',$user->email)->first();
			if(!$u){
				$u = User::create([
					'name' =>$user->name,
					'email' =>$user->email

					]);
			}
			$temp->user_id = $u->id;
			$temp->save();
			auth()->login($u);
			return redirect('home');
		}


	}

	 public function redirectToGoogle()
	{
	    return Socialite::driver('google')->redirect();
	}
	public function handleGoogleCallback()
	{
	    $user = Socialite::driver('google')->user();
	    $social = Social::where('provider_user_id',$user->id)->where('provider','google')->first();
		if($social){
			$u = User::where('email',$user->email)->first();
			Auth::login($u);
			return redirect('home');
		}
		else{
			$temp = new Social;
			$temp->provider_user_id = $user->id;
			$temp->provider = 'google';

			$u =User::where('email',$user->email)->first();
			if(!$u){
				$u = User::create([
					'name' =>$user->name,
					'email' =>$user->email

					]);
			}
			$temp->user_id = $u->id;
			$temp->save();
			Auth::login($u);
			return redirect('home');
		}


	}

}
