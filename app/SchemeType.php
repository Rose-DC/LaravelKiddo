<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchemeType extends Model
{
     // use SoftDeletes; 
 
  	protected $guarded = []; 
	 
	protected $primaryKey = 'tblSchemeId'; 
	protected $table = 'tblScheme'; 
	// protected $softDelete = true; 
	public $timestamps = false;
	public $incrementing = false; 

}