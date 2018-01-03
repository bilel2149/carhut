<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class UserController extends Controller
{
  public function checkAuth(Request $request)
  {
      $credentials = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
      ];

      if(!Auth::attempt($credentials)){
        return response('username password does not match', 403);
      }

      return response(Auth::user(), 201);
  }
}
