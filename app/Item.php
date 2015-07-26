<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	use SoftDeletes;
	
	protected $table = 'items';

	protected $fillable = ['category_id', 'title', 'slug', 'description', 
							'address_id', 'exchange_from', 'exchange_till'];

	 /**
     * Date attributes in items table.
     * @var array
     */
    protected $dates = ['deleted_at', 'exchange_from', 'exchange_till'];
	/**
	* Get all of the item's reports.
	*/
	public function reports()
	{
		return $this->morphMany('Swapstr\Report', 'target');
	}

	/**
	 * Item has a owner which references a user model.
	 */
	public function owner()
	{
		return $this->belongsTo('Swapstr\User', 'owner');
	}

	/**
	 * Items belong to a category.
	 */
	public function category()
	{
		return $this->belongsTo('Swapstr\Category');
	}

	public function tags()
	{
		return $this->belongsToMany('Swapstr\Tag', 'item_tag')
					->withTimestamps();
	}

	/**
	* Get all of the item's photos.
	*/
	public function photos()
	{
		return $this->morphMany('Swapstr\Photo', 'imageable');
	}

	public function address()
	{
		return $this->morphOne('Swapstr\Address', 'addressable');
	}
}
