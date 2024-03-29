<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use App\Fee;
use DB;
use View;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
        $this->Fee = new Fee;
    }
    public function index()
    {
        $data['fee_view'] = DB::table('fee')->where('status','=','1')->get(); 
        return view('fee.fee')->with('data',$data);
    }
    public function addFee()
    {
        return view('fee.add-fee');
    }
    public function save(Request $request)
    {
        $request->validate([
            'fee_name'=>'required',
        ],
        [
            'fee_name.required'=>'please enter Fee name',
        ]);
        $fee['fee_name'] = $request->input('fee_name');
        $data_exists = DB::table('fee')->where([
            ['fee_name','=',$fee['fee_name']],
            ['status','=','1']
            ])->count();
        if($data_exists>0 && $data_exists!='' && $data_exists!='NULL')
        {
            return redirect('add-fee')->with('message','Fee Name Already Exists');
        }
        else
        {
            $id = $this->Fee->StoreFee($fee);
            return redirect('fee')->with('message','Fee Name Added Succesfully');
        }
    }
    public function view($id)
    {
        $id = Crypt::decrypt($id);
        $data['fee_view'] = DB::table('fee')->where([
            ['status','=','1'],
            ['id','=',$id]
            ])->get();
        return view('fee.view_fee')->with('data',$data);
    }
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data['fee_view'] = DB::table('fee')->where([
            ['status','=','1'],
            ['id','=',$id]
            ])->get();
        return view('fee.edit_fee')->with('data',$data);
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $request->validate([
            'fee_name'=>'required',
        ],
        [
            'fee_name.required'=>'please enter Fee name',
        ]);
        $fee['fee_name'] = $request->input('fee_name');
        $data_exists = DB::table('fee')->where([
            ['fee_name','=',$fee['fee_name']],
            ['status','=','1']
            ])->count();

        if($data_exists>0 && $data_exists!='' && $data_exists!='NULL')
        {
            return redirect()->back()->with('message','Fee Name Already Exists');
        }
        else
        {
            $id = DB::table('fee')->where('id','=',$id)->update($fee);
            return redirect('fee')->with('message','Fee Name Updated Succesfully');
        }
    }
    public function delete($id)
	{
		$data = DB::table('fee')->where('id','=',$id)->update(['status'=>'0']);
		return redirect('fee')->with('message','Fee Deleted Succesfully');
	}
}
