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
    
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12">
        <img src="{{ asset('images/oms_logo.png') }}" class="img-fluid" alt="OJT Management System">
      </div>
    </div>
  </div>

  <!-- Submit Form-->
<div class="container">
  <div class="row justify-content-center align-items-start">
    <div class="mt-4">
      <div class="d-flex">
        
        <form class="form" action="/checkAccount" method="post">
          @csrf
            <div class="row">
              <!-- this is the text field and button area -->
              <div class="col-sm">
                <input class="form-control form-control-lg" id="account_id" name="account_id" type="text" placeholder="Student Number" pattern="[0-9]+-[0-9]+-[0-9]+" maxlength="15" required >
              </div>
              <div class="col-sm-auto">
                  <button class="btn btn-primary btn-lg btn-block" id="submit" name="submit" type="submit" value="submit">Submit</button>
              </div>
            </div>
          </form>

      </div>
    </div>
  </div>
</div>
  
  
</main>

    <script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
</body>
</html>
