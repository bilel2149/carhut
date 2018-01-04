<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;

class SearchesController extends Controller
{
    public function getIndex( Request $request ) {
      $s = $request->query('s');

      // Query and paginate result
      $posts = Post::where('post_title', 'like', "%$s%")
          ->orWhere('post_content', 'like', "%$s%")
          ->paginate(6);

      return view('front.searches.index', ['posts' => $posts, 's' => $s ]);
    }

    public function searchProducts( Request $request ) {
      $s = $request->query('s');

      // Query and paginate result
      $products = Product::where('name', 'like', "%$s%")
          ->orWhere('slug', 'like', "%$s%")
          ->paginate(6);

      return view('front.shop.search', ['products' => $products, 's' => $s ]);
    }
}
