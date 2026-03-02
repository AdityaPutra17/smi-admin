<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $submenus = Submenu::with('menu')
            ->orderBy('menu_id')
            ->orderBy('order')
            ->get();

        return view('admin.submenus.index', compact('submenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $menus = Menu::orderBy('order')->get();
        return view('admin.submenus.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'name' => 'required',
            'icon' => 'required',
            'route' => 'required',
            'order' => 'required|numeric',
        ]);

        Submenu::create($request->all());

        return redirect()->route('submenus.index')
            ->with('success', 'Submenu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submenu $submenu)
    {
        //
        $menus = Menu::orderBy('order')->get();
        return view('admin.submenus.edit', compact('submenu', 'menus'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submenu $submenu)
    {
        //
         $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'name' => 'required',
            'icon' => 'required',
            'route' => 'required',
            'order' => 'required|numeric',
        ]);

        $submenu->update($request->all());

        return redirect()->route('submenus.index')
            ->with('success', 'Submenu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $submenu->delete();

        return redirect()->route('submenus.index')
            ->with('success', 'Submenu berhasil dihapus');
    }
}
