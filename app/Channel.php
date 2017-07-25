<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function getRouteKeyName()
    {
    	//FETCH BY SLUG NOT BY ID AS DEFAULT
    	return 'slug';
    }

    public function threads()
    {
    	return $this->hasMany(Thread::class);
    }
}
