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
        	<h5><strong> Add Relation Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('relation')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" autocomplete="off" action="{{url('relation_save')}}">
                        @foreach($data['relation_view'] as $key=>$value)
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Relation Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" disabled placeholder="Enter Relation Name" value="{{$value->relation_name}}" name="relation_name" id="relation_name" class="form-control">
                                    @if($errors->has('relation_name'))
                                    <span class="text-danger">{{$errors->first('relation_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        
                    </form>
                    </div>
                    
            </div>
        </div>
        </div>
@stop