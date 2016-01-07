<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_customer_msg extends Model
{
    protected $guarded = array();
	protected $fillalble=array('user_id','msg');
    protected $table='table_customer_msg';
   	public $timestamps=false;
}
