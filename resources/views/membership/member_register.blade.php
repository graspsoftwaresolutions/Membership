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
<style>
    #errmsg
    {
    color: red;
    }
  </style>
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong> Member Registration Form</strong></h5>
        	</div>
	       
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" id="membership" action="{{url('membership_save')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Member Title <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <select tabindex="1" name="member_title" id="member_title" class="form-control">
                                    @foreach($data['title_view'] as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->person_title}}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('member_title'))
                                    <span class="text-danger">{{$errors->first('member_title')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Member Number <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" tabindex="2" placeholder="Enter Member Number" name="member_number" id="member_number" class="form-control">
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
                                 <label for="Name" class="control-label col-md-4">Member Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" tabindex="3" placeholder="Enter Member Name" name="name" id="name" class="form-control">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Gender <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="radio" tabindex="4" name="gender" id="gender" value="male">Male
                                    <input type="radio" name="gender" id="gender" value="female">Female
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
                                 <label for="Name" class="control-label col-md-4">Mobile Number<span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" tabindex="5" placeholder="Enter Mobile Number" name="phone" id="phone" class="form-control">
                                    <span id="errmsg"></span>
                                    @if($errors->has('phone'))  
                                    <span class="text-danger" >{{$errors->first('phone')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Email <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="email" tabindex="6" name="email" id="email" placeholder="Enter email" id="exampleInputEmail1" class="form-control">
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
                                 <label for="Name" class="control-label col-md-4">Designation <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <select tabindex="7" name="designation" id="designation" class="form-control">
                                    @foreach($data['designation_view'] as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->designation_name}}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('designation'))
                                    <span class="text-danger">{{$errors->first('designation')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Race" class="control-label col-md-4">Race <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <select tabindex="8" name="race" id="race" class="form-control">
                                    @foreach($data['race_view'] as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->race_name}}</option>
                                    @endforeach
                                    </select>
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
                                 <label for="Name" class="control-label col-md-4">Country Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                 <select tabindex="9" class="form-control" name="country_id" id="country">
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
                                 <label for="exampleInputEmail1" class="control-label col-md-4">State Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                 <select tabindex="10" name="state_id" id="state" class="form-control">
                                        
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
                                 <label for="Name" class="control-label col-md-4">City Name <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                 <select tabindex="11" class="form-control" name="city_id" id="city">
                                        
                                    </select>
                                    @if($errors->has('city_id'))
                                    <span class="text-danger">{{$errors->first('city_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Addresss line 1 <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <textarea tabindex="12" class="form-control" name="address_one" id="address_one" placeholder="Enter Address"></textarea>
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
                                 <textarea tabindex="13" name="address_two" id="address_two"  class="form-control" placeholder="Enter Address"></textarea>
                                
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">Addresss line 3</label>
                                 <div class="col-md-7"> 
                                 <textarea tabindex="14" name="address_three" id="address_three"  class="form-control" placeholder="Enter Address"></textarea>
                                 
                                 </div>
                                 </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Date of Birth <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input tabindex="15" type="date" placeholder="Enter Old IC Number" name="dob" id="dob" class="form-control">
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
                                    <input type="date" tabindex="16" name="doj" id="doj" placeholder="DOJ" id="doj" class="form-control">
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
                                    <input type="text" tabindex="17" placeholder="Enter Old IC Number" name="old_ic" id="phonold_ic" class="form-control">
                                   
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="exampleInputEmail1" class="control-label col-md-4">New Ic Number<span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                    <input type="text" tabindex="18" name="new_ic" id="new_ic" placeholder="Enter New IC number" id="exampleInputEmail1" class="form-control">
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
                                 <label for="Name" class="control-label col-md-4">Company <span style="color:red">*<span></label>
                                 <div class="col-md-7"> 
                                   
                                        <select name="branch_id" tabindex="19" id="branch" class="form-control">
                                        @foreach($data['branch_view'] as $key=>$value) 
                                        <option value="{{$value->id}}">{{$value->branch_name}}</option>
                                        @endforeach
                                        </select>
                                        @if($errors->has('branch_id'))
                                    <span class="text-danger">{{$errors->first('branch_id')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" tabindex="20" name="submit" value="Register" class="btn btn-success">
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
    $("#phone").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
    if($('#membership').lenght >0)
    {
        $('#membership').validate({
            rules: {
                member_title: {
                    required: true,
                    maxlength: 5
                },
                member_number: {
                    required: true,
                    maxlength: 20,
                },
                name: {
                    required: true,
                    maxlength:20,
                },
                gender: {
                    required: true,
                },
                phone: {
                    required: true,
                    maxlength: 15,
                    minlength: 10,
                    digits: true,
                },
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
                designation: {
                    required: true,
                },
                race: {
                    required: true,
                },
                country: {
                    required:true,
                },
                state: {
                    required:true,
                },
                city: {
                    required:true,
                },
                address_one: {
                    required:true,
                },
                dob: {
                    required:true,
                },
                new_ic: {
                    required:true,
                    minlength: 3,
                    maxlength: 20,
                },
                company: {
                    required:true,
                },
            },
            messages: {
                member_title: {
                    required: "Please Enter Your Title ",
                    maxlength: "maxlength be 5 characters long",
                },
                member_number: {
                    required: "Please Enter Member NUmber",
                    maxlength: "maxlength be 20 characters long",
                },
                name: {
                    required: "Please Enter Your Name",
                    maxlength: "maxlength be 20 characters long",
                },
                gender: {
                    required: "Please choose Gender",
                },
                phone: {
                    required: true,
                    maxlength: "The contact number should be 15 digits",
                    minlength: "The contact number should be 10 digits",
                    digits: "Please enter only numbers",
                },
                email: {
                    required: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                    email: "Please enter valid email",
                    },
                designation: {
                    required: "Please choose  your Designation",
                },
                race: {
                    required: "Please Choose your Race ",
                },
                country: {
                    required:"Please choose  your Country",
                },
                state: {
                    required:"Please choose  your State",
                },
                city: {
                    required:"Please choose  your city",
                },
                address_one: {
                    required:"Please Enter your Address",
                },
                dob: {
                    required:"Please choose DOB",
                },
                new_ic: {
                    required:"Please Enter New Ic Number",
                    minlength: "Minimum length should be 3 chareters",
                    maxlength: "MAximum length  be 20 chareters",
                },
                company: {
                    required:"Please Choose Company Name",
                },      
           },
        })
    }
    
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
//    $("#country").trigger('change');
//    $("#state").trigger('change');
//    $("#city").trigger('change');
    });
</script>
@stop