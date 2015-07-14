<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * Grab all the items from a location.
     */
    public function items()
    {
    	return $this->hasManyThrough('Swapstr\Item', 'Swapstr\Address');
    }
}
