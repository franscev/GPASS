<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	protected $table = 'categories';
	
    public function users()
    {

        return $this->belongsTo('App\User')
    }

    public function passwords()
    {
        return $this->hasMany('App\Password');
    }
}
