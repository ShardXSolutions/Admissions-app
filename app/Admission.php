<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
	protected $fillable = [
		'id',
		'adm',
		'fullname',
		'Course',
		'address',
		'email',
		'mobile',
		'level',
		'indexno',
		'feyear',
		'form_generated',
	];
}
