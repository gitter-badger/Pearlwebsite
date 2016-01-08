<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_table extends Model
{
    protected $guarded = array();
	protected $fillalble=array('username','birthday','gender','email','password','phone','user_type_id');
    protected $table='user_table';
   	public $timestamps=false;
}
