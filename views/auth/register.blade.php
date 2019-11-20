@extends('layouts.register')
@section('title', 'Register')
@section('content')
<div class="container">   
    <div class="register-box">
        <div class="register-logo">
          <a href="{{url('/')}}"><b>Admin</b>LTE Version 3</a>
        </div>
      
        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Registro de Nuevo Usuario</p>
      
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Completo">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <span class="fa fa-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="fa fa-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <span class="fa fa-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                <span class="fa fa-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Acepto los  <a href="#">Terminos y Condiciones</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
                <!-- /.col -->
              </div>
            </form>     
          
      
            <a href="{{url('login')}}" class="text-center">Ya tengo una Cuenta</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
</div>

@endsection
