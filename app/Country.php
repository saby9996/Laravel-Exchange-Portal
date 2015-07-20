<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Mass assignment attributes.
     * @var array
     */
    protected $fillable = ['country_code', 'name'];

    /**
     * A country has many locations.
     * @return hasMany
     */
    public function locations()
    {
    	return $this->hasMany('Swapstr\Region');
    }
}
