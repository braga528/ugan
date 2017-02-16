@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
</script>
</script>
@section('content')
<section style="background-image: url('../../ugan/public/img/register_bg.png');  background-size: auto">
    <div class="container"  >
        <div class="row">
            <div class="col s12 m12 l12">
                <h3 class="center white-text">REGISTRO</h3><br>
                <div class="#37474f blue-grey darken-3 lighten-4 white-text" style="padding-top: 50px; padding-bottom: 50px; padding-left: 50px; padding-right: 50px; border-radius: 20px">
                    <form class="white-text" method="POST" action="{{ route('register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col s12 m6 l6">
                                <div class="input-field col s12 m4 l6">
                                    <input  id="first_name" name="name" type="text" class="validate" required>
                                    <label for="name">Nombre</label>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="input-field col s12 m4 l6">
                                    <input id="last_name" name="last_name" type="text" class="validate" required>
                                    <label for="last_name ">Apellido</label>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <input id="address" name="address" type="text" class="validate" required>
                                    <label for="address">Dirección</label>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                                    @endif
                                </div>


                                <div class="input-field col s12 m12 l12">
                                    <input id="phone" name="phone" type="tel" class="validate" required>
                                    <label for="phone">Teléfono</label>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                                    @endif
                                </div>


                                <div class="input-field col s12 m12 l12">
                                    <input id="email" name="email" type="email" class="validate" required>
                                    <label for="email">Correo electrónico</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field col s12 m12 l12">
                                    <select id="state" name="state" required>
                                        <option value="" disabled selected>Selecciona tu Estado</option>
                                        <option value="1">Aguascalientes</option>
                                        <option value="2">Baja California</option>
                                        <option value="3">Baja California Sur</option>
                                        <option value="4">Campeche</option>
                                        <option value="5">Chiapas</option>
                                        <option value="6">Chihuahua</option>
                                        <option value="7">Coahuila</option>
                                        <option value="8">Colima</option>
                                        <option value="9">Distrito Federal</option>
                                        <option value="9">Durango</option>
                                        <option value="10">Estado de México</option>
                                        <option value="11">Guanajuato</option>
                                        <option value="12">Guerrero</option>
                                        <option value="13">Hidalgo</option>
                                        <option value="14">Jalisco</option>
                                        <option value="15">Michoacán</option>
                                        <option value="16">Morelos</option>
                                        <option value="17">Nayarit</option>
                                        <option value="18">Nuevo León</option>
                                        <option value="19">Oaxaca</option>
                                        <option value="20">Puebla</option>
                                        <option value="21">Querétaro</option>
                                        <option value="22">Quintana Roo</option>
                                        <option value="23">San Luis Potosí</option>
                                        <option value="24">Sinaloa</option>
                                        <option value="25">Sonora</option>
                                        <option value="26">Tabasco</option>
                                        <option value="27">Tamaulipas</option>
                                        <option value="28">Tlaxcala</option>
                                        <option value="29">Veracruz</option>
                                        <option value="30">Yucatán</option>
                                        <option value="31">Zacatecas</option>
                                    </select>
                                    <label>Estado</label>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <select id="profile" name="profile" required>
                                        <option value="" disabled selected>Seleciona tu perfil</option>
                                        <option value="1">Productor</option>
                                        <option value="2">Apícola</option>
                                        <option value="3">Comercializador</option>
                                        <option value="4">Investigador</option>
                                        <option value="5">Otro</option>
                                    </select>
                                    <label>Perfil</label>
                                </div>

                                <div class="input-field col s12 m12 l12">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Contraseña</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                    @endif
                                </div>


                                <div class="input-field col s12 m12 l12">
                                    <input id="password" type="password" class="validate" required>
                                    <label for="password">Confirmar contraseña</label>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary #616161 grey darken-2">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>

<script>
    $(document).ready(function() {
        $('select').material_select();
    });

</script>
@endsection
