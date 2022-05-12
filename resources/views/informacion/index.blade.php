@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>




<!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/informacion.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- <div class="social-box">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Behance</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12  text-center">
                    <div class="box">
                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Twitter</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Facebook</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Pinterest</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Google</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Github</h3>
                        </div>
                        <div class="box-text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <div class="box-btn">
                            <a href="https://bootsnipp.com/snippets/55ExM">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    
<!------ Include the above in your HEAD tag ---------->

<section class="container">
     
    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>MediAlarm</span>
                    <strong>
                        <i class="fa fa-fw fa-magic"></i>
                       Articulo Sobre la Artitris
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://img.freepik.com/vector-gratis/concepto-medico-medicamentos-estilo-dibujos-animados_313437-375.jpg">
                    </div>
                    <div class="mc-description">
                        Sipnosis Pagina Web Cielo
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                   <a target=_parent href="https://scielo.org/es/" class="fa fa-fw fa-facebook"></a>
             
                   <a  href="https://scielo.org/es/" class="fa fa-share fa-4x" aria-hidden="true"></a>
                </div>
            </article>
        </div>
        
    </div>

    <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>MediAlarm</span>
                    <strong>
                        <i class="fa fa-fw fa-magic"></i>
                       Articulo Sobre la Artitris
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="https://www.sanpablo.com.pe/wp-content/uploads/2017/07/botiquin-web.jpg">
                    </div>
                    <div class="mc-description">
                        Sipnosis Pagina Web Cielo
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a target=_parent href="https://scielo.org/es/" class="fa fa-fw fa-facebook"></a>
           
          <a  href="https://scielo.org/es/" class="fa fa-share fa-4x" aria-hidden="true"></a>
                </div>
            </article>
        </div>
        
    </div>

    <script src="{{ asset('js/cards.js') }}" defer></script> 


<!------ Include the above in your HEAD tag ---------->


</section>


</body>

</html>


@endsection