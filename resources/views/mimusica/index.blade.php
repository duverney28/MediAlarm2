@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <title>AUDIOS</title>
</head>

<body>

<div class="container">
        <div class="listado-canciones">
            <div class="cancion">
                <div class="titulo">
                    Cancion 1
                </div>
                <div class="play" id="musicaepica">
                    <span class="material-icons">
                        play_circle
                    </span>
                </div>
                <div class="stop">
                    <span class="material-icons">
                        cancel
                    </span>
                </div>
                <div class="descargar">
                    <a href=" {{ asset('musica/musicaepica.mp3') }}" download>
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </div>
            </div>
            <div class="cancion">
                <div class="titulo">
                Cancion 2
                </div>
                <div class="play" id="imagine">
                    <span class="material-icons">
                        play_circle
                    </span>
                </div>
                <div class="stop">
                    <span class="material-icons">
                        cancel
                    </span>
                </div>
              
                <div class="descargar">
                    <a href="  {{ asset('musica/musicaepica.mp3') }}" download>
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </div>
            </div>
            <div class="cancion">
                <div class="titulo">
                    Cancion 3
                </div>
                <div class="play" id="Breatha">
                    <span class="material-icons">
                        play_circle
                    </span>
                </div>
                <div class="stop">
                    <span class="material-icons">
                        cancel
                    </span>
                </div>
                <div class="descargar">
                    <a href="  {{ asset('musica/musicaepica.mp3') }}" download>
                        <span class="material-icons">
                            file_download
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <input type="range" max="1" min="0" step="0.1" class="volumen">
    </div>

  


</body>

</html>


@endsection