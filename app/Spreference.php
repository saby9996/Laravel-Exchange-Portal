<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Spreference extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'spreferences';

    /**
     * Mass assignment attributes
     * @var array
     */
    protected $fillable = ['user_id', 'item_id', 'block_type'];

    /**
     * Search preference belongs to user.
     */
    public function user()
    {
    	return $this->belongsTo('Swapstr\User');
    }

}
