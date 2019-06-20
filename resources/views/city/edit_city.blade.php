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
        	<h5><strong> View City Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('city')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('city_update')}}">
                       
                        @foreach($data['city_view'] as $value)
                        @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Country Name</label>
                                 <div class="col-md-7">
                                    <input type="textbox" disabled="true" class="form-control" name="country_name" value="{{$value->country_name}}">
                                 </div>
                                 </div>
                                 <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">State Name</label>
                                 <div class="col-md-7"> 

                                 <select name="state_id" id="state" class="form-control" disabled="true">
                                 @foreach($data['city_view'] as $value)
                                        <option value="{{$value->state_id}}">{{$value->state_name}}</option>
                                        @endforeach
                                        </select>
                                 </div>
                                 </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">City Name</label>
                                 <div class="col-md-7"> 
                                   <input type="textbox" class="form-control" name="city_name" value="{{$value->city_name}}">
                                 </div>
                                 </div>
                            </div>
                        </div>
                        @endforeach
                        <br> 
                        <br>
                        <div class="row">
                            <div class="wrapper">            
                                    <input type="submit" name="submit" value="Update" class="btn btn-success">
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
           url:"{{url('get-state-order-list')}}?country_id="+countryID,
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
    }      
   });
});
</script>
@stop