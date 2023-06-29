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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('able/js/ripple.js') }}"></script>
    <script src="{{ asset('able/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('able/js/menu-setting.min.js') }}"></script>
    
    <script src="{{ asset('able/js/pages/todo.js') }}"></script>
    {{-- <script src="{{ asset('able/js/plugins/sweetalert.min.js') }}"></script>
    <script src="{{ asset('able/js/pages/ac-alert.js') }}"></script> --}}


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
							<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
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
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
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
                            <h5 class="m-b-10">To Do</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">To Do</a></li>
                            <li class="breadcrumb-item"><a href="#!">To Do</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Todo-list ] start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do Card List</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" name="task-insert" class="form-control" placeholder="Create your task list" required="">
                            <div class="input-group-append">
                                <button class="btn waves-effect waves-light btn-secondary" id="create-task">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <section id="task-container">
                            <ul id="task-list">
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                </li>
                            </ul>
                            <div class="text-center">
                                <button id="clear-all-tasks" class="btn waves-effect waves-light btn-primary m-b-0" type="button">Clear All Tasks</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- [ Todo-list ] end -->
            <!-- [ Todo-list1 ] start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do List</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" name="task-insert" class="form-control add_task_todo" placeholder="Create your task list" required="">
                            <div class="input-group-append">
                                <button class="btn waves-effect waves-light btn-secondary" id="add-btn">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="new-task">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <span class="custom-control-label">Lorem Ipsum Dolor Sit Amet</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(1);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <span class="custom-control-label">Industry's standard dummy text ever since the 1500s</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(2);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <span class="custom-control-label">The point of using Lorem Ipsum is that it has a more-or-less </span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(3);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <span class="custom-control-label">Contrary to popular belief</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(4);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <span class="custom-control-label">There are many variations of passages of Lorem Ipsum</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(5);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <span class="custom-control-label">Sed ut perspiciatis unde omnis iste natus</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(6);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <span class="custom-control-label"> must explain to you how all this mistaken idea</span>
                                    </label>
                                </div>
                                <div class="float-right"><a onclick="delete_todo(7);" href="#!" class="delete_todolist"><i class="far fa-trash-alt"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Todo-list1 ] end -->
            <!-- [ Todo-modal ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>To Do List in Modal</h5>
                    </div>
                    <div class="card-body">
                        <div class="tasks-widget">
                            <div class="to-do-list mb-3">
                                <div class="d-inline-block">
                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                        <span class="custom-control-label">Lorem Ipsum Dolor Sit Amet</span>
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

</body>
</html>