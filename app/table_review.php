<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_review extends Model
{
    protected $guarded = array();
	protected $fillalble=array('user_id','review');
    protected $table='table_review';
   	public $timestamps=false;
}
