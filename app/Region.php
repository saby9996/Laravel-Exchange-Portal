<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * Mass assignment attributes.
     * @var array
     */
    protected $fillable = ['name'];

    public function locations()
    {
    	return $this->hasMany('Swapstr\Region');
    }
}
