<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;

use App\Http\Requests\Menu\StoreRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $menu = $request->validated();
        Menu::create($menu);

        return redirect()->route('admin.menu.index');
    }
}
