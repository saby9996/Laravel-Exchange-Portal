<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{

	protected $table = 'interests';
    /**
     * Interest is shared by many users.
     */
    public function users()
    {
    	return $this->belongsToMany('Swapstr\User', 'interest_user');
    }
}
