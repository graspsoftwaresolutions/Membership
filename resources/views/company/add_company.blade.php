@extends('layouts.layout')
@section('content')
@if(session('message'))
<div class="alert alert-success" id="id">
{{session('message')}}
</div>
@endif
<<<<<<< HEAD
@if(session('errors'))

@endif
=======

>>>>>>> f02c6a33624fd394da78e098af44fdf7ecf18127
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong> Add Company Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('company')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('company_save')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Company Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Company Name" name="company_name" id="company_name" class="form-control">
                                    @if($errors->has('company_name'))
                                    <span class="text-danger">{{$errors->first('company_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Owner Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Owner Name" name="owner_name" id="owner_name" class="form-control">
                                    @if($errors->has('owner_name'))
                                    <span class="text-danger">{{$errors->first('owner_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Mobile Number</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Mobile Number" name="phone" id="phone" class="form-control">
                                    @if($errors->has('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Email</label>
                                 <div class="col-md-7"> 
                                    <input type="email" name="email" id="email" placeholder="Enter email" id="exampleInputEmail1" class="form-control">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Addresss line 1</label>
                                 <div class="col-md-7"> 
                                    <textarea class="form-control" name="address_one" id="address_one" placeholder="Enter Address"></textarea>
                                    @if($errors->has('address_one'))
                                    <span class="text-danger">{{$errors->first('address_one')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Addresss line 2</label>
                                 <div class="col-md-7"> 
                                 <textarea name="address_two" id="address_two" id="address_two" class="form-control" placeholder="Enter Address"></textarea>
                                 @if($errors->has('company_name'))
                                    <span class="text-danger">{{$errors->first('address_two')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="submit" class="btn btn-success">
                                    <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger">
                            </div>
                        </div> 
                    </form>
                    </div>
            </div>
        </div>
        </div>
@stop