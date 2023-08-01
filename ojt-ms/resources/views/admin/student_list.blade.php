@extends('layouts.admin_nav')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Student List </h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-add-student"><i class="feather icon-plus"></i> Add Student</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="studentsTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student Number </th>
                                {{-- <th>Company Id</th> --}}
                                <th>Name</th>
                                <th>Course</th>
                                <th>Block</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Date started</th>
                                <th>Hours Rendered</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-student" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header ">
                <h2 class="modal-title " >Add a Student</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('a-insertStudent') }}" method="POST" id="addStudent">
                    @csrf
                    <div class="row">
                        <div class="col-12 pt-2">
                            <h5>Personal Information</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="account_id">Student Number</label>
                                <input type="text" class="form-control @error('account_id') is-invalid @enderror" id="account_id" name="account_id" placeholder="" maxlength="15">
                                @error('account_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="floating-label" for="first_name">First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="" autocomplete="off">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="floating-label" for="middle_initial">Middle Initial</label>
                                <input type="text" class="form-control @error('middle_initial') is-invalid @enderror" id="middle_initial" name="middle_initial" placeholder="" autocomplete="off">
                                @error('middle_initial')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="floating-label" for="last_name">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="" autocomplete="off">
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 pt-2">
                            <h5>Other Information</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="contact">Contact Number</label>
                                <input type="string" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" maxlength="11">
                                @error('contact')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="gender">Gender</label>
                                <select name="gender" class="form-control @error('contact') is-invalid @enderror">
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="course">Course</label>
                                <select class="form-control @error('course') is-invalid @enderror" id="course" name="course">
                                    <option value="BS Information Technology">BS Information Technology</option>
                                    <option value="BS Computer Science">BS Computer Science</option>
                                    <option value="BS Meteorology">BS Meteorology</option>
                                    <option value="BS Biology">BS Biology</option>
                                    <option value="BS Chemistry">BS Chemistry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="floating-label" for="block">Block</label>
                                <select class="form-control @error('block') is-invalid @enderror" id="block" name="block">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group fill">
                                <label class="floating-label" for="year_level">Year Level</label>
                                <input type="number" name="year_level" value="3" min="3" max="4"  class="form-control form-control-md @error('year_level') is-invalid @enderror">
                                @error('year_level')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"/>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- <div class="col-12 pt-2">
                            <h5>Optionals</h5>
                        </div> --}}
                        
                        {{-- <div class="col-sm-12">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button class="btn btn-danger float-left" type="button">Clear</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button class="btn btn-primary float-right" type="submit">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
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
                <p>Student added successfully!</p>
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
    {{-- <script src="{{ asset('able/js/plugins/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('able/js/plugins/dataTables.bootstrap4.min.js') }}"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    
    <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-1.13.5/r-2.5.0/datatables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $(function () {
            var table = $('#studentsTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('a-showStudentList') }}",
                columns: [
                    { data: 'account_id', name: 'account_id' },
                    { data: 'name', name: 'name' },
                    { data: 'course', name: 'course' },
                    { data: 'standing', name: 'standing' },
                    { data: 'gender', name: 'gender' },
                    { data: 'status', name: 'status' },
                    { data: 'date_started', name: 'date_started' },
                    { data: 'hours', name: 'hours' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
        
            $('#studentsTable').on('click', '.delete-student-btn', function (e) {
                e.preventDefault();
                var studentId = $(this).data('id');

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
        
                swal.fire({
                    title: "Warning!",
                    text: "Are you sure you want to remove this student?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    dangerMode: true,
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user confirms, perform the delete request via AJAX
                        $.ajax({
                            url: '/delete-student/' + studentId,
                            type: 'DELETE',
                            data: { _token: '{{ csrf_token() }}', },
                            success: function (response) {
                                if (response.success) {
                                    // Reload the DataTables table after successful deletion
                                    table.ajax.reload();
                                    // Show success toast message
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Student removed'
                                    });
                                } else {
                                    swal.fire("Error!", "Failed to delete student.", "error");
                                }
                            },
                            error: function () {
                                swal.fire("Error!", "Something went wrong", "error");
                            },
                        });
                    }
                });
            });
        });
        </script>

    <script>        
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

    @if (count($errors) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#modal-add-student').modal('show');
        });
    </script>
    @endif

    <!-- JavaScript to hide error messages and remove 'is-invalid' class on click -->
    <script type="text/javascript">
        // Add click event listener to the form
        document.getElementById('addStudent').addEventListener('click', function (event) {
            if (event.target.tagName === 'INPUT') {
                // Hide the error message when the input is clicked
                const errorMessage = event.target.nextElementSibling;
                errorMessage.style.display = 'none';
                // Remove 'is-invalid' class from the input field
                event.target.classList.remove('is-invalid');
            }
        });
    </script>

    @if(Session::has('success'))
    <script>
        swal( {
            title: "Success!",
            text: "The Student been added Successfully.",
            icon: "success",
            button: "OK",
        });
    </script>
    @endif



<!-- Add this script to your view -->
<script>
    $(document).ready(function () {
        // Add event listener to the "Edit" button
        $(document).on('click', '.edit-student', function (e) {
            e.preventDefault(); // Prevent the default link behavior

            var studentId = $(this).data('id'); // Get the student ID from the data attribute

            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            // Show confirmation dialog
            Swal.fire({
                title: "Edit Student",
                text: "Are you sure you want to edit this student?",
                icon: "info",
                showCancelButton: true,
                confirmButtonText: "Edit",
                cancelButtonText: "Cancel",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                    })
                }
            });
        });
    });
</script>
@endsection