@extends('layouts.landing')
@section('body')
<div class="toggle-content">
    <div class="panel-setting">
        <div class="row">
            <div class="col-md-2 column">
                
            </div>
            <div class="col-md-10 column">
                <div class="quick-stats">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$56</i>
                                    <span data-peity='{ "fill": ["#faa5ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>5/7</span>
                                </p>
                                <span>Today Earnings</span>
                            </div>
                        </div>
                       <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$786</i>
                                    <span data-peity='{ "fill": ["#ffb8b8", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>3/7</span>
                                </p>
                                <span>Refferel</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$345</i>
                                    <span data-peity='{ "fill": ["#ace9ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>4/7</span>
                                </p>
                                <span>Commision</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$223</i>
                                    <span data-peity='{ "fill": ["#b8b8ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>6/7</span>
                                </p>
                                <span>New Sales</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="total-sales-info">
                                <span>Total sales made of all time</span>
                                <h3>$1,225</h3>
                                <ul>
                                    <li>
                                        <span>Target</span>
                                        <h5>$2,251</h5>
                                    </li>
                                    <li>
                                        <span>Today</span>
                                        <h5>$107</h5>
                                    </li>
                                    <li>
                                        <span>All time</span>
                                        <h5>$3,463</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="fa fa-close"></span>
</div><!-- Toggle Content -->
<div class="top-bar">
    <div class="logo">
        <a href="index.html" title=""><i class="fa fa-deviantart"></i> Members Ship Login</a>
         <div class="menu-options"><span class="menu-action"><i></i></span></div>
    </div>
    <form class="search-form">
        <input type="text" placeholder="Search Here..." />
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <ul>
        <!-- <li><a title=""><i class="fa fa-plus"></i>New Orders</a></li> 
        <li><a title=""><i class="fa fa-cloud-upload"></i>Upload Files</a></li> -->
    </ul>
</div><!-- Top Bar -->
<header class="side-header light-skin opened-menu">
    <div class="admin-details">
        <!-- <span><img src="http://placehold.it/896x932" alt="" /></span>
        <h3>John doe</h3>
        <i>Web CODER</i>
        <h5 class="admin-status online">Online</h5> -->
    </div>
    <div>
        <div class="side-menus">
            <span>MENU</span>
            <nav>
                <ul>
                    <li><a href="{{url('home')}}" title=""><i class="fa fa-dashboard"></i> <span>Dashboard</a></li>
                    <li><a href="{{url('company')}}" title=""><i class="fa fa-user"></i> <span>Company Details</a></li>
                    <li><a href="{{url('country')}}" title=""><i class="fa fa-user"></i> <span>Country Details</a></li>
                    <li><a href="{{url('state')}}" title=""><i class="fa fa-user"></i> <span>State Details</a></li>
                    <li><a href="{{url('city')}}" title=""><i class="fa fa-user"></i> <span>City Details</a></li>
                    <li><a href="{{url('membership_register')}}" title=""><i class="fa fa-user"></i> <span>Membership Register</a></li>
                    <!-- <li class="menu-item-has-children">
                    <a href="" title=""><i class="fa fa-file"></i> <span>Stock Details</a> 
                        <ul>
                            <li><a href="{{url('stock')}}" title=""><i class="fa fa-stack-exchange"></i> <span>Stock</a></li>
                            <li><a href="{{url('stock-inward')}}" title=""><i class="fa fa-plus"></i> <span>Stock Inward</span></a></li>
                             <li><a href="{{url('stock-outward')}}" title=""><i class="fa fa-plus"></i> <span>Stock Outward</span></a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="{{url('ticket_reports')}}" title=""><i class="fa fa-key"></i> <span>Reset Password</a></li> -->
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>  
                </ul>
            </nav>
        </div>
    </div><!-- Menu Scroll -->
</header>
<div class="main-content">
	@yield('content')
</div>
<!-- Main Content -->
<!-- <footer>
    <div class="container">
        <p>© 2015 Webinane Technologies Ltd.  Made with <i class="fa fa-heart"></i></p>
        <ul>
            <li><a href="#/" title="">Dashboard</a></li>
            <li><a href="#/" title="">Widgets</a></li>
            <li><a href="#/" title="">About us</a></li>
            <li><a href="#/" title="">Contact us</a></li>
        </ul>
    </div>
</footer> -->
@stop