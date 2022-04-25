@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">

  <div class="register-logo">
   <h1  class="text-center"  style="font-weight:bold;">SRKP-CARRIER</h1>
  </div>

  <div class="card mt-2">
    <div class="card-body register-card">
      <h6 class="text-center" style="font-weight:bold;">Register a new membership</h6>

      <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
         @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
         @error('email')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
         @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
         @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the terms
              </label>
            </div>
          </div>
          <!-- /.col -->
          <!-- <div class="col-4">
            <button type="submit" class="btn btn-block btn-reg"> {{ __('Register') }}</button>
          </div> -->
          <!-- /.col -->
        </div>
        <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-reg"> {{ __('Register') }}</button>
          </div>
       </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

     <p class="text-center mt-2 text-dark"> Already have a Account? <a href="#" class="link"> Log In </a> </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>
</div>
@endsection
