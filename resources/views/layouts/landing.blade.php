<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Membership</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="{{URL::asset('public/css/bootstrap.min.css')}}">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta name="_token" content="{{csrf_token()}}" />
    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{URL::asset('public/css/icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

</head>
<body>
    @yield('body')
        <!-- Vendor: Javascripts -->
     
    <script src="{{URL::asset('public/js/jquery-2.1.3.js')}}"></script> 
    <script src="{{URL::asset('public/js/bootstrap.min.js')}}"></script>
    <!-- Our Website Javascripts -->
    <script src="{{URL::asset('public/js/application.js')}}"></script>
    <script src="{{URL::asset('public/js/main.js')}}"></script>
    <script src="{{URL::asset('public/js/common.js')}}"></script>   
     <script src="{{URL::asset('public/js/crud.js')}}"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
</body>
</html>