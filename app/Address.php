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

    /**
     * Create or Update an address.
     * @param  array $address_data
     * @return array     
     */
    public function createOrUpdate($address_data)
    {
        if(\Auth::user()->address()->count()){
            \Auth::user()->address()->update($address_data);
        }
        else {
            \Auth::user()->address()->firstOrCreate($address_data);
        }
    }
}
