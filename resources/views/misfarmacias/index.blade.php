@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/encuentrame.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <section class="head">
        <div class="container">
            <h2 class="text-center"><span>Mis Farmacias </span><i class="fa fa-heart"></i></h2>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="search-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 listing-block">
                    <div class="media">
                        <div class="fav-box"><i class="" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://lh3.googleusercontent.com/p/AF1QipPi5sgoX-QBDL6sARl7krSElyR6Jzwj8GR_lwnd=s1600-w400" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">Drogueria su Salud</div>
                            <div class="stats">
                                <span><i class="fa fa-phone-square"></i>
                                    Teléfono: 3454445</span>
                                <span><i class="fa fa-clock-o"></i>Horas:
                                    Abierto ⋅ Cierra a las 21:00</span>
                                <span><i class="fa fa-address-book" aria-hidden="true">Dirección: Cra. 2 #25 82, Pereira, Risaralda</i></span>
                            </div>
                            <div class="address">
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://lh3.googleusercontent.com/p/AF1QipOuocUHzzqMOcENldIrm5-crD3BbMiS5WbCzFHb=s1600-w400">
                        <div class="media-body pl-3">
                            <div class="price">Drogueria Alemana</div>
                            <div class="stats">
                                <span><i class="fa fa-phone-square"></i>
                                    Teléfono: (606) 3341371</span>
                                <span><i class="fa fa-clock-o"></i>Horas:
                                    Abierto ⋅ Cierra a las 21:00</span>
                                <span><i class="fa fa-address-book" aria-hidden="true">Cl. 22 #4-78 · (606) 3341371 Pereira, Risaralda</i></span>
                            </div>
                            <div class="address">
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="data:image/jpeg;base64,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">
                        <div class="media-body pl-3">
                            <div class="price">Drogueria Colsubsidio</div>
                            <div class="stats">
                                <span><i class="fa fa-phone-square"></i>
                                    Teléfono: (606) 3401340</span>
                                <span><i class="fa fa-clock-o"></i>Horas:
                                    Abierto ⋅ Cierra a las 19:00</span>
                                <span><i class="fa fa-address-book" aria-hidden="true">Carrera 13, Av. Circunvalar ##11 Pereira, Risaralda</i></span>
                            </div>
                            <div class="address">
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://lh3.googleusercontent.com/p/AF1QipMUJ4a4pTtWVrVt-ABUVseU-vsx0AxfkvzQKyUd=w1024-k">
                        <div class="media-body pl-3">
                            <div class="price">Drogueria Multidrogas</div>
                            <div class="stats">
                                <span><i class="fa fa-phone-square"></i>
                                    Teléfono: (606) 3333335</span>
                                <span><i class="fa fa-clock-o"></i>Horas:
                                    Abierto ⋅ Cierra a las 18:30</span>
                                <span><i class="fa fa-address-book" aria-hidden="true">Dirección:Av 30 de Agosto nº 34-38 esquina, Pereira, Risaralda</i></span>
                            </div>
                            <div class="address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 map-box mx-10000 px-200">
                    <x-maps-leaflet :centerPoint="['lat'=> 4.815048600779418, 'long' => -75.69549549390601]" :zoomLevel="13" :markers="[['lat'=>  4.815048600779418, 'long' => -75.69549549390601]]">
                    </x-maps-leaflet>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script>
        $(function() {
            $('.listing-block').slimScroll({
                height: '1180px'
            });
        });
    </script>

    </section>


</body>

</html>

@endsection