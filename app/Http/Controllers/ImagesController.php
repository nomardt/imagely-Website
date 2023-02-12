<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ImagesController extends Controller
{
    // Show all images
    public function index() {
        return view('images.index',[
            'images' => Image::latest()->paginate(9)
        ]);
    }

    // Show upload form
    public function create() {
        return view('images.create');
    }

    // Store the newly uploaded image
    public function store(Request $request) {
        $formFields = $request->validate([
            'image' => 'required'
        ]);
        $formFields['image'] = $request->file('image')->store('tmp', 'public');

        Image::create($formFields);

        return redirect('/')->with('message', 'Image uploaded!');
    }
}
