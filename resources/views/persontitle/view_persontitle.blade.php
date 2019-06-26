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
        	<h5><strong> View Person title Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('persontitle')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                    <div class="row">
                        <form method="post" action="{{url('persontitle_save')}}">
                        @foreach($data['title_view'] as $value)
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Title Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" disabled placeholder="Enter Title Name" value="{{$value->person_title}}" name="person_title" id="person_title" class="form-control">
                                    @if($errors->has('person_title'))
                                    <span class="text-danger">{{$errors->first('person_title')}}</span>
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