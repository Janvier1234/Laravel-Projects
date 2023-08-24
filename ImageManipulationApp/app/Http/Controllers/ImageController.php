<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;

class ImageController extends Controller
{


public function upload(Request $request)
{
    $image = $request->file('image');
    $imagePath = $image->store('images', 'public');

    $image = Image::make(storage_path("app/public/$imagePath"));
    $image->filter(new \Intervention\Image\Filters\Grayscale()); // Apply a filter

    $image->save();

    return back()->with('success', 'Image uploaded and manipulated successfully.');
}

}
