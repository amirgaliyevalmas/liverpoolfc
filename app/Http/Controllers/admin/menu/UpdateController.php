<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Controller;

use App\Http\Requests\Menu\UpdateRequest;
use App\Models\Menu;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request, Menu $menu)
    {
        $data = $request->validated();
        $menu->update($data);
        return redirect()->route('admin.menu.show', compact('menu'));
    }
}
