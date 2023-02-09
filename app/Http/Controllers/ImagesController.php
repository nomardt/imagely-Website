<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ImagesController extends Controller
{
    // Show all images
    public function index() {
        $images = DB::select('select * from images');
        return view('images.index',[
            'images' => $images
        ]);
    }
}
