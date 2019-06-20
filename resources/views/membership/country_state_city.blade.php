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
        	<h5><strong> Countries List</strong></h5>
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
                                 <label for="Name" class="control-label col-md-4">Country</label>
                                 <div class="col-md-7"> 
                                
                                    <select id="country" name="country_id" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($data['country_view'] as $key=>$value)
                                        <option value="{{$value->id}}">{{$value->country_name}}</option>
                                    @endforeach
                                    </select>
                                 </div>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">State</label>
                                 <div class="col-md-7"> 
                                 <select name="state_id" id="state" class="form-control">
                                        
                                    </select>
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" >
                                 <label for="Name" class="control-label col-md-4">City</label>
                                 <div class="col-md-7"> 
                                 <select name="city" id="city" class="form-control"> 
                                    </select>
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
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
       var stateId = $(this).val();
       if(stateId!='' && stateId!='undefined' && !empty(stateId))
       {
           $.ajax({
                url: "{{url('get-state-list')}}?state_id="+stateId,
                type: "GET",
                success:function(res){
                    if(res)
                    {
                        $('#city').empty();
                        $.each(res,function(key,entry){
                            $('#city').append($('<option></option>').attr('value', entry.id).text(entry.city));
                        });
                    }
                    else{
                        $("#city").empty();
                    }
                }
           });
       }
       else
       {
        $("#city").empty();  
       }
   });
});
</script>
@stop
