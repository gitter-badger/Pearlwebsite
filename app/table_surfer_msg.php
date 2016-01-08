<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_surfer_msg extends Model
{
    protected $guarded = array();
	protected $fillalble=array('ip','username','email','phone','msg');
    protected $table='table_surfer_msg';
   	public $timestamps=false;
}
