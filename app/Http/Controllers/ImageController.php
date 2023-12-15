<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request){

        $request->validate([
            'image'=>['required', 'min:50', 'max:1000', 'mimes:png,jpg,gif']
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');

        return redirect()->route('success');
    }

    public function download(){
        return response()->download('/Users/ben/Sites/laravel/portfolio/storage/app/public/images/new_image.jpg');
    }
}
