<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function getPage(){
        return view('pages.history');
    }
}

