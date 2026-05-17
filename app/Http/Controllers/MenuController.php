<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        return redirect('/menu');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }

     public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->update([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        return redirect('/menu');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect('/menu');
    }

    public function favorite($id)
    {
        $menu = Menu::findOrFail($id);

        $menu->is_favorite = !$menu->is_favorite;

        $menu->save();

        return redirect('/menu');
    }

    public function favorit()
    {
        $menus = Menu::where('is_favorite', true)->get();

        return view('menu.favorit',
        compact('menus'));
    }
}