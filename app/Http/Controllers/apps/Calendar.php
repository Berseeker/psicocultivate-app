<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Label;
use App\Models\User;

class Calendar extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $labels = Label::all();

    $psicologos = User::role(['psicologa', 'abogada'])->get(); // Returns only users with the role 'psicologa' or 'abogada
    $users = User::role('usuario')->get(); // Returns only users with the role 'usuario
    return view('content.apps.app-calendar',[
      'labels' => $labels,
      'psicologas' => $psicologos,
      'users' => $users,
    ]);
  }
}
