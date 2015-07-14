<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Epreference extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'epreferences';

    /**
     * Mass assignment attributes.
     * 
     * @var array
     */
    protected $fillable = ['user_id', 'items', 'users', 'newsletters'];

    /**
     * Email preference belongs to a user.
     */
    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }
}
