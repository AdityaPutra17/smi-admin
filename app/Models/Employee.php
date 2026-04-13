<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';
    protected $guarded = [];

    public function loginUser()
    {
        return $this->hasOne(LoginUser::class, 'nik_emp', 'employee_id');
    }
}
