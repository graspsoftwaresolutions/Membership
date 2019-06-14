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
        	<h5><strong> View Country Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('country')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <div class="row">
                        
                        @foreach($data['country_view'] as $key=>$value)
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Country Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" disabled="true" value="{{$value->country_name}}" placeholder="Enter Company Name" name="company_name" id="company_name" class="form-control">
                                   
                                 </div>
                                 </div>
                            </div>
                           
                        </div>
                            @endforeach
                        </div>
                        <br>
                   
                    </div>
            </div>
        </div>
        </div>
@stop