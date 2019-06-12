<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class state extends Model
{
    protected $fillable = [
        'id','country_id','state_name','status',
    ];
}
