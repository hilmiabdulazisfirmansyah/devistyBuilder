<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
	protected $fillable = ['nama'];
	
    public function menu(){

    	$this->hasOne(\App\Menu::class);

    }
}
