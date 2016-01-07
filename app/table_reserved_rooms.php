<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_reserved_rooms extends Model
{
     protected $guarded = array();
	protected $fillalble=array('reservation_id','room_id');
    protected $table='table_reserved_rooms';
   	public $timestamps=false;
}
