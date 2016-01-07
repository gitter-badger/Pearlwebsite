<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_room_type extends Model
{
    protected $guarded = array();
	protected $fillalble=array('type_name','max_num');
    protected $table='table_room_type';
   	public $timestamps=false;
}
