<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    //
    // protected $fillable = [
    //     'menu_id',
    //     'name',
    //     'route',
    //     'icon',
    //     'order'
    // ];

    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
