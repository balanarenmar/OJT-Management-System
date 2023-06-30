<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" href={{ asset('able/images/favicon.ico') }} type="image/x-icon">

    <link rel="stylesheet" href={{ asset('able/css/able.css') }}>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>
<body class="background-img-5">

    <!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>

    <!-- [ Pre-loader ] End -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{ asset('able/images/user/avatar-2.jpg') }}">
						<div class="user-details">
							<div id="more-details">Admin <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="{{ url('/user-profile') }}" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="{{ url('/auth-signin') }}" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
						<ul class="pcoded-submenu">
							<li><a href="index.html">Default</a></li>
							<li><a href="dashboard-sale.html">Sales</a></li>
							<li><a href="dashboard-crm.html">CRM</a></li>
							<li><a href="dashboard-analytics.html">Analytics</a></li>
							<li><a href="dashboard-project.html">Project</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!">Vertical</a>
								<ul class="pcoded-submenu">
									<li><a href="layout-static.html" target="_blank">Static</a></li>
									<li><a href="layout-fixed.html" target="_blank">Fixed</a></li>
									<li><a href="layout-menu-fixed.html" target="_blank">Navbar fixed</a></li>
									<li><a href="layout-mini-menu.html" target="_blank">Collapse menu</a></li>
									<li><a href="layout-rtl.html" target="_blank">Vertical RTL</a></li>
								</ul>
							</li>
							<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
							<li><a href="layout-horizontal-2.html" target="_blank">Horizontal v2</a></li>
							<li><a href="layout-horizontal-rtl.html" target="_blank">Horizontal RTL</a></li>
							<li><a href="layout-box.html" target="_blank">Box layout</a></li>
							<li><a href="layout-light.html" target="_blank">Navbar dark</a></li>
							<li><a href="layout-dark.html" target="_blank">Dark layout <span class="pcoded-badge badge badge-danger">Hot</span></a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge badge badge-success">100+</span></a>
						<ul class="pcoded-submenu">
							<li><a href="widget-statistic.html">Statistic</a></li>
							<li><a href="widget-data.html">Data</a></li>
							<li><a href="widget-chart.html">Chart</a></li>
						</ul>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                
                <img src="{{ asset('able/images/logo.png') }}" alt="" class="logo">
                
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('able/images/user/avatar-2.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>   
    <!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Page Title</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Subsection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Card Title</h5>
                    </div>
                    <div class="card-body">
                        <div class="tasks-widget">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                        <span class="custom-control-label">Task 1</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(8);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                        <span class="custom-control-label">Contrary to popular belief</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(9);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                        <span class="custom-control-label">Lorem Ipsum Dolor Sit Amet</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(10);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                        <span class="custom-control-label">Sed ut perspiciatis unde omnis iste natus</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(11);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light btn-primary btn-add-task m-t-10" type="button" data-toggle="modal" data-target="#flipFlop">Add New Tasks</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Todo-modal ] end -->
        </div>
        <!-- [ Main Content ] end -->

        <main class="py-4">
                
            @yield('content')

        </main>

    </div>
</section>

<!-- [ modal ] start -->
<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Add new todo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-material">
                            <div class="right-icon-control">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="task-insert" class="form-control save_task_todo" placeholder="Create your task list" required="">
                                        <span class="form-bar"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_save btn waves-effect waves-light btn-primary">Save</button>
                <button type="button" class="btn waves-effect waves-light btn-default close_btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<!-- Required Js -->


{{-- <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script> --}}

<script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('able/js/ripple.js') }}"></script>
<script src="{{ asset('able/js/pcoded.min.js') }}"></script>
<script src="{{ asset('able/js/menu-setting.min.js') }}"></script>

<script src="{{ asset('able/js/pages/todo.js') }}"></script>
{{-- <script src="{{ asset('able/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('able/js/pages/ac-alert.js') }}"></script> --}}

</body>
</html>