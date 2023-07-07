@extends('layouts.admin_nav')
@section('content')

<div class="row">
    <!-- subscribe start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Admin List </h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Student</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="report-table" class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll</th>
                                <th>Sex</th>
                                <th>Birth Date</th>
                                <th>Age</th>
                                <th>Blood Group</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
</div>

<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <h5>Personal Information</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Email">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Rollno">Roll number</label>
                                <input type="text" class="form-control" id="Rollno" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Address">Address</label>
                                <textarea class="form-control" id="Address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Other Information</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Sex">Select Sex</label>
                                <select class="form-control" id="Sex">
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Profie Image</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Birth">Birth Date</label>
                                <input type="date" class="form-control" id="Birth" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Age">Age</label>
                                <input type="text" class="form-control" id="Age" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Blood">Select Blood Group</label>
                                <select class="form-control" id="Blood" placeholder="">
                                    <option value=""></option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
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
    <script src="{{ asset('able/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('able/js/plugins/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
@endsection