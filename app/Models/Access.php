<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    //
    protected $guarded = [];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'access_menu', 'access_id', 'menu_id');
    }   
}
