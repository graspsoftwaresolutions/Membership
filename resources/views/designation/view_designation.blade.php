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
        	<h5><strong> View Designation Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('designation')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <div class="row">
                        <form method="post" action="{{url('company_save')}}">
                        @foreach($data['designation_view'] as $key=>$value)
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Designation Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" disabled value="{{$value->designation_name}}" placeholder="Enter Designation Name" name="designation_name" id="designation_name" class="form-control">
                                   
                                 </div>
                                 </div>
                            </div>
                            @endforeach
                        </div>
                        <br>
                    </form>
                    </div>
                    
            </div>
        </div>
        </div>
@stop