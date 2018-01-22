<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Category;
use App\Product;
use Session;

class CategoriesShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('category_type', 'shop')->paginate( 10 );

        return view('backend.categoriesshop.index', ['categories' => $categories]);
    }

    /*public function getSingle( $id ) {
      $posts = Post::where('post_type', 'post')
          ->where('category_ID', '=', $id)
          ->orderBy('created_at', 'desc')
          ->paginate( 6 );

      return view('front.articles.index', ['posts' => $posts]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categoriesshop.create');
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
            'category_name' => 'required|max:200',
            'category_slug' => 'required|alpha_dash|max:200|unique:categories,category_slug',
        ]);

        $category = new Category;

        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->category_type = $request->category_type;

        $category->save();

        Session::flash('success', 'Category added.');

        return redirect()->route('categoriesshop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail( $id );

        return view('backend.categoriesshop.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail( $id );

        return view('backend.categoriesshop.edit', ['category' => $category]);
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
            'category_name' => 'required|max:200',
            'category_slug' => 'required|alpha_dash|max:200|unique:categories,category_slug,'.$id,
        ]);

        // Instead of creating new Category Class initialization
        // We fetch the category to edit instead
        $category = Category::findOrFail( $id );

        $category->category_name = $request->input('category_name');
        $category->category_slug = $request->input('category_slug');
        $category->category_type = $request->input('category_type');

        $category->save();

        Session::flash('success', 'Category updated.');

        return redirect()->route('categoriesshop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail( $id );

        $category->delete();

        Session::flash('success', 'Category deleted.');

        return redirect()->route('categoriesshop.index');
    }
}
