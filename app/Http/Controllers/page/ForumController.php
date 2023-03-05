<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function getPage(){
        return view('pages.forum');
    }
}

