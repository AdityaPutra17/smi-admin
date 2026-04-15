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
        return redirect()->route('admin.index')->with('success', 'Data Karyawan berhasil ditambahkan!');
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
    public function edit(Employee $employee, string $id)
    {
        //
        $employee = Employee::findOrFail($id);
        return view('admin.hr.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'emp_id' => 'required|unique:employees,emp_id,' . $id,
            'nik_emp' => 'required|unique:employees,nik_emp,' . $id,
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|in:Laki-laki,Perempuan',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:100',
            'education' => 'nullable|string|max:100',
            'ktp_number' => 'nullable|string|max:50',
            'address' => 'nullable|string',
            'residence' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'branch' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'division' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'join_date' => 'nullable|date',
            'contract_start' => 'nullable|date',
            'contract_end' => 'nullable|date',
            'contract_type' => 'nullable|string|max:100',
            'attendance_type' => 'nullable|string|max:100',
            'status' => 'required|in:Active,Inactive',
        ]);

        $employee = \App\Models\Employee::findOrFail($id);

        $employee->update([
            'emp_id' => $request->emp_id,
            'nik_emp' => $request->nik_emp,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'marital_status' => $request->marital_status,
            'education' => $request->education,
            'ktp_number' => $request->ktp_number,
            'address' => $request->address,
            'residence' => $request->residence,
            'company' => $request->company,
            'branch' => $request->branch,
            'location' => $request->location,
            'division' => $request->division,
            'position' => $request->position,
            'join_date' => $request->join_date,
            'contract_start' => $request->contract_start,
            'contract_end' => $request->contract_end,
            'contract_type' => $request->contract_type,
            'attendance_type' => $request->attendance_type,
            'status' => $request->status,

            // ✅ audit update
            'updated_by' => auth()->user()->employee_id ?? null,
            'updated_date' => now(),
        ]);

        // ======================
        // REDIRECT
        // ======================
        return redirect()
            ->route('admin.index')
            ->with('success', 'Data karyawan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
