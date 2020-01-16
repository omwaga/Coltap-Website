<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Dashboard | The Coltap</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/js/plugins/slick/slick.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/js/plugins/slick/slick-theme.min.css')}}" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="{{ asset('assets/css/font-awesome.css')}}" />
        <link rel="stylesheet" id="css-ionicons" href="{{ asset('assets/css/ionicons.css')}}" />
        <link rel="stylesheet" id="css-bootstrap" href="{{ asset('assets/css/bootstrap.css')}}" />
        <link rel="stylesheet" id="css-app" href="{{ asset('assets/css/app.css')}}" />
        <link rel="stylesheet" id="css-app-custom" href="{{ asset('assets/css/app-custom.css')}}" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="index.html"><img class="img-responsive" src="assets/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Menu</li>

                                <li class="nav-item active">
                                    <a href="/dashboard"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('admin-aboutus')}}"><i class="ion-ios-monitor-outline"></i> About Us</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Components</li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> Services</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="/services/create">New Service</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin-services')}}">Manage Services</a>
                                        </li>
                                        <li>
                                            <a href="{{route('manageservices')}}">Active Services</a>
                                        </li>
                                        <li>
                                            <a href="{{route('inactiveservices')}}">Inactive Services</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> Blog</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="/blogcategories/create">Blog Categories</a>
                                        </li>
                                        <li>
                                            <a href="/blogposts/create">Blog Articles</a>
                                        </li>
                                        <li>
                                            <a href="{{route('allarchives')}}">Blog Archives</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> Customers</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="/customers">All Customers</a>
                                        </li>
                                        <li>
                                            <a href="/customers/create">New Customer</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">The Coltap &copy;</p>
                            <a href="# target="_blank" rel="nofollow">Inspired by Best</a>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
					<span class="sr-only">Toggle drawer</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <span class="navbar-page-title">
					
					Dashboard
				</span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-left app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm">{{auth()->user()->name}} <span class="caret"></span></span>
                                            <img class="img-avatar img-avatar-48" src="{{ asset('assets/img/avatars/avatar3.jpg')}}" alt="User profile pic" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">
                                                Pages
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-right -->
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->

                @yield('content')

                 <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{ asset('assets/js/app.js')}}"></script>
        <script src="{{ asset('assets/js/app-custom.js')}}"></script>

        <!-- Page Plugins -->
        <script src="{{ asset('assets/js/plugins/slick/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('assets/js/pages/index.js')}}"></script>
        <script>
            $(function()
            {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>

    </body>

</html>
