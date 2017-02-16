<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UGAN</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <title>{{ config('app.name', 'UGAN') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>


            <div class="row #ffd740 amber accent-2">
                <section>
                    <video style="width: 100%; height: 100%;bottom: -10px"  loop="loop" autoplay="autoplay" >
                        <source src="../../ugan/public/img/abejitas6-1.mp4">
                    </video>
                </section>
                <h3 class="center hide-on-small-only hide-on-med-only " style="position: absolute; top: 15%; left:30%"><img style="width: 500px" src="../../ugan/public/img/wht_ugan.png" alt=""></h3>
                <h3 class="center hide-on-small-only hide-on-large-only" style="position: absolute; top: 5%; left:30%"><img style="width: 400px" src="../../ugan/public/img/wht_ugan.png" alt=""></h3>
                <h3 class="center hide-on-large-only hide-on-med-only" style="position: absolute; top: 0%; left:30%"><img style="width: 180px" src="../../ugan/public/img/wht_ugan.png" alt=""></h3>
                <nav>
                    <div class="links #37474f blue-grey darken-3 center">
                        <a class="white-text" href="https://laravel.com/docs">Blog</a>
                        <a class="white-text" href="{{ url('/login') }}">Login</a>
                        <a class="white-text" href="{{ url('/register') }}">Registro</a>
                        <a class="white-text" href="https://forge.laravel.com">Galería</a>
                        <a class="white-text" href="https://github.com/laravel/laravel">Eventos</a>
                    </div>
                </nav>

            <section style="padding-top: 50px">
                <div class="row">
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../../ugan/public/img/mision-01.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Misión<i class="material-icons right">more_vert</i></span>

                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Misión<i class="material-icons right">close</i></span>
                                <p style="text-align:justify;">Nuestra misión es establecer las bases e infraestructura que otras generaciones utilicen, para llevar al gremio apícola nacional a una vertebración total para una capacitación, producción y manufactura de productos de la colmena, comercialización, actualización y desarrollo integral y sustentable de una apicultura moderna y equitativa para el bien de todo el gremio y de forma especial, para los pueblos originarios y mujeres que tradicionalmente han sido relegado Hacer campañas permanentes de promoción del consumo de los productos de las abejas con la población ofertando los beneficios que se reportan en la salud al integrarlos como un estilo natural de vida diaria y como medio preventivo para proteger al organismo y elevar las defensas de quienes los consumen, garantizando al consumidor un producto de higiene y calidad al llevar a cabo los apicultores las buenas prácticas en tanto en la producción de todo lo que sale de la colmena como en la manufactura de productos derivados de las abejas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../../ugan/public/img/vision-01.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Visión<i class="material-icons right">more_vert</i></span>

                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Visión<i class="material-icons right">close</i></span>
                                <p style="text-align:justify;">Suministrar las herramientas necesarias para un mejor desempeño productivo, utilizando la apicultura y todos sus derivados, como un detonante de desarrollo en comunidades marginadas, así también como la industrialización adecuada, moderna, científica, equitativa y sistemática de las zonas apícolas por excelencia, para llevar la producción apícola nacional, a penetrar mercados internacionales emergentes y con gran demanda de nuestros productos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../../ugan/public/img/accion-01.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Acción<i class="material-icons right">more_vert</i></span>

                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Acción<i class="material-icons right">close</i></span>
                                <p style="text-align:justify;">En respuesta a los retos ecológicos, de cambios climáticos y mercados globales, vemos la necesidad de diseñar el modelo de una apicultura autosustentable en todos los rubros y sentidos. Es a través de la vertebración, educación continua, exploración de oportunidades y desarrollo responsable de alternativas productivas y atención a mercados emergentes, que lograremos nuestros objetivos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </div>

    </body>
</html>
