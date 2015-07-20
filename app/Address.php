<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	/**
	 * Mass assignment attributes.
	 * @var array
	 */
	protected $fillable = ['line1', 'line2', 'addressable_type', 
							'addressable_id', 'location_id', 'pincode'];
	
	/**
	 * Address can belong to user and item.
	 * @return morphTo
	 */
    public function addressable()
    {
    	return $this->morphTo();
    }

    /**
     * Location belongs to an address.
     * @return belongsTo
     */
    public function location()
    {
    	return $this->belongsTo('Swapstr\Location');
    }
}
