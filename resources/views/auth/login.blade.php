@extends('layouts.app')

@section('content')
<section style="background-image: url('../../ugan/public/img/abeja.jpg'); background-size: cover; background-repeat: no-repeat ">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="panel panel-default">
                    <h3 class="center white-text ">Inicio de sesión</h3><br>
                        <div class="#37474f blue-grey darken-3 lighten-4 white-text" style="padding-top: 50px; padding-bottom: 110px; padding-left: 50px; padding-right: 50px; border-radius: 20px">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <h4 class="center"><img  src="../../ugan/public/img/wht_ugan.png" style="width: 200px" alt=""></h4>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                                    <div class="col s12 m12 l12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col s6 m6 l6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ¿Recordar contraseña?
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col s12 m12 l12 ">
                                        <button type="submit" class="btn btn-primary">
                                            Iniciar
                                        </button>

                                        <a class=" btn-link" href="{{ route('password.request') }}">
                                            ¿Olvidó su contraseña?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
