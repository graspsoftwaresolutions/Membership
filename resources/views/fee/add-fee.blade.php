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
        	<h5><strong> Add Fee Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('fee')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('fee_save')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Fee Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Fee Name" name="fee_name" id="fee_name" class="form-control">
                                    @if($errors->has('fee_name'))
                                    <span class="text-danger">{{$errors->first('fee_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="Save" class="btn btn-success">
                                    <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger">
                            </div>
                        </div> 
                    </form>
                    </div>
                    
            </div>
        </div>
        </div>
@stop