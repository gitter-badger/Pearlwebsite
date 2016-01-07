<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_user_type extends Model
{
    protected $guarded = array();
	protected $fillalble=array('type_name');
    protected $table='table_user_type';
   	public $timestamps=false;
}
