<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $guarded = []; 
	 
	protected $primaryKey = 'tblStudInfoId'; 
	protected $table = 'tblstudentinfo'; 
	// protected $softDelete = true; 
	public $timestamps = false;
	public $incrementing = false;
}
