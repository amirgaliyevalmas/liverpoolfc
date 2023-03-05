<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;

use App\Models\Category;

class EditController extends Controller
{
    public function edit(Category $category)
    {
        $categories = Category::tree()->toArray();

        $delimiter = '-';

        return view('admin.categories.edit', compact('category', 'categories','delimiter'));
    }
}
