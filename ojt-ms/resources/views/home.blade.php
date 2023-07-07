<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OJT Management System</title>

    <link rel="icon" href={{ asset('able/images/OMS.svg') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('able/css/able.css') }}>
</head>
<body>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
    
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

    </div>
        

    <script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('able/js/ripple.js') }}"></script>
    <script src="{{ asset('able/js/pcoded.min.js') }}"></script>

</body>
</html>