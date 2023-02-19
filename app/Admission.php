<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
	protected $fillable = [
    'Adm',
    'IndexNumber',
    'Year',
    'StudentName',
    'Gender',
    'Phone',
 	'AltPhone',
    'Email',
    'AltEmail',
    'Address',
    'Course',
    'Level',
    'FormGenerated',
    'Contacted',
	];
}
