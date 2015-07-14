<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Tags belong to many items.
     */
    public function items()
    {
    	return $this->belongsToMany('Swapstr\Item', 'item_tag')
    				->withTimestamps();
    }
}
