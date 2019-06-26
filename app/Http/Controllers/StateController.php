<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\State;
use App\Country;
use DB;
use View;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
        $this->State = new State;
       
    }
    public function index()
    {
        $data = DB::table('country')->select('country.country_name','state.state_name','state.id','state.country_id','state.status')
                ->join('state','country.id','=','state.country_id')
                ->orderBy('country.id','ASC')
                ->where('state.status','=','1')->get();
        return view('state.state',compact('data',$data));
    }
    public function addState()
    {
        $data = DB::table('country')->where('status','=','1')->get();
        return view('state.add_state',compact('data',$data));
    }
    public function save(Request $request)
    {
        $request->validate([
            'country_id'=>'required',
            'state_name'=>'required'
        ],
        [
            'country_id.required'=>'please Choose Country name',
            'state_name.required'=>'please Enter State name',
        ]);
        $state['country_id'] = $request->input('country_id');
        $state['state_name'] = $request->input('state_name');
        $data_exists = DB::table('state')->where([
           ['state_name','=', $state['state_name']],
           ['status','=','1'] 
            ])->count();
        if($data_exists>0 && $data_exists!='' && $data_exists!='NULL')
        {
            return redirect('state')->with('message','State Name Already Exists');
        }
        else
        {
            $id = $this->State->StoreState($state);
            return redirect('state')->with('message','State Name Added Succesfully');
        }
    }
    public function view($id)
    {
        $id = Crypt::decrypt($id);
        $data = DB::table('country')->select('country.country_name','state.state_name','state.id','state.country_id','state.status')
                ->join('state','country.id','=','state.country_id')
                ->where('state.id','=',$id)->get();
        return view('state.view_state',compact('data',$data));
    }
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = DB::table('country')->select('country.country_name','state.state_name','state.id','state.country_id','state.status','state.id')
                ->join('state','country.id','=','state.country_id')
                ->where('state.id','=',$id)->get();
        return view('state.edit_state',compact('data',$data));
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $state['country_id'] = $request->input('country_id');
        $state['state_name'] = $request->input('state_name');
		$id = DB::table('state')->where('id','=',$id)->update($state);
		return redirect('state')->with('message','State Details Updated Succesfully');
    }
    public function delete($id)
	{
		$data = DB::table('state')->where('id','=',$id)->update(['status'=>'0']);
		return redirect('state')->with('state','State Deleted Succesfully');
	} 
}
