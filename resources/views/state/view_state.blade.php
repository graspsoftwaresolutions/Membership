@extends('layouts.layout')
@section('content')
@if(session('message'))
<div class="alert alert-success" id="id">
{{session('message')}}
</div>
@endif
@if(session('errors'))
<div class="alert alert-danger" id="id">
{{session('errors')}}
</div>
@endif
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong> View Sate Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('state')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('state_save')}}">
                        @foreach($data as $value)
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Country Name</label>
                                 <div class="col-md-7"> 
                                    <select class="form-control" name="country_id" disabled="true"> 
                                        <option  value="{{$value->id}}">{{$value->country_name}}</option>
                                    </select>
                                 </div>
                                 </div>
                                 <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">State Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text"  disabled="true" placeholder="Enter State Name" value="{{$value->state_name}}" name="state_name" id="state_name" class="form-control">
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