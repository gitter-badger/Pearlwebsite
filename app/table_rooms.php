<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_rooms extends Model
{
     protected $guarded = array();
	protected $fillalble=array('room_type_id','room_state');
    protected $table='table_rooms';
   	public $timestamps=false;
}
