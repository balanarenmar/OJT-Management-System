@extends('layouts.able')
@section('content')

<div class="row d-flex justify-content-center ">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3>Add Admin</h3>
            </div>
            <div class="card-body p-5">

                <form action="{{ route('adminAdd') }}" method="POST" id="registerPending">
                    @csrf

                    <input type="hidden" name="account_type" value="admin">

                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="account_id">Account ID</label>
                                <input class="form-control form-control-lg @error('account_id') is-invalid @enderror" type="string" name="account_id" data-mask="9999-9999-99999" maxlength="15" placeholder="0000-0000-00000">
                                @error('account_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="first_name">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control form-control-md @error('first_name') is-invalid @enderror" required/>
                          @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-2 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="middle_initial">Middle I.</label>
                          <input type="text" id="middle_initial" name="middle_initial" class="form-control form-control-md @error('middle_initial') is-invalid @enderror" maxlength="1"/>
                          @error('middle_initial')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-5 mb-4">
                        <div class="form-outline">                    
                          <label class="form-label" for="last_name">Last Name</label>
                          <input type="text" id="last_name" name="last_name" class="form-control form-control-md @error('last_name') is-invalid @enderror" required/>
                          @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                      </div>
                    </div>
      
                    <div class="row">

                        <div class="col-md-5 mb-4">
                            <div class="form-outline">                    
                              <label class="form-label" for="contact_number">Contact Number</label>
                              <input type="string" id="contact_number" name="contact_number" class="form-control form-control-md @error('contact_number') is-invalid @enderror" maxlength="11" pattern="\d{11}" required placeholder="09123456789"/>
                              @error('contact_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="role">Role</label>
                            <select name="role" id="role" class="form-control form-control-md">
                              <option value="OJT Coordinator" selected>OJT Coordinator</option>
                              <option value="OJT Supervisor" >OJT Supervisor</option>
                              <option value="Student Admin" >Student Admin</option>
                              <option value="System Developer" >System Developer</option>  
                            </select>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-4 pl-0 pr-0">
                      <div class="form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-md @error('email') is-invalid @enderror" placeholder="@bicol-u.edu.ph" required/>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                      </div>
                    </div>
      
                    <div class="row w-100 " >
                      <div class="col-lg-6 mb-4 pb-2">
                        <div class="form-outline">                    
                          <label class="form-label" for="password">Password</label>
                          <input type="password" id="password" name="password" class="form-control form-control-md @error('password') is-invalid @enderror" />
                          @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6 mb-4 pb-2 pr-0">
                        <div class="form-outline">                    
                          <label class="form-label" for="password_confirmation">Confirm Password</label>
                          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-md @error('password_confirmation') is-invalid @enderror" />
                          @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                              <!-- Error message -->
                            <div class="invalid-feedback" id="password-error-message">
                              Passwords do not match.
                            </div>
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Register" />
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
</div>

<!-- Modal start --> 
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Admin added successfully!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal end --> 

@endsection
@section('scripts')

<script>
  $(document).ready(function() {
      @if(session('success'))
          $('#successModal').modal('show');
      @endif
      
      // Other JavaScript code goes here
  });
</script>

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

  $("#course").change(function() {
      var val = $(this).val();
      if (val == "BS Information Technology") {
          $("#block").html("<option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option>");
      } else if (val == "BS Computer Science") {
          $("#block").html("<option value='A'>A</option> <option value='B'>B</option>");
      } else if (val == "BS Meteorology") {
          $("#block").html("<option value='A'>A</option>");
      } else if (val == "BS Biology") {
          $("#block").html("<option value='A'>A</option> <option value='B'>B</option>");
      } else if (val == "BS Chemistry") {
          $("#block").html("<option value='A'>A</option> <option value='B'>B</option>");
      }
      
  });
  </script>
@endsection