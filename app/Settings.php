<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable =[
        "SNo",
        "SettingName",
        "SettingStartDate",
        "SettingEndDate",
    ];
}
