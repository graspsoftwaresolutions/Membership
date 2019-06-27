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
                        <form method="post" action="{{url('update_designation')}}">
                        @foreach($data['designation_view'] as $key=>$value)
                        @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Designation Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" value="{{$value->designation_name}}" placeholder="Enter Designation Name" name="designation_name" id="designation_name" class="form-control">
                                 </div>
                                 </div>
                            </div>
                            @endforeach
                        </div>
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="update" class="btn btn-success">
                                  <!-- <a href="{{url('designation')}}">  <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger"></a> -->
                            </div>
                        </div> 
                    </form>
                    </div>
            </div>
        </div>
        </div>
@stop