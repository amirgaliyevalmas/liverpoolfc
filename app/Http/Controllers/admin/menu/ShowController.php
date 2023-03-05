<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class ShowController extends Controller
{
    public function show(Menu $menu)
    {
        return view('admin.menus.show',compact('menu'));
    }
}
