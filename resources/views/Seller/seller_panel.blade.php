<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('theme/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">Online Layyah</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-customers')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Customers</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-brands')}}">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Brands</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-categories')}}">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Categories</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-products')}}">
                            <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Prodcuts</span>
                         </a>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-expenses')}}">
                            <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Expenses</span>
                         </a>
                    </li>

                     <li class="sidebar-header">
                        Stock
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-suppliers')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Suppliers</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('seller-view-purchase-stocks')}}">
                            <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Purchase Stocks</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Sale Stock</span>
                         </a>
                    </li>

                    <li class="sidebar-header">
                        Order
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="trending-up"></i> <span class="align-middle">Sale History</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Orders</span>
                         </a>
                    </li>

                    <li class="sidebar-header">
                        General
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Email</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Complain</span>
                         </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li> -->

                </ul>
            </div>
        </nav>

        <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.</div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="app/images/profileImage/zahid.jpg" class="avatar img-fluid rounded me-1" alt="Zahid Jakhar" /> <span class="text-dark">{{Auth::user()->name}}</span>
              </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{url('seller-personal-profile')}}"><i class="align-middle me-1" data-feather="user"></i>Profiles</a>
                                <a class="dropdown-item" href="{{url('seller-change-password')}}"><i class="align-middle me-1" data-feather="lock"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a><form action="{{route('logout')}}" method="post">@csrf <button type="submit" style="background: none;border: none"><i class="align-middle me-1" data-feather="power"></i>Log out</button></form></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            

<main class="content" style="padding: none !important">
<div class="container-fluid ">

    @yield("content")


    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>Online Layyah</strong></a> &copy;
                    </p>
                </div>
                
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Support</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Help Center</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->
            <!-- End Footer -->
</div>
</main>
</div>

<script rel="stylesheet" src="{{asset('theme/js/app.js')}}"></script>
<script rel="stylesheet" src="{{asset('theme/js/search.js')}}"></script>


</body>

</html>