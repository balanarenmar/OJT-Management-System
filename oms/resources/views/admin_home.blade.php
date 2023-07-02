@extends('layouts.tmpl_navbar')
@section('content')
    @auth
        <p>REGISTEreD</p>
            <div class="container">
                <div class="text-bg-primary p-3">You are registered</div>
            </div>
    @else

        {{-- register --}}
        <div class="container">
            <div class="text-bg-primary p-3">NOT yet registered</div>
        </div>

    @endauth
@endsection

{{-- This view uses a layout to load the header, nav-bar, and main content  --}}
