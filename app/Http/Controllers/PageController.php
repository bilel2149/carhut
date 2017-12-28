<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Image;
use Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::where('post_type', 'page')->paginate( 10 );

      return view('backend.pages.index', ['posts' => $posts]);
    }


    public function getPage( $post_slug ){
        $page = Post::where('post_slug', '=', $post_slug)
                    ->where('post_type', 'page')
                    ->first();
        if($page)
          return view('front.pages.index', compact('page'));
        else
          abort(404);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and filter user inputted data
        // Refer to `References` for more info
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug',
            'post_content'      => 'required',
        ]);

        // Create a new Post Model initialization
        // There are many ways to coke an Egg and same in storing data to database in Laravel
        // You might use or prefer this one https://laravel.com/docs/5.4/queries#inserts
        // I just love using Eloquent
        $post = new Post;

        $post->post_type        = $request->post_type;
        $post->post_title       = $request->post_title;
        $post->post_slug        = $request->post_slug;
        $post->post_content     = $request->post_content;
        $post->category_ID      = $request->category_ID;

        // Check if file is present
        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->resize(533, 307)->save( public_path('uploads/pages/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        $post->save();

        //Add tags
        $post->tags()->sync($request->get('tags'));

        // Store data for only a single request and destory
        Session::flash( 'sucess', 'Page published.' );

        // Redirect to `posts.show` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return redirect()->route('pages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail( $id );

        return view('backend.pages.edit', [ 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug,'.$id,
            'post_content'      => 'required',
        ]);

        // You might prefer to use this one instead https://laravel.com/docs/5.4/queries#updates
        // You choose
        $post = Post::findOrFail($id);

        $post->post_type        = $request->input('post_type');
        $post->post_title       = $request->input('post_title');
        $post->post_slug        = $request->input('post_slug');
        $post->post_content     = $request->input('post_content');


        // Check if file is present
        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->resize(533, 307)->save( public_path('uploads/pages/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        $post->save();

        //Add tags
        $post->tags()->sync($request->tags, false);

        Session::flash('success', 'Page updated.');

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve records and throw an exception if a model is not found
       $post = Post::find( $id );

       // https://laravel.com/docs/5.4/queries#deletes
       $post->delete();

       Session::flash('success', 'Page deleted.');

       return redirect()->route('pages.index');
    }
}
