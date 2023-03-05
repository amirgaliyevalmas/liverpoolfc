<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getPage(){
        return view('pages.news.news');
    }
}

