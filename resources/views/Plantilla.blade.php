<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('ing')}}">Principal</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('libro.create')?'text-info fst-italic fw-bold':''}}" href="{{route('libro.create')}}">Registro de Libros</a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('libro.index')?'text-info fst-italic fw-bold':''}}" href="{{route('libro.index')}}">Consulta de Libros</a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('cliente.create')?'text-success fst-italic fw-bold':''}}"href="{{route('cliente.create')}}">Registro de Clientes</a>
            </li>
          
        </ul>
        </div>
    </div>
    </nav>

    <!--Contenido de c/u pagina-->
    @yield('contenido')
    <!--pie de pagina-->
    <div class="alert alert-info mt-5 text-center" role="alert">
    CopyRight©℗®™ 
    @php
    echo date("d-m-y");
    @endphp
   <br> Libreria   ///BURBUJAS/// </br>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>