<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Ppreference extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'ppreferences';

    /**
     * Mass assignment attributes
     * @var array
     */
    protected $fillable = ['user_id', 'email', 'gender', 'phone', 'address'];

    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }
}
