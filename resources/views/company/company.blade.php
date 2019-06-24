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
        	<h5><strong>Company Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-company')}}">Add New Company</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <table id="home-table2" class="table">
                    <thead>
                        <tr>
                           	<td>Company Name</td>
                            <td>Owner Name</td>
                            <td> Mobile No</td>
                            <td> Email </td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data['company'] as $key=>$value)
                        <tr>
                        <?php
                        $parameter =[
                            'id' =>$value->id,
                        ];
                         $parameter = Crypt::encrypt($parameter);      
                         ?>
                        <td>{{$value->company_name}}</td>
                           <td> {{$value->owner_name}}</td>
                           <td> {{$value->phone}}</td>
                           <td> {{$value->email}}</td>
                           <td><a href="{{url('company-view/').'/'.$parameter}}">View </a>|<a href="{{url('company-edit/').'/'.$parameter}}">Edit</a>|<a href="{{url('company-delete/').'/'.$value->id}}">Delete</a></td>
                         </tr>
                       @endforeach 
                    </tbody>   
                </table>
            </div>
        </div>
        </div>
@stop