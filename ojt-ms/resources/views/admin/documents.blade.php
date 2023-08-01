@extends('layouts.admin_nav')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Student Documents</h3>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table id="studentDocumentsTable" class="table table-hover ">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Name</th>
                                @foreach ($all_documents as $document)
                                    <th>{{ $document->doc_name}}</td>
                                @endforeach
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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Document Types</h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-add-document"><i class="feather icon-plus"></i>Add New Document</button>
                    </div>
                </div>

                <div class="table table-responsive">
                    <table id="documentsTable" class="table table-hover ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>File Path</th>
                                <th>File Type</th>
                                <th>Date Created</th>
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

<div class="modal fade" id="modal-add-document" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header ">
                <h2 class="modal-title " >Add a new Document</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('a-addDocument') }}" method="POST" id="addDocument">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="doc_name">Document Name</label>
                                <input type="text" class="form-control @error('doc_name') is-invalid @enderror" id="doc_name" name="doc_name" placeholder="" maxlength="50">
                                @error('doc_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
               
                        <div class="col-sm-12 mb-3">
                            <div class="form-group fill">
                                <label class="floating-label" for="mime_type">File Type</label>
                                <select name="mime_type" class="form-control @error('mime_type') is-invalid @enderror" id="mime_type">
                                    <option value=""></option>
                                    <option value="application/pdf">PDF</option>
                                </select>
                                @error('mime_type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
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

@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    {{-- <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-1.13.5/r-2.5.0/datatables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-1.13.5/datatables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script>
        // $(function () {
        $(document).ready(function () {

            var documentsTable = $('#documentsTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{ route('a-documents') }}",
                    data: { 'data-table': 'documents' },
                },
                columns: [
                    { data: 'doc_name', name: 'doc_name' },
                    { data: 'doc_path', name: 'doc_path' },
                    { data: 'extension', name: 'extension' },
                    { data: 'formatted_date', name: 'formatted_date', orderable: true, },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
            var studentsTable = $('#studentDocumentsTable').DataTable({
                processing: true,
                serverSide: false,
                responsive: true,
                ajax: {
                    url: "{{ route('a-documents') }}",
                    data: { 'data-table': 'students' },
                },
                columns: [
                    { data: 'account_id', name: 'account_id' },
                    { data: 'name', name: 'name'},
                    @foreach ($all_documents as $document)
                        {
                            data: 'document_{{ $document->id }}',
                            name: 'document_{{ $document->id }}',
                            render: function (data) {
                                return data ? '<i class="feather icon-check icon-success"></i>' : '<i class="feather icon-x icon-danger"></i>';
                            },
                            orderable: false,
                            searchable: false,
                        },
                    @endforeach
                ],
            });

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

            $('#documentsTable').on('click', '.delete-document-btn', function (e) {
                e.preventDefault();
                var documentId = $(this).data('id');

                Swal.fire({
                    title: "Warning!",
                    text: "Are you sure you want to delete this document?",
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
                            url: '/delete-document/' + documentId,
                            type: 'DELETE',
                            data: { _token: '{{ csrf_token() }}', },
                            success: function (response) {
                                if (response.success) {
                                    // Reload the DataTables table after successful deletion
                                    documentsTable.ajax.reload();

                                    // Show success toast message
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Document removed'
                                    });
                                } else {
                                    swal.fire("Error!", "Failed to delete document.", "error");
                                }
                            },
                            error: function () {
                                swal.fire("Error!", "Something went wrong", "error");
                            },
                        });
                    }
                });

            });

            // Handle "Clear" button click
            $('.btn-clear').on('click', function () {
                $('#addDocument')[0].reset(); // Reset the form fields
            });
        });
    </script>

    @if(Session::has('success'))
    <script>
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

        Toast.fire({
            icon: 'success',
            title: 'Document Added'
        });
    </script>
    @endif

    
@endsection