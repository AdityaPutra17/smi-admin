<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class LoginUser extends Authenticatable

{
    //
    protected $table = 'login_users';

    protected $fillable = [
        'employee_id',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'nik_emp');
    }
}
