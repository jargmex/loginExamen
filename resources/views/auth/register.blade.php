@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" class="container w-25">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <h1 class="h3 mb-3 fw-normal">Registro</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Juan Perez" required="required" autofocus>
            <label for="floatingEmail">Nombre</label>
            @if ($errors->has('nombre'))
                <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" placeholder="Usuario" required="required" autofocus>
            <label for="floatingName">Usuario</label>
            @if ($errors->has('usuario'))
                <span class="text-danger text-left">{{ $errors->first('usuario') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirmar Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
        
        @include('auth.partials.copy')
    </form>
@endsection