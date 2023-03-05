<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getPage(){
        return view('index');
    }
}

