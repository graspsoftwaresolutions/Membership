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
        	<h5><strong> Edit Company Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('company')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('company_edit')}}">
                        @foreach($data['company_edit'] as $key=>$value)
                        @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Company Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" value="{{$value->company_name}}" placeholder="Enter Company Name" name="company_name" id="company_name" class="form-control">
                                   
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Owner Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" value="{{$value->owner_name}}" placeholder="Enter Owner Name" name="owner_name" id="owner_name" class="form-control">
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Mobile Number <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" value="{{$value->phone}}"  placeholder="Enter Mobile Number" name="phone" id="phone" class="form-control">
                                    
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Email <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="email" value="{{$value->email}}" name="email" id="email" placeholder="Enter email" id="exampleInputEmail1" class="form-control">
                                    
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Addresss line 1 <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <textarea class="form-control" name="address_one" id="address_one" placeholder="Enter Address">{{$value->address_one}}</textarea> 
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Addresss line 2 <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                 <textarea name="address_two" id="address_two" id="address_two" class="form-control" placeholder="Enter Address">{{$value->address_two}}</textarea>
                                 
                                 </div>
                                 </div>
                            </div>
                            @endforeach
                        </div><br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                                    <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger">
                            </div>
                        </div> 
                        <br>
                    </form>
                    </div>
                    
            </div>
        </div>
        </div>
@stop