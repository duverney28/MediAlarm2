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
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/358636/pexels-photo-358636.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$799,000<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <img class="d-flex align-self-start" src="https://images.pexels.com/photos/358636/pexels-photo-358636.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
                        <div class="media-body pl-3">
                            <div class="price">$506,400<small>New York</small></div>
                            <div class="stats">
                                <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                                <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                            </div>
                            <div class="address">4062 Walnut Hill Drive
                                Cincinnati</div>
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