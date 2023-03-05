<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function getPage(){
        return view('pages.market');
    }
}

