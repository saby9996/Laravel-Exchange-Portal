<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	/**
	 * Model for wishlists table.
	 * @var string
	 */
	protected $table = 'wishlists';

	/**
	 * Mass assignment attributes.
	 * @var array
	 */
	protected $fillable = [];

	/**
	 * Wishlist belongs to a user
	 */
    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }

}
