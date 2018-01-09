<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Image;
use Session;

class PostsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
      $posts = Post::where('post_type', 'post')->get();
      return response(array(
              'error' => false,
              'posts' =>$posts->toArray(),
             ),200);
  }

  public function getSingle( $post_slug ) {
    $recentPosts = Post::take(3)->latest()->get();
    $post = Post::where('post_slug', '=', $post_slug)->first();

    return response(array(
            'error' => false,
            'post' =>$post,
            'recentPosts' => $recentPosts,
           ),200);
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      Post::create($request->all());
      return response(array(
              'error' => false,
              'message' =>'Article created successfully',
             ),200);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $post = Post::find($id);
      return response(array(
              'error' => false,
              'service' =>$post,
             ),200);
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
      Post::find($id)->update($request->all());
      return response(array(
              'error' => false,
              'message' =>'Article updated successfully',
             ),200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Post::find($id)->delete();
      return response(array(
             'error' => false,
             'message' =>'Article deleted successfully',
            ),200);
  }
}
