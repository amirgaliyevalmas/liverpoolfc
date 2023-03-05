<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function create()
    {
        $categories = Category::tree()->toArray();

        return view('admin.categories.create',compact('categories'));
    }
}
