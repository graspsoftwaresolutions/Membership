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
        	<h5><strong>Membership Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('membership_register')}}">Add New </a>
	        </div>
	    	</div>
        	<div class="widget">
        	
        	<div class="activity-sec">
                    <table id="home-table2" class="table">
                    <thead>
                        <tr>
                           	<td>Member Name</td>
                            <td>Member Number</td>
                            <td>Member Type</td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data['member_view'] as $key=>$value)
                         <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->member_number}}</td>
                            <td>{{$value->user_tname}}</td>
                            <td><a href="{{url('membership-view/').'/'.$value->id}}">View </a>|<a href="{{url('membership-edit/').'/'.$value->id}}">Edit</a>|<a href="{{url('membership-delete/').'/'.$value->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>   
                </table>
           
        </div>
        </div>
@stop