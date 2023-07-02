@extends('layouts.tmpl_land')
@section('content')
    
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
            
            <form class="form student-id" action="/checkAccount" method="POST">
              @csrf
              <div class="row">
                <!-- this is the text field and button area -->
                <div class="col-sm">
                  <input class="form-control form-control-lg @error('account_id') is-invalid @enderror" pattern="[0-9]+-[0-9]+-[0-9]+" id="account_id" name="account_id" type="text" placeholder="Student Number"  maxlength="15" required>
                  @error('account_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>Please enter a valid Student ID</strong>
                  </span>
                  @enderror
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

@endsection
