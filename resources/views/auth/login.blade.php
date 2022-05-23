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
                <div data-layer="ea34836a-db55-42ba-b9db-f4476bd1c991" class="rectangulo62f48e0ea2"></div>
                <div data-layer="31fb878b-5f71-436d-907b-171fcff3c145" class="login">Login</div>
            </div>
            <div data-layer="6d22b615-716d-41c2-8ba7-33d396f38824" class="hoverState">
                <div data-layer="d3412e95-1166-4966-b26b-160200416920" class="rectangulo64"></div>
                <div data-layer="cc3264c5-e9e3-4e17-bfca-c492bbace222" class="login66058584">Login</div>
            </div>
            <div data-layer="d90e2dc2-c42d-477c-a3de-aac5976dad10" class="defaultState">
                <div data-layer="f0d817a3-3324-44d1-8216-595fefe5205d" class="rectangulo63"></div>
                <div data-layer="3beb41e5-abbf-49ce-8f22-a5faa6e49aa0" class="iniciarSesion">Iniciar Sesión</div>
            </div>
        </button>
        <a href="{{ route('register') }}"> <button type="button" data-layer="a790acb9-07e3-4383-b2ed-a8b5a61649a5" name="btnlogin" class="btnlogin256d4265">
            <div data-layer="03a0b86a-aa9d-47a6-9c27-c859abf17db7" class="activeState6d5135a7">
                <div data-layer="5a455699-f77f-46fb-ac08-ecaf5f3a462a" class="rectangulo62761062a8"></div>
                <div data-layer="07276cae-ffab-45c1-b1cd-8726ca1ccab6" class="logind327a754">Login</div>
            </div>
            <div data-layer="88fa0db5-7cf2-45e1-967c-e04737deef4e" class="hoverState09fb84e6">
                <div data-layer="b1a36beb-09f0-4322-af38-9d0d003f1c3c" class="rectangulo640c256301"></div>
                <div data-layer="58e87e35-6bf0-42ae-a3a6-72f6814e916a" class="login978716bb">Login</div>
            </div>
            <div data-layer="59b697c4-c609-466f-a27d-5ef17eacbc37" class="defaultStated42cdce0">
                <div data-layer="32a28251-fc3d-4cb1-8f1a-f085ef0483dc" class="rectangulo6384b981cf"></div>
                   <div data-layer="e6da77b9-e918-406d-96dc-18ffb02242e1" class="registrarse">Registrarse</div> </a>
            </div>
            </a>
        </button>
        <div data-layer="7b5f8fa4-c8ca-471b-a298-ee5579dc4200" class="passwordContainer"> <svg data-layer="65441171-ddbb-49a5-ae69-16c5b95841b6" preserveAspectRatio="none" viewBox="4258.25 2910.273681640625 290.6875 1.5" class="trazado233">
                <path d="M 4259 2911.023681640625 L 4548.1875 2911.023681640625" />
            </svg>
            <div data-layer="92fa283e-2238-4afa-9d55-32b844ed9f46" class="password"><br />Password</div>
            <input data-layer="7724edea-6a6d-4316-8f03-d06e96990475" class="passwordForm" type="password" id="password" class="form-control @error('password') is-invalid @enderror"  name='password' required autocomplete="current-password" placeholder='Contraseña' value='Text
