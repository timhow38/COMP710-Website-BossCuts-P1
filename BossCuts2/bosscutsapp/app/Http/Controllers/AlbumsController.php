<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        //pages = folder location | index = .blade.php file
        return view('pages.index');
    }
    public function create()
    {
        return view('posts.create');
    }
}
