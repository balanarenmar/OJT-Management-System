@extends('layouts.tmpl_navbar')
@section('content')
    @auth
        <p>REGISTEreD</p>
            <div class="container">
                <div class="text-bg-primary p-3">You are registered</div>
            </div>

            <h1>Welcome, {{ $user->account_id }}</h1>
            <p>Your account type is: {{ $user->account_type }}</p>
    @else
        {{-- register --}}
        <div class="container">
            <div class="text-bg-primary p-3">NOT yet registered</div>
            {{-- <h1>Welcome, {{ $accountId }}</h1> --}}
            <p>Your account type is: {{$user}}</p>
            
        </div>

    @endauth
@endsection

{{-- This view uses a layout to load the header, nav-bar, and main content  --}}
