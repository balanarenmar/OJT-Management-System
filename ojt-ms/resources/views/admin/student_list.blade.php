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

                <div class="table-responsive ">
                    <table id="studentsTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student Number </th>
                                {{-- <th>Company Id</th> --}}
                                <th>Name</th>
                                <th>Standing</th>
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
            <div class="modal-header">
                <h5 class="modal-title">Student</h5>
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
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="">
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
                                <input type="text" class="form-control @error('middle_initial') is-invalid @enderror" id="middle_initial" name="middle_initial" placeholder="">
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
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="">
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
                                <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact">
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
                                <select name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
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
                        
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
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
    <script src="{{ asset('able/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/dataTables.bootstrap4.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('#studentsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('a-showStudentList') }}",
                columns: [
                        {data: 'account_id', name: 'account_id'},
                        {data: 'name', name: 'name'},
                        {data: 'standing', name: 'standing'},
                        {data: 'gender', name: 'gender'},
                        {data: 'status', name: 'status'},
                        {data: 'date_started', name: 'date_started'},
                        {data: 'hours', name: 'hours'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#studentsTable').on('click', '.delete-student-btn', function (e) {
            e.preventDefault();
            var studentId = $(this).data('id');
            
            swal({
                title: "Warning!",
                text: "Are you sure you want to remove this student?",
                icon: "warning",
                buttons: ["Cancel", "Delete"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // If user confirms, perform the delete request via AJAX
                    $.ajax({
                        url: '/delete-student/' + studentId, 
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}', },
                        success: function (response) {
                            if (response.success) {
                                // Reload the DataTables table after successful deletion
                                table.ajax.reload();
                                swal("Deleted!", "Student has been deleted.", "success");
                            } else {
                                swal("Error!", "Failed to delete student.", "error");
                            }
                        },
                        error: function () {
                            swal("Error!", "Something went wrong", "error");
                        },
                    });
                }
            });
        });

        });
    </script>

{{-- <script>
    $(document).on('click', '.delete-student', function () {
        var studentId = $(this).data('account_id');

        console.log('Student ID:', studentId);

        swal({
            title: "Warning!",
            text: "Are you sure you want to remove this student?",
            icon: "warning",
            buttons: ["Cancel", "Delete"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                deleteStudent(studentId);
            }
        });
    });

    function deleteStudent(studentId) {
        // Use AJAX to send the request to the delete route in the controller
        $.ajax({
            type: 'POST',
            url: "{{ route('a-deleteStudent') }}",
            data: {
                _token: '{{ csrf_token() }}',
                student_id: studentId,
            },
            success: function (response) {
                // Handle the success response, e.g., show a success message
                swal("Success!", response.message, "success");
                // You can also update the DataTable to reflect the changes
                // For example, you can reload the table to show the updated data
                table.ajax.reload();
            },
            error: function (error) {
                // Handle the error response, e.g., show an error message
                swal("Error!", "Failed to delete the student.", "error");
            }
        });
    }
</script> --}}

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



@endsection

