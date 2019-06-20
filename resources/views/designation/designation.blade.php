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
        	<h5><strong>Designation Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-designation')}}">Add New Designation</a>
	        </div>
	    	</div>
        	<div class="widget">
        	
        	<div class="activity-sec">
                    <table id="home-table2" class="table">
                    <thead>
                        <tr>
                           	<td>Designation Name</td>
                            <td>Status</td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data['designation_view'] as $key=>$value)
                        <tr>
                            <td>{{$value->designation_name}}</td>
                            <td>Active</td>
                            <td><a href="{{url('designation-view/').'/'.$value->id}}">View </a>|<a href="{{url('designation-edit/').'/'.$value->id}}">Edit</a>|<a href="{{url('designation-delete/').'/'.$value->id}}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>   
                </table>
           
        </div>
        </div>
@stop