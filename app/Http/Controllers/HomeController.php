<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $categories = Category::find(2)->posts;
        // return view('home', compact('categories'));

        $posts = Post::with('tags')->get();

        $tag = Tag::first();

        //$post->tags()->attach([2,3,4]);

        //return $post;
        return view('home', compact('posts'));

    }
}
