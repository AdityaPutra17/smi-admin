<?php

namespace App\Imports;

use App\Models\Employee;
use App\Models\EmployeeBank;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class EmployeesImport implements OnEachRow, WithHeadingRow, SkipsEmptyRows
{
    public function __construct($user)
    {
        $this->user = $user;
    }
    
    public function onRow(Row $row)
    {
        $row = $row->toArray();

        // ✅ Skip kalau emp_id kosong
        if (empty($row['emp_id'])) {
            return;
        }

        DB::beginTransaction();

        try {
            // ======================
            // 1. SIMPAN / UPDATE EMPLOYEE
            // ======================
            $employee = Employee::updateOrCreate(
                ['nik_emp' => $row['nik_emp']], // unique
                [
                    'emp_id' => $row['emp_id'],
                    'name' => $row['name'],
                    'gender' => $row['gender'],
                    'birth_date' => $row['birth_date'],
                    'birth_place' => $row['birth_place'],
                    'marital_status' => $row['marital_status'],
                    'education' => $row['education'],
                    'phone' => $row['phone'],
                    'email' => $row['email'],
                    'ktp_number' => $row['ktp_number'],
                    'address' => $row['address'],
                    'residence' => $row['residence'],
                    'company' => $row['company'],
                    'branch' => $row['branch'],
                    'location' => $row['location'],
                    'division' => $row['division'],
                    'position' => $row['position'],
                    'join_date' => $row['join_date'],
                    'contract_start' => $row['contract_start'],
                    'contract_end' => $row['contract_end'],
                    'contract_type' => $row['contract_type'],
                    'attendance_type' => $row['attendance_type'],
                    'status' => $row['status'] ?? 'Active',
                    'input_by' => $this->user,
                    'updated_by' => $this->user,
                    'input_date' => now(),
                    'updated_date' => now(),
                ]
            );

            // ======================
            // 2. SIMPAN / UPDATE EMPLOYEE BANK
            // ======================
            EmployeeBank::updateOrCreate(
                ['employee_id' => $employee->id], // ✅ HARUS pakai id
                [
                    'bank_name' => $row['bank_name'] ?? null,
                    'account_number' => $row['account_number'] ?? null,
                    'minimum_wage' => $row['minimum_wage'] ?? null,
                    'salary_times' => $row['salary_times'] ?? null,
                    'npwp_number' => $row['npwp_number'] ?? null,
                ]
            );

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();

            // biar gampang debug
            throw $e;
        }
    }
}
