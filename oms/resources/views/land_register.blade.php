@extends('layouts.tmpl_land')
@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 mb-md-5 text-center">OJT Registration Form</h3>

            <form action="/pending" method="POST" id="registerRequest">
              @csrf

              <p>Account ID: {{ $accountId }}</p>

              <input type="hidden" name="account_id" value="{{ $accountId }}">
              <input type="hidden" name="account_type" value="student">

              <div class="row">
                <div class="col-md-5 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" required/>
                  </div>
                </div>
                <div class="col-md-2 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="middle_initial">Middle I.</label>
                    <input type="text" id="middle_initial" name="middle_initial" class="form-control form-control-lg " maxlength="1" required/>
                  </div>
                </div>
                <div class="col-md-5 mb-4">
                  <div class="form-outline">                    
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" required/>
                  </div>
                </div>
              </div>

              <div class="row w-100">
                <div class="col-md-6 mb-4 pl-0">
                  <div class="form-outline">
                    <label class="form-label" for="course">Course</label>
                    <select name="course" id="course" class="form-control form-control-md">
                      <option value="BS Information Technology">BS Information Technology</option>
                      <option value="BS Computer Science" selected>BS Computer Science</option>
                      <option value="BS Meteorology">BS Meteorology</option>
                      <option value="BS Biology">BS Biology</option>
                      <option value="BS Chemistry">BS Chemistry</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="block">Block</label>
                    <select name="block" id="block" class="form-control form-control-md">
                      <option value="A">A</option>
                      <option value="B">B</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 mb-4 pr-0" >
                  <div class="form-outline">                    
                    <label class="year_level" for="year_level">Year Level</label>
                    <input type="number" name="year_level" value="3" min="3" max="9"  class="form-control form-control-md" required>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12 mb-4 pl-0 pr-0">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control form-control-md">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              </div>
              
              <div class="col-md-12 mb-4 pl-0 pr-0">
                <div class="form-outline">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-md" required/>
                </div>
              </div>

              <div class="row w-100 " >
                <div class="col-lg-6 mb-4 pb-2 pl-0">
                  <div class="form-outline">                    
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-md" />
                  </div>
                </div>
                <div class="col-lg-6 mb-4 pb-2 pr-0">
                  <div class="form-outline">                    
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-md" />
                  </div>
                        <!-- Error message -->
                      <div class="invalid-feedback" id="password-error-message">
                        Passwords do not match.
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

  </form>
</section>

@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $('input[name="confirm_password"]').keyup(function() {
      var password = $('input[name="password"]').val();
      var confirm_password = $(this).val();

      if (password !== confirm_password) {
        // Set an error message or apply some visual indication
        $(this).addClass('is-invalid');
      } else {
        // Clear the error message and remove any visual indication
        $(this).removeClass('is-invalid');
      }
    });
  });
</script>


@endsection