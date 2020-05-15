@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('/')}}"><b>Admin</b>LTE Version 3</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar Sesion</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="input-group mb-3">           
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">

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
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

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
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary">
               Entrar 
            </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p class="mb-1">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">Olvide mi Contraseña
        </a>
         @endif
    </p>
    <p class="mb-1">
    <a href="{{url('register')}}" class="text-center">Registrar Nuevo Usuario</a>
    </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection
