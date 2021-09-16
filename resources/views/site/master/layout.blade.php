<!DOCTYPE html>
<html lang="pt-br">

 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <title>Full Code by Rodrigo Paz</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-center" href="http://127.0.0.1:8000/">Full Code <br/>by Rodrigo Paz</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{(Route::current()->getName() === 'site.home' ? 'active' : '')}}" aria-current="page" href="{{route('site.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::current()->getName() === 'site.curses' ? 'active' : '')}}" href="{{route('site.curses')}}">Cursos</a>
          </li>
           <li class="nav-item">
            <a class="nav-link {{(Route::current()->getName() === 'site.contact' ? 'active' : '')}}" href="{{route('site.contact')}}">Contato</a>
          </li>
        </ul>
       <div class="btn btn-outline-success me-2">
            @if(date('H') >= 0 && date('H')<= 12 )
            <p>Bom dia!  {{date ('d/m/y')}} {{date ('H:i:s')}}</p>
            @elseif(date('H') >= 13 && date('H')<= 18 )
            <p>Boa tarde!  {{date ('d/m/y')}} {{date ('H:i:s')}}</p>
            @else
            <p>Boa noite! {{date ('d/m/y')}} {{date ('H:i:s')}}</p>
	        @endif
            </div>
      </div>
    </div>
  </nav>
</header>

<main>

 @yield('content')


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Ir para topo</a></p>
    <p>&copy; {{ date('Y')}} Full Code by Rodrigo Paz, Inc. &middot; <a href="#">Termos</a> &middot; <a href="#">Privacidade</a></p>
  </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
