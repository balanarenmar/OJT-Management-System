@extends('layouts.tmpl_land')
@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 mb-md-5 text-center">OJT Login Form</h3>
            <p class="text-center">Account ID: <b>{{ $accountId }}</b></p>
            
            <form action="/requestLogin" method="POST" id="login">
              @csrf
              <input type="hidden" name="account_id" value="{{ $accountId }}">

              <div class="row w-100 " >
                <div class="col-lg-6 mb-4 pb-2 pl-0 mx-auto ">
                  <div class="form-outline">                    
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-md @error('password') is-invalid @enderror" />
                    @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              
              <div class="pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Login" />
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  </form>
</section>

@endsection

@section('scripts')


@endsection