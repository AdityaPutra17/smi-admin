<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $guarded = [];

    // protected $fillable = ['name', 'icon', 'order'];

    public function subMenus()
    {
        return $this->hasMany(SubMenu::class)->orderBy('order');
    }
}
