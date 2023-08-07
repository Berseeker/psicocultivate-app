<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialProviderController extends Controller
{
    public function index($provider)
    {
      return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
      $social_user = Socialite::driver($provider)->user();
      dd($social_user);
    }
}
