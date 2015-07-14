<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * Notifications belongs to a user.
     */
    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }
}
