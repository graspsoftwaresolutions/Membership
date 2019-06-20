<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Membership extends Model
{
    protected $table = "membership";
    protected $fillable = ['id','member_title','member_number','name','gender','designation','email','phone','country_id','state_id','city','address_one',
                                'address_two','address_three','race','old_ic','new_ic','dob','doj','email_verified_at','password','user_type','is_request_approved','status'];
    public $timestamps = true;

    public function StoreMembership($member){
        $id = DB::table('membership')->insertGetId($member);
        return $id;
    }
}
