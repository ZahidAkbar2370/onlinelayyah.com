<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<link href="{{asset('admin_backend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin_backend/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('admin_backend/css/styles.css')}}" rel="stylesheet">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin_backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('admin_backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"/>

</head>
<body>


<!-- Header -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button>
<a class="navbar-brand" href="#"><span>Admin Panel Online Layyah</span></a>                
</div>

</div>
</nav>



<!-- Slider -->

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<div class="profile-sidebar">
<div class="profile-userpic">
<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
</div>
<div class="profile-usertitle">

<div class="profile-usertitle-name">{{Auth::user()->name ?? "Zahid"}}</div>
<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
</div>
<div class="clear"></div>
</div>
<div class="divider"></div>

<ul class="nav menu">
<li class="active"><a href="#"><i class="fa fa-tachometer-alt" aria-hidden="true"></i>&nbsp; Dashboard</a></li>           
<li class="product"><a data-toggle="collapse" href="#sub-item-1">
<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; 
Admin <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
</a>
<ul class="children collapse" id="sub-item-1">
<li><a class="" href="#">
<span class="fa fa-arrow-right">&nbsp;</span> Add Admin
</a></li>
<li><a class="" href="#">
<span class="fa fa-arrow-right">&nbsp;</span> View Admins
</a></li>
</ul>
</li>

        <li class="productads"><a data-toggle="collapse" href="#sub-item-2">
        <i class="fa fa-passport" aria-hidden="true"></i>&nbsp; Product Ads<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-2">
        <li><a class="" href="{{route('admin-productads-create')}}">
        <span class="fa fa-arrow-right">&nbsp;</span> Add Advertisement
        </a></li>
        <li><a class="" href="{{route('admin-productads-view')}}">
        <span class="fa fa-arrow-right">&nbsp;</span> View Advertisements
        </a></li>
        </ul>
        </li>

                <li class="shopads"><a data-toggle="collapse" href="#sub-item-3">
                <i class="fa fa-passport" aria-hidden="true"></i>&nbsp; Shop Ads<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                <li><a class="" href="{{route('admin-shopads-create')}}">
                <span class="fa fa-arrow-right">&nbsp;</span> Add Advertisement
                </a></li>
                <li><a class="" href="{{route('admin-shopads-view')}}">
                <span class="fa fa-arrow-right">&nbsp;</span> View Advertisements
                </a></li>
                </ul>
                </li>

        <li class="seller"><a data-toggle="collapse" href="#sub-item-4">
        <i class="fa fa-passport" aria-hidden="true"></i>&nbsp; Seller<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-4">
        <li><a class="" href="{{route('admin-seller-view')}}">
        <span class="fa fa-arrow-right">&nbsp;</span>View Seller
        </a></li>
        <li>
        <a class="" href="{{route('admin-seller-view')}}">
        <span class="fa fa-arrow-right">&nbsp;</span>Change Status
        </a>
        </li>
        </ul>
        </li>

        <li class="buyer"><a data-toggle="collapse" href="#sub-item-5">
        <i class="fa fa-passport" aria-hidden="true"></i>&nbsp; Buyer<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-5">
        <li><a class="" href="{{route('admin-buyer-view')}}">
        <span class="fa fa-arrow-right">&nbsp;</span>View Buyer
        </a></li>
        <li><a class="" href="{{route('admin-buyer-view')}}">
        <span class="fa fa-arrow-right">&nbsp;</span>Change Status
        </a></li>
        </ul>
        </li>

<hr>
<form action="{{URL::to('logout')}}" method="post">
@csrf
<button class="btn btn-primary btn-block"><li><em class="fa fa-power-off">&nbsp;</em> Logout</li></button>
</form>
</ul>
</div>
@yield('content')
<div class="col-sm-12">
</div>
<script src="{{asset('admin_backend/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('admin_backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_backend/js/chart.min.js')}}"></script>
<script src="{{asset('admin_backend/js/chart-data.js')}}"></script>
<script src="{{asset('admin_backend/js/easypiechart.js')}}"></script>
<script src="{{asset('admin_backend/js/easypiechart-data.js')}}"></script>
<script src="{{asset('admin_backend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('admin_backend/js/custom.js')}}"></script>
<script src="{{asset('admin_backend/js/all.js')}}"></script>
<!-- Sweat Alerts-->
<script src="{{asset('admin_backend/js/SweatAlert.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin_backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

@yield('extra-js')
</body>
</html>