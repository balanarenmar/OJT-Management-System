@extends('layouts.index')
@section('content')

<div class="auth-side-form">
    <div class=" auth-content">
        <img src="{{ asset('images/oms_logo.png') }}" alt="OMS Logo" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
        <h4 class="mb-3 f-w-400 "  >Sign up</h4>

        <div style="width: 300px; height: 350px; " class="justify-content-center align-items-center">

            <div class="col">
                <form id="regForm" action="{{ route('registrationRequest') }}" method="POST">
                @csrf
                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>

                        {{-- First Tab --}}
                        <div class="tab">
                            <h5>Personal Details:</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="account_id">Student ID</label>
                                        <input type="text" class="form-control @error('account_id') is-invalid @enderror" id="account_id" name="account_id" placeholder="" maxlength="15" required>
                                        @error('account_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="first_name">First Name</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="" maxlength="32">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="middle_initial">Middle I.</label>
                                        <input type="text" class="form-control @error('middle_initial') is-invalid @enderror" id="middle_initial" name="middle_initial" placeholder="" maxlength="1">
                                        @error('middle_initial')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="last_name">Last Name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="" maxlength="32">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab">

                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group mb-3">
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
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="block">Block</label>
                                            <select name="block" id="block" class="form-control form-control-md">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <div class="form-outline">
                                            <label class="year_level" for="year_level">Year Level</label>
                                            <input type="number" name="year_level" value="3" min="1" max="6"  class="form-control form-control-md" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="gender">Gender:</label>
                                            <select name="gender" class="form-control form-control-md">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="contact">Contact Number</label>
                                        <input type="string" id="contact" name="contact" class="form-control form-control-md @error('contact') is-invalid @enderror" pattern="09\d{9}" maxlength="11" required/>
                                        @error('contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="email">Email address</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="floating-label" for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" p>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="floating-label" for="confirm_password">Confirm Password</label>
                                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password">
                                        @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- End of Tabs --}}
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-5">
                                <button class="btn btn-block has-ripple" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            </div>
                            <div class="col-5" >
                                <button class="btn btn-block has-ripple" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                        

                </form>
            </div>

        </div>

        <div class="text-center">
            <div class="saprator my-4"><span>OR</span></div>
            <p class="mt-4">Already have an account? <a href="{{ __('login') }}" class="f-w-400">Signin</a></p>
        </div>
    </div>
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
                <p>Account application success</p>
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


    <script src="{{ asset('able/js/plugins/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <script>
        var currentTab = 0;
        document.addEventListener("DOMContentLoaded", function(event) {
            showTab(currentTab);

        });

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                document.getElementById("nextBtn").setAttribute("type", "submit");
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
                document.getElementById("nextBtn").setAttribute("type", "button");
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("nextprevious").style.display = "none";
                document.getElementById("all-steps").style.display = "none";
                document.getElementById("register").style.display = "none";
                document.getElementById("text-message").style.display = "block";
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                y[i].classList.add("invalid");
                valid = false;
                } else {
                y[i].classList.remove("invalid", "fade-out"); // Remove both classes
                }
            }

            if (valid) {
                document.getElementsByClassName("step")[currentTab].classList.add("finish");
            }

            // Apply the "fade-out" class after 2 seconds
            setTimeout(function() {
                Array.from(y).forEach(function(input) {
                input.classList.add("fade-out");
                });

                // Remove both classes after 1 more second
                setTimeout(function() {
                Array.from(y).forEach(function(input) {
                    input.classList.remove("invalid", "fade-out");
                });
                }, 1000); // 1000 milliseconds = 1 second
            }, 2000); // 2000 milliseconds = 2 seconds

            return valid;
        }


        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
            x[n].className += " active";
        }
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

    <script>
        $(document).ready(function() {
            @if(session('success'))
                $('#successModal').modal('show');
            @endif
            
        });
    </script>

@endsection