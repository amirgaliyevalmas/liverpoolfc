<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::tree()->toArray();
       return view('admin.categories.index',compact('categories'));
    }
}
