<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
	/**
	 * Conversation belongs to many users.
	 */
    public function users()
    {
    	return $this->belongsToMany('Swapstr\User', 'participants');
    }

    /**
     * Conversation has many messages.
     */
    public function messages()
    {
    	return $this->hasMany('Swapstr\Message');
    }
}
