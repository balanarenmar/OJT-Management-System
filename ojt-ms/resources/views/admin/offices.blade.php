@extends('layouts.admin_nav')
@section('content')

<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 

<div class="row d-flex justify-content-center ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>User list</h3>
            </div>
            <div class="card-body p-5">
                <div class="table-responsive">
                    <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Account number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Account Type</th>
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
<div class="container mt-5">
   
        
</div>
   
</body>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
          var table = $('#myTable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('offices.index') }}",
              columns: [
                    {data: 'account_id', name: 'account_id'},
                    {
                        render: function(data, type, row) {
                        var name = row.last_name + ', ' + row.first_name;
                        if (row.middle_initial !== null) {
                            name += ' ' + row.middle_initial + '.';
                        }
                        return name;
                        },
                    },
                    {data: 'email', name: 'email'},
                    {data: 'account_type', name: 'account_type'},
              ]
          });
        });
</script>
@endsection