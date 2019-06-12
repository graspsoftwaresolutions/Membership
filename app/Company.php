<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Company extends Model
{
    protected $fillable = [
        'id','company_name','owner_name','phone','email','address_one','address_two','status'
    ];
}
