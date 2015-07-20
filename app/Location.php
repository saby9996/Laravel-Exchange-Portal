<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = ['city_id', 'region_id', 'country_id'];
    /**
     * Grab all the items from a location.
     */
    public function items()
    {
    	return $this->hasManyThrough('Swapstr\Item', 'Swapstr\Address');
    }

    public function addresses()
    {
    	return $this->hasMany('Swapstr\Address');
    }

    public function city()
    {
    	return $this->belongsTo('Swapstr\City');
    }

    public function region()
    {
    	return $this->belongsTo('Swapstr\Region');
    }

    public function country()
    {
    	return $this->belongsTo('Swapstr\Country');
    }
}
