<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::sortable()->latest()->paginate(10);
        return view('admin.menus.index', compact('menus'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create() {
        $lists = Menu::select('id','menu_name')->where('menu_active', true)->get();
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        $types = array(array('value' => 'backend', 'text' => 'Halaman Administrasi'), array('value' => 'frontend', 'text' => 'Halaman Web'));
        return view('admin.menus.create', compact('lists', 'status', 'types'));
    }

    public function store(Request $request) {
        request()->validate([
            'menu_name' => 'required',
            'menu_desc' => 'required',
            'menu_icon' => 'required',
            'menu_route' => 'required',
            'menu_type' => 'required',
            'menu_level' => 'required',
            'menu_order' => 'required'
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index')
                         ->with('success','Menu created successfully.');
    }

    public function show(Menu $menu) {
        $lists = Menu::select('id','menu_name')->where('menu_active', '=', 1)->get();
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        $types = array(array('value' => 'backend', 'text' => 'Halaman Administrasi'), array('value' => 'frontend', 'text' => 'Halaman Web'));
        return view('admin.menus.show', compact('menu', 'lists', 'status', 'types'));
    }

    public function edit(Menu $menu) {
        $lists = Menu::select('id','menu_name')->where('menu_active', '=', 1)->get();
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        $types = array(array('value' => 'backend', 'text' => 'Halaman Administrasi'), array('value' => 'frontend', 'text' => 'Halaman Web'));
        return view('admin.menus.edit', compact('menu', 'lists', 'status', 'types'));
    }

    public function update(Request $request, Menu $menu) {
        request()->validate([
            'menu_name' => 'required',
            'menu_desc' => 'required',
            'menu_icon' => 'required',
            'menu_route' => 'required',
            'menu_type' => 'required',
            'menu_level' => 'required',
            'menu_order' => 'required'
        ]);

        $menu->update($request->all());

        return redirect()->route('menus.index')
                         ->with('success','Menu Update successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menus.index')
                        ->with('success','Menu deleted successfully');
    }
}
