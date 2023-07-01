@extends('layouts.tmpl_land')
@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 mb-md-5">OJT Registration Form</h3>

            <form action="/registerStudent" method="POST">
              @csrf

              <input type="hidden" name="account_id" value="$sas">
              <input type="hidden" name="account_type" value="student">

              <div class="row">
                <div class="col-md-5 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="lastName">First Name</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                  </div>
                </div>
                <div class="col-md-2 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="lastName">Middle I.</label>
                    <input type="text" id="lastName" class="form-control form-control-lg " maxlength="1" />
                  </div>
                </div>
                <div class="col-md-5 mb-4">
                  <div class="form-outline">                    
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                  </div>
                </div>
              </div>
                

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Password</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Confirm Password</label>
                  </div>
                </div>
              </div>

              <div class="pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection