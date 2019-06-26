@extends('layouts.layout')
@section('content')
@if(session('message'))
<div class="alert alert-success" id="id">
{{session('message')}}
</div>
@endif
@if(session('errors'))

@endif
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong> Add Branch Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('branch')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('branch_save')}}">
                        @foreach($data as $key=>$value)
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Company Name</label>
                                 <div class="col-md-7"> 
                                    <select class="form-control" disabled name="company_id">
                                   
                                        <option  value="{{$value->company_name}}">{{$value->company_name}}</option>
                                   
                                    </select>
                                 </div>
                                 </div>
                                 <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Branch Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" value="{{$value->branch_name}}" disabled placeholder="Enter Branch Name" name="branch_name" id="branch_name" class="form-control">
                                    @if($errors->has('branch_name'))
                                    <span class="text-danger">{{$errors->first('branch_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        
                    </form>
                    </div>
            </div>
        </div>
        </div>
@stop