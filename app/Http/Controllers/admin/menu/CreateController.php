<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        return view('admin.menus.create');
    }
}
