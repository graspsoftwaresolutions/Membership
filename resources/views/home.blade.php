@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
               
=======
                

>>>>>>> 5bb8821c49885cb957f81d378956004314e763b2
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!     
                            <a href="{{'membership'}}"> Click Here :Membership</a>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
