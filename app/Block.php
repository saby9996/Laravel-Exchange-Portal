<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'blocks';

    protected $fillable = [];

    protected $hidden = [];

    public function user()
    {
    	return $this->belongsTo('Swapstr\User', 'blocker');
    }
}
