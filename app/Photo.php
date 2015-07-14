<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
	* Get all of the owning imageable models.
	*/
	public function imageable()
	{
	return $this->morphTo();
	}
}
