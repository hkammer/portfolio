<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                "title"=>"Title",
                "body"=>"Body",
                "status"=>1
            ]
            ];
            return view('home', compact('blogs'));

    }
}
