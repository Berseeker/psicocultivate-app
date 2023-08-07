<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Sanctum;

class LoginBasic extends Controller
{
  public function login(Request $request)
  {
      $rules = [
          'email' => 'required|email',
          'password' => 'required'
      ];

      $messages = [
          'email.required' => 'Email no puede estar en blanco',
          'email.email' => 'Formato invalido',
          'password' => 'Password no puede estar en blanco'
      ];

      $this->validate($request,$rules,$messages);

      if (Auth::attempt($request->only('email', 'password'))) {
          $request->session()->regenerate();

          return redirect()->route('dashboard');
      }

      return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
  }
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }
}
