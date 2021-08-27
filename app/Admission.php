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
		'idnum',
		'address',
		'email',
		'mobile',
		'level',
		'indexnum',
		'feyear',
		'form_generated',
	];
}
