<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * Table for category model.
	 * @var string
	 */
	protected $table = 'categories';

    /**
     * Category belongs to many items.
     */
    public function items()
    {
    	return $this->hasMany('Swapstr\Item');
    }
}
