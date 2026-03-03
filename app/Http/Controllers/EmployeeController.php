<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();

        return view('admin.hr.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.hr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'emp_id'       => 'required|string|max:255',
            'nik_emp'      => 'required|string|max:255',
            'name'         => 'required|string|max:255',
            'company'      => 'required|string|max:255',
            'startcont'    => 'nullable|date',
            'join_date'    => 'nullable|date',
            'division'     => 'required|string|max:255',
            'location'     => 'required|string|max:255',
            'position'     => 'required|string|max:255',
            'no_hp'        => 'required|string|max:20',
            'status'       => 'required|string|max:50',
            'tgl_resign'   => 'nullable|date',
            'pic_hr'       => 'nullable|string|max:255',
            'email'        => 'required|email|max:255',
            'user_pic'     => 'nullable|string|max:255',
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'email' => 'Format email tidak valid.',
        ]);

        // Membuat data baru ke database
        Employee::create($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('hr.index')->with('success', 'Data Karyawan berhasil ditambahkan!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
