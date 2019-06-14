<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Country extends Model
{
    protected $table = 'country';
    protected $fillable = ['id','country_name','status'];
    public $timestamps = true;

    public function StoreCountry($country)
    {
        $id = DB::table('country')->insertGetId($country);
        return $id;
    }
    
}