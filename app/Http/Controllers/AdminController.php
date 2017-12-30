<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Admin;
use Auth;
use Image;
use Session;

class AdminController extends Controller
{
  public function index()
  {
      $admins = Admin::paginate( 10 );

      return view('backend.admins.index', ['admins' => $admins]);
  }

  public function create()
  {
      return view('backend.admins.create');
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'surname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:admins',
          'password' => 'required|string|min:6|confirmed',
      ]);


      $admin = new Admin;

      $admin->name       = $request->name;
      $admin->surname    = $request->surname;
      $admin->email      = $request->email;
      $admin->password   = bcrypt($request->password);
      $admin->phone      = $request->phone;
      $admin->adresse    = $request->adresse;
      $admin->city       = $request->city;
      $admin->country    = $request->country;
      $admin->cp         = $request->cp;
      $admin->company    = $request->company;

      // Check if file is present
      if( $request->hasFile('avatar') ) {
          $avatar     = $request->file('avatar');
          $filename           = time() . '.' . $avatar->getClientOriginalExtension();

          Image::make($avatar)->resize(250, 290)->save( public_path('uploads/admins/' . $filename ) );


          $admin->avatar = $filename;
      }

      $admin->save();

      Session::flash( 'sucess', 'Admin published.' );

      return redirect()->route('admins.index');

  }

  public function show($id)
  {
      return redirect()->route('admins.index');
  }

  public function edit($id)
  {
    $admin = Admin::findOrFail( $id );

    return view('backend.admins.edit', [ 'admin' => $admin ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'surname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:admins,email,'.$id,
      ]);

      $admin = Admin::findOrFail($id);

      $admin->name       = $request->name;
      $admin->surname    = $request->surname;
      $admin->email      = $request->email;
      $admin->phone      = $request->phone;
      $admin->adresse    = $request->adresse;
      $admin->city       = $request->city;
      $admin->country    = $request->country;
      $admin->cp         = $request->cp;
      $admin->company    = $request->company;

      // Check if file is present
      if( $request->hasFile('avatar') ) {
          $avatar     = $request->file('avatar');
          $filename           = time() . '.' . $avatar->getClientOriginalExtension();

          Image::make($avatar)->resize(250, 290)->save( public_path('uploads/admins/' . $filename ) );


          $admin->avatar = $filename;
      }

      $admin->save();

      Session::flash( 'sucess', 'Admin updated.' );

      return redirect()->route('admins.index');
  }

  public function destroy($id)
  {
      $admin = Admin::find( $id );
      if( $admin->avatar){
        unlink(public_path('uploads/admins/') . $admin->avatar);
      }

      $admin->delete();

      Session::flash('success', 'L\'administrateur a été supprimer avec succés.');

      return redirect()->route('admins.index');
  }
}
