<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Slider;
use Image;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate( 10 );

        return view('backend.sliders.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliders.create');
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
            'slider_title'        => 'required',
            'slider_content'      => 'required',
            'slider_status'       => 'required',
        ]);

        $slider = new Slider;

        $slider->slider_title       = $request->slider_title;
        $slider->slider_content     = $request->slider_content;
        $slider->slider_status      = $request->slider_status;

        // Check if file is present
        if( $request->hasFile('slider_image') ) {
            $slider_image     = $request->file('slider_image');
            $filename           = time() . '.' . $slider_image->getClientOriginalExtension();

            Image::make($slider_image)->resize(1920, 680)->save( public_path('uploads/sliders/' . $filename ) );


            $slider->slider_image = $filename;
        }

        $slider->save();

        return redirect()->route('sliders.index');

        Session::flash( 'sucess', 'Slider published.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('sliders.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $slider = Slider::findOrFail( $id );

      return view('backend.sliders.edit', [ 'slider' => $slider ]);
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
            'slider_title'        => 'required',
            'slider_content'      => 'required',
        ]);

        $slider = Slider::findOrFail($id);

        $slider->slider_title       = $request->slider_title;
        $slider->slider_content     = $request->slider_content;
        $slider->slider_status      = $request->slider_status;

        // Check if file is present
        if( $request->hasFile('slider_image') ) {
            $slider_image     = $request->file('slider_image');
            $filename           = time() . '.' . $slider_image->getClientOriginalExtension();

            Image::make($slider_image)->resize(1920, 680)->save( public_path('uploads/sliders/' . $filename ) );


            $slider->slider_image = $filename;
        }

        $slider->save();

        return redirect()->route('sliders.index');

        Session::flash( 'sucess', 'Slider updated.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find( $id );
        unlink(public_path('uploads/sliders/') . $slider->slider_image);

        $slider->delete();

        Session::flash('success', 'Slider deleted.');

        return redirect()->route('sliders.index');
    }
}
