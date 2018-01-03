<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Image;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate( 10 );

      return view('backend.products.index', ['products' => $products]);
    }

    public function getIndex() {
      $products = Product::paginate( 6 );

      return view('front.shop.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
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
          'name'        => 'required',
          'slug'        => 'required|alpha_dash|max:200|unique:products,slug',
          'details'     => 'required|max:250',
          'price'       => 'required',
          'promo'       => 'required|integer|between:0,100',
          'description' => 'required',
      ]);

      $product = new Product;

      $product->name          = $request->input('name');
      $product->slug          = $request->input('slug');
      $product->details       = $request->input('details');
      $product->price         = $request->input('price');
      $product->promo         = $request->input('promo');
      $product->description   = $request->input('description');
      $product->category_ID   = $request->input('category_ID');

      if( $request->hasFile('product_thumbnail') ) {
          $product_thumbnail     = $request->file('product_thumbnail');
          $filename           = time() . '.' . $product_thumbnail->getClientOriginalExtension();

          Image::make($product_thumbnail)->resize(380, 450)->save( public_path('uploads/products/' . $filename ) );

          $product->product_thumbnail = $filename;
      }

      $product->save();

      Session::flash( 'sucess', 'Product published.' );

      return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = product::findOrFail( $id );

      return view('backend.products.edit', [ 'product' => $product ]);
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
          'name'        => 'required',
          'slug'        => 'required|alpha_dash|max:200|unique:products,slug,'.$id,
          'details'     => 'required|max:250',
          'price'       => 'required',
          'promo'       => 'required|integer|between:0,100',
          'description' => 'required',
      ]);

      $product = Product::findOrFail($id);

      $product->name          = $request->input('name');
      $product->slug          = $request->input('slug');
      $product->details       = $request->input('details');
      $product->price         = $request->input('price');
      $product->promo         = $request->input('promo');
      $product->description   = $request->input('description');
      $product->category_ID   = $request->input('category_ID');

      if( $request->hasFile('product_thumbnail') ) {
          $product_thumbnail     = $request->file('product_thumbnail');
          $filename           = time() . '.' . $product_thumbnail->getClientOriginalExtension();

          Image::make($product_thumbnail)->resize(380, 450)->save( public_path('uploads/products/' . $filename ) );

          $product->product_thumbnail = $filename;
      }

      $product->save();

      Session::flash( 'sucess', 'Product updated.' );

      return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find( $id );
        unlink(public_path('uploads/products/') . $product->product_thumbnail);

        $product->delete();

        Session::flash('success', 'Product deleted.');

        return redirect()->route('products.index');
    }
}
