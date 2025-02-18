<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Control Escolar') }}</title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel 9 User Roles and Permissions - Mywebtuts.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        @if ($user->hasRole('Admin'))
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manejar Usuarios</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manejar Roles</a></li>
                        @elseif ($user->hasRole('maestro'))
                        <li><a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a></li>
                        <li><a class="nav-link" href="{{ route('calificaciones.index') }}">Calificaciones</a></li>
                        <li><a class="nav-link" href="{{ route('materias.index') }}">Materia</a></li>
                        @elseif ($user->hasRole('alumno'))
                        <li><a class="nav-link" href="{{ route('materias.index') }}">Materia</a></li>
                        <li><a class="nav-link" href="{{ route('calificaciones.index') }}">Calificacion</a></li>
                        @elseif ($user->hasRole('secretario'))
                        <li><a class="nav-link" href="{{ route('control-materias.index') }}">Control Materia</a></li>
                        <li><a class="nav-link" href="{{ route('maestros.index') }}">Maestro</a></li>
                        @elseif ($user->hasRole('clinica'))
                        <li><a class="nav-link" href="{{ route('clinicas.index') }}">Control Clinica</a></li>
                        @endif


                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>