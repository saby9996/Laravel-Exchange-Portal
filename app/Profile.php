<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	/**
	 * Table name for profile model.
	 * @var string
	 */
	protected $table = 'profiles';
	
	/**
	 * Mass assignment attributes.
	 * @var array
	 */
	protected $fillable = ['user_id', 'firstname', 'lastname', 'gender'];

	/**
	 * Date attributes in profile table.
	 * @var array
	 */
	protected $dates = ['last_login'];

	/**
	 * Profile belongs to a user.
	 */
    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }

    /**
	* Get all of the user profile's photos.
	*/
	public function photos()
	{
		return $this->morphOne('Swapstr\Photo', 'imageable');
	}

}
