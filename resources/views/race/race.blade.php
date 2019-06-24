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
        	<h5><strong>Race Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-race')}}">Add New Race</a>
	        </div>
	    	</div>
        	<div class="widget">
        	
        	<div class="activity-sec">
                    <table id="home-table2" class="table">
                    <thead>
                        <tr>
                           	<td>Race Name</td>
                            <td>Status</td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data['race_view'] as $key=>$value)
                    
                      <tr>
                      <?php
                        $parameter =[
                            'id' =>$value->id,
                        ];
                         $parameter = Crypt::encrypt($parameter);  
                         ?>
                            <td>{{$value->race_name}}</td>
                            <td>Active</td> 
                            <td><a href="{{url('race-view/').'/'.$parameter}}">View </a>|<a href="{{url('race-edit/').'/'.$parameter}}">Edit</a>|<a href="{{url('race-delete/').'/'.$value->id}}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>   
                </table>
           
        </div>
        </div>
@stop