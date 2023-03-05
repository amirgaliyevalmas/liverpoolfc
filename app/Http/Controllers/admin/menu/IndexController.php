<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;

class IndexController extends Controller
{
    public function index()
    {


       $menus = Menu::all()->sortBy('sort');

       return view('admin.menus.index',compact('menus'));
    }
}
