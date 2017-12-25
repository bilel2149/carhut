<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Service;
use Image;
use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate( 10 );

        return view('backend.services.index', ['services' => $services]);
    }

    public function getIndex() {
      $services = Service::paginate( 6 );

      return view('front.services.index', ['services' => $services]);
    }

    public function getSingle( $service_slug ) {
      $service = Service::where('service_slug', '=', $service_slug)->first();

    	return view('front.services.single', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [
          'service_title'        => 'required',
          'service_slug'         => 'required|alpha_dash|max:200|unique:services,service_slug',
          'service_content'      => 'required',
      ]);

      $service = new Service;

      $service->service_title       = $request->service_title;
      $service->service_slug        = $request->service_slug;
      $service->service_content     = $request->service_content;

      // Check if file is present
      if( $request->hasFile('service_thumbnail') ) {
          $service_thumbnail     = $request->file('service_thumbnail');
          $filename           = time() . '.' . $service_thumbnail->getClientOriginalExtension();

          Image::make($service_thumbnail)->resize(862, 453)->save( public_path('uploads/services/' . $filename ) );


          $service->service_thumbnail = $filename;
      }

      $service->save();

      Session::flash( 'sucess', 'Service published.' );

      return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $service = Service::findOrFail( $id );

      return view('backend.services.show', [ 'service' => $service ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $service = Service::findOrFail( $id );

      return view('backend.services.edit', [ 'service' => $service ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'service_title'        => 'required',
          'service_slug'         => 'required|alpha_dash|max:200|unique:services,service_slug,'.$id,
          'service_content'      => 'required',
      ]);

      $service = Service::findOrFail($id);

      $service->service_title       = $request->service_title;
      $service->service_slug        = $request->service_slug;
      $service->service_content     = $request->service_content;


      if( $request->hasFile('service_thumbnail') ) {
          $service_thumbnail     = $request->file('service_thumbnail');
          $filename           = time() . '.' . $service_thumbnail->getClientOriginalExtension();

          Image::make($service_thumbnail)->resize(862, 453)->save( public_path('uploads/services/' . $filename ) );

          $service->service_thumbnail = $filename;
      }

      $service->save();

      Session::flash('success', 'Service updated.');

      return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $service = Service::find( $id );
       unlink(public_path('uploads/services/') . $service->service_thumbnail);

       $service->delete();

       Session::flash('success', 'Service deleted.');

       return redirect()->route('services.index');
    }
}
