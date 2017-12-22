<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    public function getIndex() {
      $posts = Post::where('post_type', 'post')
          ->orderBy('created_at', 'desc')
          ->paginate( 6 );

      return view('front.articles.index', ['posts' => $posts]);
    }

    public function getSingle( $post_slug ) {
      $recentPosts = Post::take(3)->latest()->get();
    	$post = Post::where('post_slug', '=', $post_slug)->first();

    	return view('front.articles.single', compact('recentPosts', 'post'));
    }
}
