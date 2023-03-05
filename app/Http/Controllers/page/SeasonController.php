<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class SeasonController extends Controller
{
    public function getPage(){
        return view('pages.season');
    }
}

