<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <span class="navbar-brand" href="#">Home Banking - <span style="color:rgb(253, 220, 129);"> Hola {{ ucfirst(auth()->user()->name) }} ! </span> </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('principal') }}">Home</a>
                   </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('movimientos') }}">Balance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('pago') }}">Pago de Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('inversiones') }}">Inversiones</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="javascript:document.getElementById('logout').submit()">Logout </a>
                    <form action="{{route('logout')}}" id="logout" method="post">
                    @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- opcion mostrar cabecera -->
    @if ($mostrar == 'si')
    <div id="contenedor_texto" class="mb-3 app">
        <div class="row">
            <div class="col-8 offset-2 text-left mt-4">
                <h1>{{$titulo}}</h1>
                <p id="p_contenedor">{{$descripcion}}</p>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
          @yield('contenedor')
    </div>
</body>
</html>