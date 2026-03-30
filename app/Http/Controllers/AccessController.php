<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Menu;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $accesses = Access::all();
        $menus = Menu::orderBy('order')->get();
        return view('admin.access.index', compact('accesses', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'role' => 'required',
            'menu_id' => 'required|exists:menus,id',
        ]);

        $access = new Access();
        $access->role = $request->role;
        $access->menu_id = $request->menu_id;
        $access->save(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Access $access)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Access $access)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Access $access)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Access $access)
    {
        //
    }
}
