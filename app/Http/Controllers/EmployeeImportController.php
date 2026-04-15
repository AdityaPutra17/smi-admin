<?php

namespace App\Http\Controllers;

use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class EmployeeImportController extends Controller
{
    //
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        // $user = auth()->user()->employee_id;
        $user = auth()->user()->employee->name;

        Excel::import(new EmployeesImport($user), $request->file('file'));

        return back()->with('success', 'Data berhasil diimport!');
    }
}