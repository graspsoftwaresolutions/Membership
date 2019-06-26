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
        	<h5><strong> Add Union Branch Details</strong></h5>
        	</div>
	        <div class="col-md-4">
	        	<a class="cust" href="{{url('unionbranch')}}">Back</a>
	        </div>
	    	</div>
        	<div class="widget">
        	<div class="activity-sec">
                 
                    <div class="row">
                        <form method="post" action="{{url('unionbranch_update')}}">
                        @foreach($data['union_branch'] as $key=>$value)
                        @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <div class="row">
                            <div class="col-md-12">
                                
                                 <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Branch Name</label>
                                 <div class="col-md-7"> 
                                    <input type="text" placeholder="Enter Branch Name" name="branch_name" value="{{$value->union_branch}}" id="branch_name" class="form-control">
                                    @if($errors->has('branch_name'))
                                    <span class="text-danger">{{$errors->first('branch_name')}}</span>
                                    @endif
                                 </div>
                                 </div>
                                 <div class="form-group">
                                 <label for="Name" class="control-label col-md-4">Head</label>
                                 <div class="col-md-7"> 
                                    <input type="checkbox" name="is_head" id="is_head" value="1" {{ $value->is_head == '1' ? 'checked' : '' }}>
                                 </div>
                                 </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
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
@stop