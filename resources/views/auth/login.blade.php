@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
  <div class="login-logo">
  <h1  class="text-center"  style="font-weight:bold;">SRKP-CARRIER</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body register-card">
    <h6 class="text-center" style="font-weight:bold;">Sign in to start your session</h6>

      <form method="POST" action="{{ route('login') }}">
       @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" >
              {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn  btn-reg btn-block">{{ __('Login') }}</button>
            <!-- @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif -->
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <!-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a> -->
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-1">
      @if (Route::has('password.request'))
        <a class="text-center link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
        </a>
       @endif
       </p>
      <p class="mb-0">
        <a href="#" class="text-center link">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
</div>
@endsection
