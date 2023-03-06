<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function getPage(){
        $category = Category::tree()->toArray();
        return view('index', compact('category'));
    }
}

