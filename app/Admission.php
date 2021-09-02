<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
	protected $fillable = [
		'id',
		'adm',
		'fullname',
		'course',
		'address',
		'email',
		'mobile',
		'level',
		'indexno',
		'feyear',
		'form_generated',
	];
}
