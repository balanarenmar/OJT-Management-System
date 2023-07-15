@extends('layouts.admin_nav')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Student Registration List</h3>
                </div>
                <div class="card-body">

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
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        
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

@endsection
