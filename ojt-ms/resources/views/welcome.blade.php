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

                    <h1 class="text-white my-4">BU OJT Management System</h1>
                    <h4 class="text-white font-weight-normal">Signup to your account and made member of the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
                </div>
            </div>

            <div class="auth-side-form bg-transparent">
                <div class=" auth-content text-center">
                    <a href="{{ route('login') }}" class="f-w-400 "><button class="btn btn-orange btn-block mb-4 ">Login</button></a>
                    <a href="{{ route('register') }}" class="f-w-400"><button class="btn btn-orange btn-block mb-4">Register</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- [ signin-img ] end -->

    <!-- Required Js -->
    <script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('able/js/ripple.js') }}"></script>
    <script src="{{ asset('able/js/pcoded.min.js') }}"></script>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>