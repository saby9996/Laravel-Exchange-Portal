<?php

namespace Swapstr;

use Illuminate\Database\Eloquent\Model;

class ItemsList extends Model
{
    protected $table = 'items_lists';

    protected $fillable = ['exchange_id', 'user_id', 'item_id'];

 	public function exchange()
 	{
 		return $this->belongsTo('Swapstr\Exchange', 'exchange_id');
 	}
}
