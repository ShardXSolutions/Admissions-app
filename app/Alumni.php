<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
	protected $fillable = [
		'id',
		'adm',
		'fullname',
		'dept',
		'course',
		'level',
		'feyear',
		'feser',
		'idnum',
		'current_address',
		'permanent_address',
		'email',
		'mobile',
		'occupation',
		'occupation_place',
		'nextofkin',
		'nextofkinadd',
		'nextofkinphone',
		'placeofworkadd',
		'supervisoradd',
		'trans',
		'serial'


	];
}
