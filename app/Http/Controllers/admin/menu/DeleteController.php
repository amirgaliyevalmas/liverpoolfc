<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;
use App\Models\Menu;


class DeleteController extends Controller
{
    public function delete(Menu $menu)
    {
        if($menu->id > 9) {
            $menu->delete();
        }
        return redirect()->route('admin.menu.index');
    }
}
