<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- <script src="{{ asset('js/musica.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script>
        var asset_global = '{{asset("/")}}';
    </script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilomusica.css') }}" rel="stylesheet">




</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark  shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>MediAlarm</h1> <i class="fa fa-user-md" aria-hidden="true"></i>

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @else



                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mismedicamentos') }}">{{ __('Mis medicamentos') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('medicamentos') }}">{{ __('Agendar Medicamentos') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mimusica') }}">{{ __('Musica') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('misfarmacias') }}">{{ __('Encuentrame') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('informacion') }}">{{ __('Infórmate') }}</a>
                        </li>



                        <li class="nav-item dropdown">
                            <img src=" {{ Auth::user()->avatar }}" alt=" {{ Auth::user()->name }}" style="border:1px solid #cccccc; border-radius:20px; width:39px; height:auto; float:left; margin: right 12px;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu">

                                <a class="dropdown-item" id="btn">

                                    <script>
                                        document.getElementById("btn").addEventListener("click", function() {
                                            myModals.show();

                                        });
                                    </script>
                                    {{ __('mi cuenta') }}
                                </a>


                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                </div>
                </li>
                @endguest
                </ul>
                </ul>

            </div>
    </div>
    </nav>
    <script src="{{ asset('js/agenda.js') }}" defer></script>
    <script src="{{ asset('js/musica.js') }}" defer></script>
    <main class="py-4">
        <main class="py-4">
            @yield('content')
        </main>
        </div>





</body>

</html>



<div class="modal" tabindex="-1" id="ventanamodaltwo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mi Información</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <label for="text" class="form-label">Nombre Usuario</label>
                    <input type="text" class="form-control" id="id_user" name="id_user" value="{{ Auth::user()->name }}" placeholder="" disabled>
                </div>

                <div class="form-group">
                    <label for="text" class="form-label">Correo Electronico</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="{{ Auth::user()->email }}" placeholder="" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>