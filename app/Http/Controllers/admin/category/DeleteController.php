<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;


class DeleteController extends Controller
{
    public function delete(Category $menu)
    {
        if($menu->id > 9) {
            $menu->delete();
        }
        return redirect()->route('admin.category.index');
    }
}
