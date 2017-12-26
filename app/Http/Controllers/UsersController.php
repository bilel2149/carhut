<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Auth;
use Image;
use Session;

class UsersController extends Controller
{
  public function index()
  {
      $users = User::paginate( 10 );

      return view('backend.users.index', ['users' => $users]);
  }

  public function create()
  {
      return view('backend.users.create');
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'surname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ]);


      $user = new User;

      $user->name       = $request->name;
      $user->surname    = $request->surname;
      $user->email      = $request->email;
      $user->password   = bcrypt($request->password);
      $user->phone      = $request->phone;
      $user->adresse    = $request->adresse;
      $user->city       = $request->city;
      $user->country    = $request->country;
      $user->cp         = $request->cp;
      $user->company    = $request->company;

      // Check if file is present
      if( $request->hasFile('avatar') ) {
          $avatar     = $request->file('avatar');
          $filename           = time() . '.' . $avatar->getClientOriginalExtension();

          Image::make($avatar)->resize(250, 290)->save( public_path('uploads/users/' . $filename ) );


          $user->avatar = $filename;
      }

      $user->save();

      Session::flash( 'sucess', 'User published.' );

      return redirect()->route('users.index');

  }

  public function show($id)
  {
      return redirect()->route('users.index');
  }

  public function edit($id)
  {
    $user = User::findOrFail( $id );

    return view('backend.users.edit', [ 'user' => $user ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'surname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users,email,'.$id,
      ]);

      $user = User::findOrFail($id);

      $user->name       = $request->name;
      $user->surname    = $request->surname;
      $user->email      = $request->email;
      $user->phone      = $request->phone;
      $user->adresse    = $request->adresse;
      $user->city       = $request->city;
      $user->country    = $request->country;
      $user->cp         = $request->cp;
      $user->company    = $request->company;

      // Check if file is present
      if( $request->hasFile('avatar') ) {
          $avatar     = $request->file('avatar');
          $filename           = time() . '.' . $avatar->getClientOriginalExtension();

          Image::make($avatar)->resize(250, 290)->save( public_path('uploads/users/' . $filename ) );


          $user->avatar = $filename;
      }

      $user->save();

      Session::flash( 'sucess', 'user updated.' );

      return redirect()->route('users.index');
  }

  public function destroy($id)
  {
      $user = user::find( $id );
      if( $user->avatar){
        unlink(public_path('uploads/users/') . $user->avatar);
      }

      $user->delete();

      Session::flash('success', 'L\'utilisateur a été supprimer avec succés.');

      return redirect()->route('users.index');
  }

  //Get profile
  public function getProfile(){
      return view('front.user.profile');
  }

  //modifier Profile
  public function updateProfile(Request $request){

    $this->validate($request, [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,'.Auth::user()->id,
    ]);

    $user = Auth::user();

    $user->name       = $request->name;
    $user->surname    = $request->surname;
    $user->email      = $request->email;
    $user->phone      = $request->phone;
    $user->adresse    = $request->adresse;
    $user->city       = $request->city;
    $user->country    = $request->country;
    $user->cp         = $request->cp;
    $user->company    = $request->company;

    // Check if file is present
    if( $request->hasFile('avatar') ) {
        $avatar     = $request->file('avatar');
        $filename           = time() . '.' . $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(250, 290)->save( public_path('uploads/users/' . $filename ) );


        $user->avatar = $filename;
    }

    $user->save();

    Session::flash( 'sucess', 'user updated.' );

    return redirect()->route('profile');
  }

}
