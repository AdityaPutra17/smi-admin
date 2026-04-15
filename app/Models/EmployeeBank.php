<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeBank extends Model
{
    //
    protected $table = 'employee_banks';
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
