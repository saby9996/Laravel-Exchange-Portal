<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $table = 'exchanges';

    protected $fillable = [];

    protected $hidden = [];

    protected $dates = [];

    public function itemlist()
    {
    	return $this->hasMany('Swapstr\ItemsList', 'exchange_id');
    }

    public function offered_by()
    {
    	return $this->belongsTo('Swapstr\User', 'offered_by');
    }
}
