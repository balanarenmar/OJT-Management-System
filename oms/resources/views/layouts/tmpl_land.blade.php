<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Header Template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href={{ asset('css/front.css') }}>
  
</head>
<body>

  <header class="bg-light p-2">
    <div class="header-content">
      <div class="logo-left">
        <img class="" src="{{ asset('images/bu_logo.png') }}" alt="BU Logo">
      </div>
      
      <div class="flex-grow-1"><h1>COLLEGE OF SCIENCE</h1></div>
      <div class="logo-right">
        <img class="min-size-110" src="{{ asset('images/cs_logo.png') }}">
      </div>
    </div>
  </header>

  <main>

    @yield('content')
    
  </main>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
  <script src="{{ asset('able/js/ripple.js') }}"></script>
  <script src="{{ asset('able/js/pcoded.min.js') }}"></script>

</body>
</html>
