<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

    //Storage::delete('/images/new_image.jpg');
    //File::delete(storage_path('/app/public/images/P3arCmxfSoeHDMQVtQ7uEGQVhQkY4K6FMLir1rcx.jpg'));
    //unlink(storage_path('/app/public/images/Yn7Pk5rDr2cJDfxP8yKnT8wkAEREBKIHA6FoIGC9.jpg'));

    return view('home');
}
}
