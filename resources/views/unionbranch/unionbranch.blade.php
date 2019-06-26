@extends('layouts.layout')
@section('content')
@if(session('message'))
<div class="alert alert-success" id="id">
{{session('message')}}
</div>
@endif
@if(session('errors'))

@endif
<div class="row">
        	<div class="customer-header">
        	<div class="col-md-8">
        	<h5><strong>Union Branch Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('add-unionbranch')}}">Add New Union branch</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <table id="home-table2" class="table datatable">
                    <thead>
                        <tr>
                           	<td>Union Branch Name</td>
                            <td>Head</td>
                            <td> Action</td>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach($data['union_view'] as $value)
                        <tr>
                        <?php
                        $parameter = ['id'=>$value->id];
                        $parameter = Crypt::encrypt($parameter);  
                        ?>
                            <td>{{$value->union_branch}}</td>
                            <td>{{$value->is_head}}</td>
                            <td><a href="{{url('unionbranch-view/').'/'.$parameter}}">View </a>|<a href="{{url('unionbranch-edit/').'/'.$parameter}}">Edit</a>|<a href="{{url('unionbranch-delete/').'/'.$value->id}}">Delete</a></td>
                         </tr>
                         @endforeach
                    </tbody>   
                </table>
            </div>
        </div>
        </div>
@stop