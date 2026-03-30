<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginUser;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = LoginUser::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'emp_id' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $user = new LoginUser();

        $empId = trim($request->emp_id);
        $employee = Employee::where('nik_emp', $empId)->first();
        // dd($request->emp_id, $employee, $nik);
        if (!$employee) {
            return back()->withErrors([
                'emp_id' => 'Employee ID tidak ditemukan'
            ])->withInput();
        }
        $user->employee_id = $employee->nik_emp; // Simpan emp_id ke login_users

        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save(); 

        return redirect()->route('user.index')
            ->with('success', 'User Berhasil ditambahkan');

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
        $user = LoginUser::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')
            ->with('success', 'User berhasil dihapus');
            
    }
}
