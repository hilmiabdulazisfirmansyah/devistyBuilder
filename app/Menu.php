<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['_method'];

    public function submenu(){
    	$this->hasOne(\App\Submenu::class);
    }
    
}
