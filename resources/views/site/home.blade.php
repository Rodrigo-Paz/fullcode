@extends('site.master.layout')

@section('content')
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="img/carousel/img01.jpg" class="img-fluid d-block">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Vamos fazer uma programação saldável?</h1>
            <p>O nosso objetivo é desenvolver aplicações como essa.</p>
            <p><a class="btn btn-lg btn-primary" href="curses">Página de Cursos</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="img/carousel/img02.jpg" class="img-fluid d-block">
        <div class="container">
          <div class="carousel-caption">
            <h1>Na full code temos esse objetivo.</h1>
            <p>Trazer aplicações com codigos leves e transparente.</p>
            <p><a class="btn btn-lg btn-primary" href="curses">Página de Cursos</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="img/carousel/img03.jpg" class="img-fluid d-block">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Vamos fatiar essa ideia saldável em vídeos explicativos .</h1>
            <p>Tudo parece fazer sentido para você?.</p>
            <p><a class="btn btn-lg btn-primary" href="contact">Página de contato</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/youtube.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Youtube</h2>
        <p>Acompanhe alguns projetos que estamos postando no Youtube</p>
        <p><a class="btn btn-secondary" href="#">Acessar Youtube &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img src="img/instagram.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Intagram</h2>
        <p>Acompanhe algum projetos que iremos anunciar no Instagram</p>
        <p><a class="btn btn-secondary" href="#">Acessar Insta &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img src="img/git.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Github</h2>
        <p>Acompanhe alguns projetos que subimos para o Github</p>
        <p><a class="btn btn-secondary" href="#">Acessar Git &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Título do primeiro featurette.<span class="text-muted">Vai explodir sua mente.</span></h2>
        <p class="lead">Um ótimo conteúdo de espaço reservado para o primeiro featurette aqui. Imagine uma prosa emocionante aqui.</p>
      </div>
      <div class="col-md-5">
        
        <img src="img/featurette01.jpg" class="img-fluid d-block">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh sim, é tão bom. <span class="text-muted">Veja por si mesmo.</span></h2>
        <p class="lead">Outro recurso? Claro. Mais conteúdo de espaço reservado aqui para dar a você uma ideia de como esse layout funcionaria com algum conteúdo real do mundo real no local.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        --><img src="img/featurette02.jpg" class="img-fluid d-block">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">E por último, este. <span class="text-muted">Xeque-mate.</span></h2>
        <p class="lead">E sim, este é o último bloco de conteúdo de espaço reservado representativo. Novamente, não tem a intenção de ser realmente lido, simplesmente aqui para lhe dar uma visão melhor de como isso ficaria com algum conteúdo real. Seu conteúdo.</p>
      </div>
      <div class="col-md-5">

      <img src="img/featurette03.jpg" class="img-fluid d-block">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection
