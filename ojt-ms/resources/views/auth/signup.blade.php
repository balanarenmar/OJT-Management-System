<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

	<title>OMS Registration</title>
		<!-- Meta -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- Favicon icon -->
		<link rel="icon" href={{ asset('able/images/OMS.svg') }} type="image/x-icon">
		<link rel="stylesheet" href={{ asset('able/css/able.css') }}>
	
		{{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
	
</head>

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome you!</h1>
				<h4 class="text-white font-weight-normal">Signup to your account and made member of the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h4 class="mb-3 f-w-400">Sign up</h4>
				<div class="form-group mb-3">
					<label class="floating-label" for="first_name">First Name</label>
					<input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
				</div>
				<div class="form-group mb-3">
					<label class="floating-label" for="middle_initial">Middle Initial</label>
					<input type="text" class="form-control" id="middle_initial" name="middle_initial" placeholder="">
				</div>
				<div class="form-group mb-3">
					<label class="floating-label" for="last_name">Last Name</label>
					<input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
				</div>
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email address</label>
					<input type="text" class="form-control" id="Email" placeholder="">
				</div>
				<div class="form-group mb-4">
					<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" id="Password" placeholder="">
				</div>
				<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
				</div>
				<button class="btn btn-primary btn-block mb-4">Sign up</button>
				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mt-4">Already have an account? <a href="auth-signin-img-side.html" class="f-w-400">Signin</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('able/js/ripple.js') }}"></script>
<script src="{{ asset('able/js/pcoded.min.js') }}">

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



</body>

</html>
