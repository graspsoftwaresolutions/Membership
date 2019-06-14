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
        	<h5><strong>State Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-state')}}">Add New State</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <table id="home-table2" class="table datatable">
                    <thead>
                        <tr>
                           	<td>Country Name</td>
                            <td>State Name</td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                            <td>{{$value->country_name}}</td>
                            <td>{{$value->state_name}}</td>
                            <td><a href="{{url('state-view/').'/'.$value->id}}">View </a>|<a href="{{url('state-edit/').'/'.$value->id}}">Edit</a>|<a href="{{url('state-delete/').'/'.$value->id}}">Delete</a></td>
                         </tr>
                         @endforeach
                    </tbody>   
                </table>
            </div>
        </div>
        </div>
@stop