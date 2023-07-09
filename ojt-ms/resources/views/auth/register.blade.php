@extends('layouts.index')
@section('content')

<div class="auth-side-form">
    <div class=" auth-content">
        <img src="{{ asset('images/oms_logo.png') }}" alt="OMS Logo" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
        <h4 class="mb-3 f-w-400 "  >Sign up</h4>

        {{-- <form action="{{ route('register') }}" method="POST">
        @csrf
            <input type="hidden" class="form-control" id="account_type" name="account_type" value="student">
            <input type="hidden" class="form-control" id="contact_number" name="contact_number" value="09123456789">

            <div class="tab">Student Details:
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
                    <div class="col-md-8">
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
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label class="floating-label" for="middle_initial">Middle Initial</label>
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
            </div> <!-- end of tab -->

            <div class="tab">
                <div class="form-group mb-3">
                    <label class="floating-label" for="email">Email address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="floating-label" for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" p>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="floating-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-block mb-4">Register</button>
            </div> <!-- end of tab -->

        </form> --}}

        <div style="width: 300px; height: 445px; " class="justify-content-center align-items-center">
            
            <div class="col">
                <form id="regForm">
                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                    <div class="tab">
                        <p>Donation Type:</p>
                        <label class="container">One time
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                        </label>
                        <label class="container">Recurring
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                        </label>
                        <p><input type="text" placeholder="Amount" oninput="this.className = ''" name="amount"></p>

                    </div>
                    <div class="tab">
                        <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                        <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                        <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                        <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                        <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                        <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                        <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                        <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>

                    </div>
                    <div class="tab">
                        <p><input placeholder="Credit Card #" oninput="this.className = ''" name="email"></p>
                        <p>Exp Month
                            <select id="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select></p>
                        <p>Exp Year
                            <select id="year">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select></p>

                        <p><input placeholder="CVV" oninput="this.className = ''" name="phone"></p>
                    </div>

                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                    </div>
                </form>
            </div>
                
        </div>

           {{-- Form Wizard --}}
        {{-- <div class="bt-wizard" id="progresswizard">
            <ul class="nav nav-pills nav-fill mb-3">
                <li class="nav-item"><a href="#progress-t-tab1" class="nav-link" data-toggle="tab">Profile</a></li>
                <li class="nav-item"><a href="#progress-t-tab2" class="nav-link" data-toggle="tab">Address</a></li>
                <li class="nav-item"><a href="#progress-t-tab3" class="nav-link" data-toggle="tab">Final</a></li>
            </ul>
            <div id="bar" class="bt-wizard progress mb-3" style="height:6px">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"  style="width: 0%;"></div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="progress-t-tab1">
                    <form>
                        <div class="form-group row">
                            <label for="progress-t-name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="progress-t-name" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="progress-t-email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="progress-t-email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="progress-t-pwd" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="progress-t-pwd" placeholder="Password">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="progress-t-tab2">
                    <form>
                        <div class="form-group row">
                            <label for="progress-t-sate" class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="progress-t-sate">
                                    <option>Select State</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="progress-t-address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="progress-t-address" rows="3" spellcheck="false"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="progress-t-tab3">
                    <form class="text-center">
                        <i class="feather icon-check-circle display-3 text-success"></i>
                        <h5 class="mt-3">Registration Done! . .</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Subscribe Newslatter</label>
                        </div>
                    </form>
                </div>
                <div class="row justify-content-between btn-page">
                    <div class="col-sm-6">
                        <a href="#!" class="btn btn-primary button-previous">Previous</a>
                    </div>
                    <div class="col-sm-6 text-md-right">
                        <a href="#!" class="btn btn-primary button-next">Next</a>
                    </div>
                </div>
            </div>
        </div> --}}
                
            
        

        <div class="text-center">
            <div class="saprator my-4"><span>OR</span></div>
            <p class="mt-4">Already have an account? <a href="{{ __('login') }}" class="f-w-400">Signin</a></p>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    
    <script src="{{ asset('able/js/plugins/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <script>
        // $(document).ready(function() {
        //     // Initialize the Form Wizard
        //     $('#signup-form').formWizard();

        //     // Handle next button click
        //     $('#next-btn').click(function() {
        //         $('#signup-form').formWizard('next');
        //     });

        //     // Handle previous button click
        //     $('#prev-btn').click(function() {
        //         $('#signup-form').formWizard('prev');
        //     });

        //     $('#progresswizard').bootstrapWizard({
        //     withVisible: false,
        //     'nextSelector': '.button-next',
        //     'previousSelector': '.button-previous',
        //     'firstSelector': '.button-first',
        //     'lastSelector': '.button-last',
        //     onTabShow: function(tab, navigation, index) {
        //         var $total = navigation.find('li').length;
        //         var $current = index + 1;
        //         var $percent = ($current / $total) * 100;
        //         $('#progresswizard .progress-bar').css({
        //             width: $percent + '%'
        //         });
        //     }
        //     });

        //     $('#validationwizard').bootstrapWizard({
        //         withVisible: false,
        //         'nextSelector': '.button-next',
        //         'previousSelector': '.button-previous',
        //         'firstSelector': '.button-first',
        //         'lastSelector': '.button-last',
        //         onNext: function(tab, navigation, index) {
        //             if (index == 1) {
        //                 if (!$('#validation-t-name').val()) {
        //                     $('#validation-t-name').focus();
        //                     $('.form-1').addClass('was-validated');
        //                     return false;
        //                 }
        //                 if (!$('#validation-t-email').val()) {
        //                     $('#validation-t-email').focus();
        //                     $('.form-1').addClass('was-validated');
        //                     return false;
        //                 }
        //                 if (!$('#validation-t-pwd').val()) {
        //                     $('#validation-t-pwd').focus();
        //                     $('.form-1').addClass('was-validated');
        //                     return false;
        //                 }
        //             }
        //             if (index == 2) {
        //                 if (!$('#validation-t-address').val()) {
        //                     $('#validation-t-address').focus();
        //                     $('.form-2').addClass('was-validated');
        //                     return false;
        //                 }
        //             }
        //         }
        //     });

        //     $('#tabswizard').bootstrapWizard({
        //     'nextSelector': '.button-next',
        //     'previousSelector': '.button-previous',
        //     });
        //     $('#verticalwizard').bootstrapWizard({
        //         'nextSelector': '.button-next',
        //         'previousSelector': '.button-previous',
        //     });
        // });
            //your javascript goes here
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
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                // document.getElementById("regForm").submit();
                // return false;
                //alert("sdf");
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
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
            x[n].className += " active";
        }
    </script>

@endsection