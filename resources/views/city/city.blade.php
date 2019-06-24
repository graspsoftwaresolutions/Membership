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
        	<h5><strong>City Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-city')}}">Add New City</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <table id="home-table2" class="table">
                    <thead>
                        <tr>
                           	<td>City Name</td>
                            <td>Status</td>
                            <td>Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                        <?php
                        $parameter =[
                            'id' =>$value->id,
                        ];
                         $parameter = Crypt::encrypt($parameter);      
                        ?>
                            <td>{{$value->city_name}}</td>
                            <td>Active</td>
                            <td><a href="{{url('city-view/').'/'.$parameter}}">View </a>|<a href="{{url('city-edit/').'/'.$parameter}}">Edit</a>|<a href="{{url('city-delete/').'/'.$value->id}}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>   
                </table>
            </div>
        </div>
        </div>
@stop