' />
        </div>
        <div data-layer="dc477174-bd08-4654-ae44-42e7702f78b6" class="usernameContainer">
            <div data-layer="ac8bfccb-64bd-4654-9efb-01b5ec52fe9c" class="username"><br />Username<br /></div>
            <svg data-layer="7d1c89d4-5ce0-40de-b481-86aea9e14ecd" preserveAspectRatio="none" viewBox="4284.1181640625 2766.75 294.66943359375 1.5" class="trazado232">
                <path d="M 4284.8681640625 2767.5 L 4578.03759765625 2767.5" />
            </svg>
            <input data-layer="d113c773-320a-40b0-b655-5d6959eaaa1a" class="usernameForm" type="email" id="name"  class="form-control @error('email') is-invalid @enderror" name='email'  value="{{ old('email') }}" required autocomplete="email" autofocusid="email" name='usernameForm' placeholder='email' value='Correo electronico'  />
        </div>
        <div data-layer="78214b0d-eeef-4504-b0ff-8935e53f93c2" class="medialarm">MediAlarm</div>
        <div data-layer="6ba6e78a-ce86-4727-ad13-93694273b814" class="grupo10"></div>
       <a href="{{ route('password.request') }}"> <div data-layer="9176c839-6627-41f1-b5e4-8294cdf9663d" class="xOlvidasteLaContrasena">¿ Olvidaste la contraseña ?</div> </a>
        <svg data-layer="d8c58855-71d3-406e-9847-b8a3027ed843" preserveAspectRatio="none" viewBox="4127.71826171875 3070.601806640625 140.0498046875 1.5" class="trazado234">
            <path d="M 4267.01806640625 3071.351806640625 L 4128.46826171875 3071.351806640625" />
        </svg>
        <svg data-layer="46958229-417c-49a9-a4bb-626c69efa084" preserveAspectRatio="none" viewBox="4127.71826171875 3070.601806640625 140.0498046875 1.5" class="trazado401">
            <path d="M 4267.01806640625 3071.351806640625 L 4128.46826171875 3071.351806640625" />
        </svg>
        <a href="{{route('login-gooogle')}}"> <button type="button" data-layer="6864e539-77b4-4d78-8e90-052c11f6d261" name="btngoogle" class="btngoogle">
            <div data-layer="4b7ce808-d343-44ac-8d16-82c1710cf6f0" class="activeStatef969076c">
                <div data-layer="c3a216fa-3bdd-45b9-87bf-905578776c74" class="rectangulo629f044ece"></div>
                <div data-layer="fd151e6a-58f7-4064-ae8d-c2234a68d1a3" class="login598f898b">Login</div>
            </div>
            <div data-layer="25ad37ba-a6ba-46a1-a920-e24060a51eca" class="defaultState5a1beb6b">
                <div data-layer="bf13b515-2a5e-4ea0-b950-512e5bcaeef8" class="rectangulo63826413e4"></div>
                <div data-layer="cd38c77f-66ee-4a55-bd81-f5a27cadda29" class="iniciarSesiona780b8ad">Iniciar Sesión</div>
            </div>
            <div data-layer="554e92a9-151f-43c8-8121-b793f98e8c3e" class="imggoogle">
                <div data-layer="be628ea1-0897-4380-82e9-d7baa6d1cba2" class="areaIconcustomgooglesizemediumstatedefaultstylestyle2"></div>
                <div data-layer="2894b823-b47d-41b2-82db-162b2030b862" class="icon"> <svg data-layer="7de3af4c-602e-4ef5-bdd2-a691f933417b" preserveAspectRatio="none" viewBox="3.352388381958008 3.353179454803467 39.70458984375 39.706298828125" class="a70b607d658c42d6959a6942d9af8533">
                        <path d="M 42.67151641845703 19.29380416870117 L 41.06986618041992 19.29380416870117 L 41.06986618041992 19.2103443145752 L 23.18544006347656 19.2103443145752 L 23.18544006347656 27.15897750854492 L 34.41686248779297 27.15897750854492 C 32.67213439941406 32.11296081542969 27.89301681518555 35.34209442138672 22.64692115783691 35.11555862426758 C 17.39883422851562 34.88902282714844 12.91779518127441 31.25848388671875 11.60626983642578 26.1733455657959 C 10.29673385620117 21.08820915222168 12.46472358703613 15.74275493621826 16.94576263427734 13.00842380523682 C 21.42879295349121 10.27210712432861 27.17366790771484 10.78876781463623 31.09631538391113 14.28020572662354 L 36.71600341796875 8.6605224609375 C 29.8265209197998 2.259885549545288 19.39195442199707 1.572328805923462 11.72152519226074 7.013168334960938 C 4.051095008850098 12.45400714874268 1.249201774597168 22.52889823913574 5.012879848480225 31.1472053527832 C 8.774570465087891 39.76550674438477 18.06850814819336 44.56250762939453 27.27302551269531 42.6369514465332 C 36.47754287719727 40.70940780639648 43.06695938110352 32.58988189697266 43.05702590942383 23.18465995788574 C 43.05702590942383 21.87909698486328 42.9278564453125 20.57552337646484 42.67151641845703 19.29380416870117 Z" />
                    </svg>
                    <svg data-layer="d3fe8af5-b26b-4a4e-8dfb-78bd14c0b8b4" preserveAspectRatio="none" viewBox="5.25499963760376 3.3343629837036133 31.22216796875 15.459228515625" class="x110f8f18502d4fd5A8f129950cfe0c1b">
                        <path d="M 5.25499963760376 13.99076843261719 L 11.80665969848633 18.79373168945312 C 13.2592716217041 15.18505096435547 16.37712478637695 12.50835037231445 20.16266059875488 11.62009048461914 C 23.9501838684082 10.73381805419922 27.93244743347168 11.74726676940918 30.8356876373291 14.33653450012207 L 36.47723007202148 8.698966979980469 C 31.93855857849121 4.456384181976318 25.67901039123535 2.574545383453369 19.5526008605957 3.615816593170166 C 13.42818069458008 4.655100345611572 8.13836669921875 8.49627685546875 5.25499963760376 13.99871826171875 Z" />
                    </svg>
                    <svg data-layer="9cd75e73-647e-4454-8b8b-f928f0fc11ac" preserveAspectRatio="none" viewBox="5.166999816894531 23.37799835205078 31.11669921875 15.8994140625" class="x7c59160e1de54f25B3fc8801d4860670">
                        <path d="M 22.91232299804688 39.27725219726562 C 27.86034393310547 39.27725219726562 32.62753677368164 37.43118286132812 36.28390884399414 34.09871673583984 L 30.10980987548828 28.87845230102539 C 27.07939147949219 31.17362213134766 23.13687133789062 31.88899612426758 19.49242401123047 30.80202102661133 C 15.84996318817139 29.71703338623047 12.94076442718506 26.95885848999023 11.66302013397217 23.37799835205078 L 5.166999816894531 28.38961029052734 C 8.565040588378906 35.06646347045898 15.42073535919189 39.27327728271484 22.91232299804688 39.27725219726562 Z" />
                    </svg>
                    <svg data-layer="305a6efa-36b8-4c0b-8d03-7c955fdd7615" preserveAspectRatio="none" viewBox="20 16.66699981689453 19.94091796875 18.7529296875" class="x7b469a3f8e4e43f292dc35108879d3d7">
                        <path d="M 39.55363464355469 16.74847412109375 L 37.9480094909668 16.74847412109375 L 37.9480094909668 16.66699981689453 L 20 16.66699981689453 L 20 24.64345169067383 L 31.27116394042969 24.64345169067383 C 30.48424530029297 26.85317230224609 29.06740188598633 28.7827033996582 27.19549942016602 30.19755935668945 L 27.19549942016602 30.19755935668945 L 33.36761093139648 35.4198112487793 C 37.6121826171875 31.69786834716797 40.01465606689453 26.30074310302734 39.93914413452148 20.65522766113281 C 39.93914413452148 19.34370422363281 39.80997848510742 18.03615570068359 39.55363464355469 16.74847412109375 Z" />
                    </svg>
                </div>
            </div>
            </a>
        </button>
        <a href="{{ route('login-facebook') }}"> <button type="button" data-layer="bec5857c-09f3-43ec-ab44-ba9dd2f5d727" name="btnfacebook" class="btnfacebook">
            <div data-layer="ae5a3987-8d8e-4de0-98a3-01470f4340b2" class="activeState581063ff">
                <div data-layer="903c3766-b704-4668-82ff-a7149cab0476" class="rectangulo62553b5c4b"></div>
                <div data-layer="2517e3c3-42fe-458b-bb80-8faeaea551df" class="loginf165f20b">Login</div>
            </div>
            <div data-layer="6b2df86b-3c5b-40e6-aad4-1838ee383ec6" class="defaultState3e2b945b">
                <div data-layer="6cf3c7b4-7332-48ad-b8d2-4cee20b7fd79" class="rectangulo63d376b629"></div>
                <div data-layer="775cac54-9ae7-44f5-9f01-7174ee8be634" class="iniciarSesion27622263">Iniciar Sesión</div>
            </div>
            <div data-layer="27c875c1-dfe3-4f27-8fd7-8790a29541c5" class="imgfacebook">
                <div data-layer="e755f886-86f8-4a70-b40b-98fa3731fe8b" class="areaIconfeatherfacebooksizemediumstatedefaultstylestyle2"></div>
                <div data-layer="48e3e7dd-52d6-4a01-87a4-e95c584beb3b" class="icon2fdabef2"> <svg data-layer="6d8eb729-18d1-4a41-8cf1-9ccc96bbf10a" preserveAspectRatio="none" viewBox="7.000000476837158 2 22.341796875 40.62109375" class="f746ca1c1d104c418f07073874de1899">
                        <path d="M 29.34160423278809 2 L 23.24843788146973 2 C 17.64069747924805 2 13.09316444396973 6.547531604766846 13.09316444396973 12.1552734375 L 13.09316444396973 18.24843788146973 L 7.000000476837158 18.24843788146973 L 7.000000476837158 26.37265777587891 L 13.09316444396973 26.37265777587891 L 13.09316444396973 42.62109375 L 21.21738433837891 42.62109375 L 21.21738433837891 26.37265777587891 L 27.31054878234863 26.37265777587891 L 29.34160423278809 18.24843788146973 L 21.21738433837891 18.24843788146973 L 21.21738433837891 12.1552734375 C 21.21738433837891 11.03413200378418 22.12729644775391 10.12421989440918 23.24843788146973 10.12421989440918 L 29.34160423278809 10.12421989440918 L 29.34160423278809 2 Z" />
                    </svg>
                </div>
            </div>
        </button>
       </a>
    </div>



    </form>
</body>

</html>