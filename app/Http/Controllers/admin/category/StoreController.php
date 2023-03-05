<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $category = $request->validated();
        Category::create($category);



        return redirect()->route('admin.category.index');
    }
}
