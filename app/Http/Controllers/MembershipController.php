<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\Country;
use App\State;
use City;
use Company;
use DB;
use View;

class MembershipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
        $this->Membership = new Membership;
       
    }
    public function index()
    {
        $data['country_view'] = DB::table('country')->select('id','country_name')->where('status','=','1')->get();
        $data['company_view'] = DB::table('company')->where('status','=','1')->get();
       
        return view('membership.member_register')->with('data',$data);  
    }
    public function getStateList(Request $request)
    {
        $id = $request->country_id;
        $res = DB::table('state')
                ->select('id','state_name')
                ->where('country_id','=',$id)->get();
                return response()->json($res);
    }
    public function getCitiesList(Request $request){
        $id = $request->State_id;
        $res = DB::table('city')
        ->select('id','city_name')
        ->where('state_id','=',$id)->get();
        return response()->json($res);
    }
    public function Save(Request $request)
    {
        $request->validate([
            'member_title'=>'required',
            'member_number'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'designation'=>'required',
            'race'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'address_one'=>'required',
            'doj'=>'required',
            'new_ic'=>'required',
            'company_id'=>'required',
        ],
        [
            'member_title.required'=>'Please Enter Your Title',
            'member_number.required'=>'Please Enter Member NUmber',
            'name.required'=>'Please Enter Your Name',
            'gender.required'=>'Please choose Gender',
            'phone.required'=>'Please Enter Mobile Number',
            'email.required'=>'Please Enter Email Address',
            'designation.required'=>'Please choose  your Designation',
            'race.required'=>'Please Enter your Race Number',
            'country_id.required'=>'Please choose  your Country',
            'state_id.required'=>'Please choose  your State',
            'city_id.required'=>'Please choose  your city',
            'address_one.required'=>'Please Enter your Address',
            'doj.required'=>'Please choose DOB',
            'new_ic.required'=>'Please Enter New Ic Number',
            'company_id.required'=>'Please Choose Company Name',

        ]);

        $member['member_title'] = $request->input('member_title');
        $member['member_number'] = $request->input('member_number');
        $member['name'] = $request->input('name');
        $member['gender'] = $request->input('gender');
        $member['phone'] = $request->input('phone');
        $member['email'] = $request->input('email');
        $member['designation'] = $request->input('designation');
        $member['race'] = $request->input('race');
        $member['country_id'] = $request->input('country_id');
        $member['state_id'] = $request->input('state_id');
        $member['city_id'] = $request->input('city_id');
        $member['address_one'] = $request->input('address_one');
        $member['address_two'] = $request->input('address_two');
        $member['address_three'] = $request->input('address_three');
        $member['dob'] = $request->input('dob');
        $member['doj'] = $request->input('doj');
        $member['old_ic'] = $request->input('old_ic');
        $member['new_ic'] = $request->input('new_ic');
        $member['company_id'] = $request->input('company_id');

        //print_r($request->all()); exit;   
        $id = $this->Membership->StoreMembership($member);
        return redirect()->back()->with('message','Registration Successfull');
    }
}
