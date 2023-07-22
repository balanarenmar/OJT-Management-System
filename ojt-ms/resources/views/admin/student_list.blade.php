@extends('layouts.admin_nav')
@section('content')

<div class="row">
    <!-- subscribe start -->
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

                <div class="row">
                    <div class="table-responsive m-3 pb-5">
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
    <!-- subscribe end -->
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
                                <input type="text" class="form-control @error('account_id') is-invalid @enderror" id="account_id" name="account_id" placeholder="">
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
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="floating-label" for="middle_initial">Middle Initial</label>
                                <input type="text" class="form-control" id="middle_initial" name="middle_initial" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="floating-label" for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="">
                            </div>
                        </div>

                        
                        
                        <div class="col-12 pt-2">
                            <h5>Other Information</h5>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="contact">Contact Number</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="course">Course</label>
                                <select class="form-control" id="course" name="course">
                                    <option value=""></option>
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
                                <select class="form-control" id="block" name="block">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group fill">
                                <label class="floating-label" for="year_level">Year Level</label>
                                <input type="number" name="year_level" value="3" min="3" max="6"  class="form-control form-control-md" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"/>
                            </div>
                        </div>
                       
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
<!-- [ Header Content ] end -->
@endsection


@section('scripts')
    {{-- <script src="{{ asset('able/js/plugins/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('able/js/plugins/dataTables.bootstrap4.min.js') }}"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
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
                        {data: 'date_completed', name: 'date_completed'},
                        // {data: 'action', name: 'action', orderable: false, searchable: false}
                        // {data: 'action',
                        //     name: 'action',
                        //     orderable: false,
                        //     searchable: false
                        // },
                ]
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

    {{-- <script type="text/javascript">
        // Add click event listener to the input field
        document.getElementById('account_id').addEventListener('click', function () {
            // Hide the error message when the input is clicked
            this.nextElementSibling.style.display = 'none';
        });
    </script> --}}

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

@endsection

