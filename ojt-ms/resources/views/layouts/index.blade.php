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
        <link rel="stylesheet" href={{ asset('able/css/registration.css') }}>
</head>
<body>
    
    <!-- [ signin-img ] start -->
    <div class="auth-wrapper align-items-stretch aut-bg-img">
        <div class="flex-grow-1">
            <div class="h-100 d-md-flex align-items-center auth-side-img position-fixed">
                <div class="col-sm-10 auth-content w-auto ">
                    
                    <img src={{ asset('images/oms_logo.png') }} alt="" class="img-fluid">
                    
                    
                    <a href={{ url('/') }}><h1 class="text-white my-4">BU OJT Management System</h1></a>    
                    <h4 class="text-white font-weight-normal">
                        Welcome to the OJT Management System (OMS). 
                        <br/>Register or Login to enter</h4>
                </div>
            </div>
            @yield('content')

        </div>
    </div>
    <!-- [ signin-img ] end -->


    <!-- Required Js -->
    <script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('able/js/ripple.js') }}"></script>
    <script src="{{ asset('able/js/pcoded.min.js') }}"></script>

    <script src="{{ asset('able/js/plugins/sweetalert.min.js') }}"></script>
    <script src="{{ asset('able/js/pages/ac-alert.js') }}"></script>

    <script>
    $(document).ready(function() {
            
            @if(session('success'))
                $('.register-success').trigger('click');
            @endif
        });
    </script>

    @yield('scripts')

</body>
</html>