<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function getPage(){
        return view('pages.team');
    }
}

