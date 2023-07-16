@extends('layouts.admin_nav')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Student Registration List</h3>
                </div>
                <div class="card-body">

                    @if(session('status') == 'success_delete')
                        <div class="alert alert-success" role="alert">
                            Request has been deleted successfully.
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Account ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Block</th>
                                <th>Gender</th>
                                <th>Year Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentRequests as $request)
                                <tr>
                                    <td>{{ $request->account_id }}</td>
                                    <td>{{ $request->first_name }} {{ $request->last_name }}</td>
                                    <td>{{ $request->email }}</td>
                                    <td>{{ $request->course }}</td>
                                    <td>{{ $request->block }}</td>
                                    <td>{{ $request->gender }}</td>
                                    <td>{{ $request->year_level }}</td>
                                    <td>
                                        <div class="row">
                                            <form action="{{ route('a-acceptStudentRequest', $request->id) }}" method="POST" class="pr-1">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i></button>
                                            </form>

                                            <form action="{{ route('a-deleteStudentRequest', $request->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm notifications" data-type="danger" data-from="top" data-align="right"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        {{-- <button class="btn notifications btn-danger" data-type="danger" data-from="top" data-align="right">Danger</button> --}}
                                        <button class="btn notifications btn-primary" data-type="inverse" data-animation-in="animated fadeInUp" data-animation-out="animated fadeOutUp">Fade In Up</button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js" integrity="sha512-vCgNjt5lPWUyLz/tC5GbiUanXtLX1tlPXVFaX5KAQrUHjwPcCwwPOLn34YBFqws7a7+62h7FRvQ1T0i/yFqANA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('able/js/plugins/bootstrap-notify.min.js') }}"></script> --}}
    <script src="{{ asset('able/js/pages/ac-notification.js') }}"></script>
    <script>
        $(document).ready(function() {
            if('{{ session('status') }}' == 'success_delete') {
                $.notify({
                    message: 'Request has been deleted successfully.'
                },{
                    type: 'success',
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });
            }
        });
    </script>

@endsection
