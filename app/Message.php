<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Messages belong to a conversation.
     */
    public function conversation()
    {
    	return $this->belongsTo('Swapstr\Conversation');
    }
}
