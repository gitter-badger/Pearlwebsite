<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation_table extends Model
{
    protected $guarded = array();
	protected $fillalble=array('user_id','chechin date','checkout date','reservation_date');
    protected $table='reservation_table';
   	public $timestamps=false;
}
