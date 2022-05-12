<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio de Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('olvido su Contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MediAlarm</title>


    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div data-layer="40a4c2b4-0e1b-4b32-a215-fb533194a4bf" class="web13661">
            <button type="submit" data-layer="38f66e0c-a272-4cac-beb0-22c89cdd3508" name="btnlogin" class="btnlogin">

                <div data-layer="69bbe460-3b92-467f-bf30-7a92efad773a" class="activeState">
                    <div data-layer="ea34836a-db55-42ba-b9db-f4476bd1c991" class="rectangulo620fdb52d0"></div>
                    <div data-layer="31fb878b-5f71-436d-907b-171fcff3c145" class="login">iniciar sesion</div>
                </div>
                
                <div data-layer="6d22b615-716d-41c2-8ba7-33d396f38824" class="hoverState">
                    <div data-layer="d3412e95-1166-4966-b26b-160200416920" class="rectangulo64"></div>
                    <div data-layer="cc3264c5-e9e3-4e17-bfca-c492bbace222" class="loginb45efec8">Login</div>
                </div>
                <div data-layer="d90e2dc2-c42d-477c-a3de-aac5976dad10" class="defaultState">
                    <div data-layer="f0d817a3-3324-44d1-8216-595fefe5205d" class="rectangulo63"></div>
                    <div data-layer="3beb41e5-abbf-49ce-8f22-a5faa6e49aa0" class="iniciarSesion">Iniciar Sesión</div>
                </div>
            </button>
            <div data-layer="7b5f8fa4-c8ca-471b-a298-ee5579dc4200" class="passwordContainer"> <svg data-layer="65441171-ddbb-49a5-ae69-16c5b95841b6" preserveAspectRatio="none" viewBox="4258.25 2910.273681640625 290.6875 1.5" class="trazado233">
                    <path d="M 4259 2911.023681640625 L 4548.1875 2911.023681640625" />
                </svg>
                <div data-layer="92fa283e-2238-4afa-9d55-32b844ed9f46" class="password"><br />Password</div>
                <input data-layer="7724edea-6a6d-4316-8f03-d06e96990475" class="passwordForm" type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" name='passwordForm' placeholder='Contraseña' value='Text
' />

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div data-layer="dc477174-bd08-4654-ae44-42e7702f78b6" class="usernameContainer">
                <div data-layer="ac8bfccb-64bd-4654-9efb-01b5ec52fe9c" class="username"><br />Username<br /></div>
                <svg data-layer="7d1c89d4-5ce0-40de-b481-86aea9e14ecd" preserveAspectRatio="none" viewBox="4284.1181640625 2766.75 294.66943359375 1.5" class="trazado232">
                    <path d="M 4284.8681640625 2767.5 L 4578.03759765625 2767.5" />
                </svg>
                <input data-layer="d113c773-320a-40b0-b655-5d6959eaaa1a" class="usernameForm" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusid="email" name='usernameForm' placeholder='email' value='Correo electronico' />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div data-layer="78214b0d-eeef-4504-b0ff-8935e53f93c2" class="medialarm">MediAlarm</div>
            <div data-layer="6ba6e78a-ce86-4727-ad13-93694273b814" class="grupo10"></div>
            <a href="{{ route('register') }}"><div data-layer="9176c839-6627-41f1-b5e4-8294cdf9663d"  class="xOlvidasteLaContrasena">¿ Olvidaste la contraseña ?</div></a>
            <svg data-layer="d8c58855-71d3-406e-9847-b8a3027ed843" preserveAspectRatio="none" viewBox="4127.71826171875 3070.601806640625 614.18310546875 1.5" class="trazado234">
                <path d="M 4741.1513671875 3071.351806640625 L 4128.46826171875 3071.351806640625" />
            </svg>
        </div>



    </form>

</body>

</html>