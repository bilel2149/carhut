<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;
use Image;
use Session;

class SettingController extends Controller
{
  public function index()
  {
    $parametre = DB::table('settings')->first();
    return view('backend.settings.index', compact('parametre'));
  }

  public function update(Request $request)
  {

      $parametre = Setting::first();

      $parametre->title = $request->input('title');
      $parametre->meta_description = $request->input('meta_description');
      $parametre->footer_description = $request->input('footer_description');
      $parametre->adresse = $request->input('adresse');
      $parametre->city = $request->input('city');
      $parametre->country = $request->input('country');
      $parametre->email = $request->input('email');
      $parametre->phone = $request->input('phone');
      $parametre->facebook = $request->input('facebook');
      $parametre->twitter = $request->input('twitter');
      $parametre->google_plus = $request->input('google_plus');
      $parametre->linkedin = $request->input('linkedin');
      $parametre->skype = $request->input('skype');
      $parametre->whatsapp = $request->input('whatsapp');
      $parametre->copyright = $request->input('copyright');
      $parametre->open_time = $request->input('open_time');
      $parametre->close_time = $request->input('close_time');

      if( $request->hasFile('logo') ) {
          $logo     = $request->file('logo');
          //$name     = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
          $filename           = 'logo.' .$logo->getClientOriginalExtension();

          Image::make($logo)->save( public_path('uploads/logos/' . $filename ) );

          $parametre->logo = $filename;
      }
      if( $request->hasFile('small_logo') ) {
          $small_logo     = $request->file('small_logo');
          //$name     = pathinfo($small_logo->getClientOriginalName(), PATHINFO_FILENAME);
          $filename           = 'logo-small.' .$small_logo->getClientOriginalExtension();

          Image::make($small_logo)->save( public_path('uploads/logos/' . $filename ) );

          $parametre->small_logo = $filename;
      }
      if( $request->hasFile('footer_logo') ) {
          $footer_logo     = $request->file('footer_logo');
          //$name     = pathinfo($footer_logo->getClientOriginalName(), PATHINFO_FILENAME);
          $filename           = 'logo-footer.' .$footer_logo->getClientOriginalExtension();

          Image::make($footer_logo)->save( public_path('uploads/logos/' . $filename ) );

          $parametre->footer_logo = $filename;
      }


      $parametre->save();

      Session::flash('success', 'Parametre updated.');

      return redirect()->route('settings');
  }
}
