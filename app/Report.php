<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'reports';

    /**
     * Mass assignment attributes
     * @var array
     */
    protected $fillable = [];

    /**
	* Get all of the owning imageable models.
	*/
	public function target()
	{
		return $this->morphTo();
	}
}
