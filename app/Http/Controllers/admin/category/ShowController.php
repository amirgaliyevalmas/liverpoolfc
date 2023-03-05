<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }
}
