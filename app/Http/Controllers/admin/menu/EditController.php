<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;

use App\Models\Menu;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }
}
