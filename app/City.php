<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Mass assignment attributes.
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * City may belong to many locations.
     * @return hasMany
     */
    public function location()
    {
    	return $this->hasOne('Swapstr\Location');
    }
}
