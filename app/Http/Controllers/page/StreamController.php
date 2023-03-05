<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class StreamController extends Controller
{
    public function getPage(){
        return view('pages.stream');
    }
}

