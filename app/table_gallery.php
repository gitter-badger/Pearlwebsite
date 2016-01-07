<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_gallery extends Model
{
    protected $guarded = array();
	protected $fillalble=array('img_link','img_title','img_desc');
    protected $table='table_gallery';
   	public $timestamps=false;
}
