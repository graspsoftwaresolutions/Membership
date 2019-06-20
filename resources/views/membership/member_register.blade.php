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
<script src="http://www.codermen.com/js/jquery.js"></script>
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong> Member Registration Form</strong></h5>
        	</div>
	       
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('membership_save')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Member Title</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Member Title" name="member_title" id="member_title" class="form-control">
                                    @if($errors->has('member_title'))
                                    <span class="text-danger">{{$errors->first('member_title')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Member Number</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Member Number" name="member_number" id="member_number" class="form-control">
                                    @if($errors->has('member_number'))
                                    <span class="text-danger">{{$errors->first('member_number')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Member Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Member Name" name="name" id="name" class="form-control">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Gender</label>
                                 <div class="col-md-7"> 
                                    <input type="radio" name="gender" id="gender">Male
                                    <input type="radio" name="gender" id="gender">Female
                                    @if($errors->has('gender'))
                                    <span class="text-danger">{{$errors->first('gender')}}</span>
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
                                 <label for="Name" class="control-label col-md-4">Designation</label>
                                 <div class="col-md-7"> 
                                    <select name="designation" class="form-control">>
                                    <option value="xxx">xxx</option>
                                    <option value="xxx">xxx</option>
                                    <option value="xxx">xxx</option>
                                    </select>
                                    @if($errors->has('designation'))
                                    <span class="text-danger">{{$errors->first('designation')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Race" class="control-label col-md-4">Race</label>
                                 <div class="col-md-7"> 
                                    <input type="text" name="race" id="race" placeholder="Enter race Number" class="form-control">
                                    @if($errors->has('race'))
                                    <span class="text-danger">{{$errors->first('race')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Country Name</label>
                                 <div class="col-md-7"> 
                                 <select class="form-control" name="country_id" id="country">
                                        @foreach($data['country_view'] as $value)
                                        <option value="{{$value->id}}">{{$value->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('country_id'))
                                    <span class="text-danger">{{$errors->first('country_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">State Name</label>
                                 <div class="col-md-7"> 
                                 <select name="state_id" id="state" class="form-control">
                                        
                                </select>
                                @if($errors->has('state_id'))
                                    <span class="text-danger">{{$errors->first('state_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">City Name</label>
                                 <div class="col-md-7"> 
                                 <select class="form-control" name="city_id" id="city">
                                        
                                    </select>
                                    @if($errors->has('city_id'))
                                    <span class="text-danger">{{$errors->first('city_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
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
                        </div><br>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Addresss line 2</label>
                                 <div class="col-md-7"> 
                                 <textarea name="address_two" id="address_two"  class="form-control" placeholder="Enter Address"></textarea>
                                
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Addresss line 3</label>
                                 <div class="col-md-7"> 
                                 <textarea name="address_three" id="address_three"  class="form-control" placeholder="Enter Address"></textarea>
                                 
                                 </div>
                                 </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Date of Birth</label>
                                 <div class="col-md-7"> 
                                    <input type="date" placeholder="Enter Old IC Number" name="dob" id="dob" class="form-control">
                                    @if($errors->has('dob'))
                                    <span class="text-danger">{{$errors->first('dob')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Date of Joinig</label>
                                 <div class="col-md-7"> 
                                    <input type="date" name="doj" id="doj" placeholder="DOJ" id="doj" class="form-control">
                                    @if($errors->has('doj'))
                                    <span class="text-danger">{{$errors->first('doj')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Old IC Number</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Old IC Number" name="old_ic" id="phonold_ic" class="form-control">
                                   
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">New Ic Number</label>
                                 <div class="col-md-7"> 
                                    <input type="text" name="new_ic" id="new_ic" placeholder="Enter email" id="exampleInputEmail1" class="form-control">
                                    @if($errors->has('new_ic'))
                                    <span class="text-danger">{{$errors->first('new_ic')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Company</label>
                                 <div class="col-md-7"> 
                                   
                                        <select name="company_id" class="form-control">
                                        @foreach($data['company_view'] as $key=>$value) 
                                        <option value="{{$value->id}}">{{$value->company_name}}</option>
                                        @endforeach
                                        </select>
                                        @if($errors->has('company_id'))
                                    <span class="text-danger">{{$errors->first('company_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                                    <input type="submit" name="Cancel" value="Cancel" class="btn btn-danger">
                            </div>
                        </div> 
                    </form>
                    </div>
                    
            </div>
        </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $.each(res,function(key,entry){
                    $("#state").append($('<option></option>').attr('value', entry.id).text(entry.state_name));
                });
            }else{
               $("#state").empty();
            }
            //console.log(res);
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
   $('#state').change(function(){
       var StateId = $(this).val();
       if(StateId!='' && StateId!='undefined')
       {
         $.ajax({
            type: "GET",
            url : "{{'get-cities-list'}}?State_id="+StateId,
            success:function(res){
                if(res)
                {
                    $('#city').empty();
                    $.each(res,function(key,entry){
                        $('#city').append($('<option></option>').attr('value',entry.id).text(entry.city_name));
                    });
                }else{
                    $('#city').empty();
                }
                //console.log(res);
            }
         });
       }else{
           $('#city').empty();
       }
   });
    });
</script>
@stop