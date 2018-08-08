@extends('layout.master')


@section('content')

    <!--***********librerias higchart-->
    <script src="{{ asset('/plugins/js/highcharts.js') }}"></script>
    <script src="{{ asset('/plugins/js/highcharts-more.js') }}"></script>
    <script src="{{ asset('/plugins/js/modules/exporting.js') }}"></script>
    <script src="{{ asset('/plugins/js/solid-gauge.js') }}"></script><!--libreria solo para el grafico "solid-gauge"-->
    <!--***********REVISAR-->
    <script src="{{ asset('/plugins/googlecharts/loader.js') }}" type="text/javascript" ></script> <!--libreria de googlecharts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--***********librerias higchart-->

    
  <!--empieza slider-->
    <div class="container">
      <div id="mySlide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <!--aqui se crean los circulos ubicado en la parte inferior-->
          <li data-target="#mySlide" data-slide-to="0" class="active"></li>
          <li data-target="#mySlide" data-slide-to="1"></li>
          <li data-target="#mySlide" data-slide-to="2"></li>
          <li data-target="#mySlide" data-slide-to="3"></li>
        </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{ asset('/plugins/img/1.jpg') }}" class="d-block img-fluid" alt="First slide">
        </div>
        <div class="item">
          <img src="{{ asset('/plugins/img/2.jpg') }}" class="d-block img-fluid" alt="second slide">
        </div>
        <div class="item">
          <img src="{{ asset('/plugins/img/3.jpg') }}" class="d-block img-fluid" alt="Third slide">
        </div>
        <div class="item">
          <img src="{{ asset('/plugins/img/4.jpg') }}" class="d-block img-fluid" alt="Third slide">
        </div>
      </div>
      <!--Indicadores (flechas)izquierda-derecha-->
      <a class="left carousel-control" href="#mySlide" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#mySlide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
      </div>
    </div>
<!--Termina slider-->
<!--Empieza Titulo-->
    <div class="container ">
      <div class="text-center">
        <h4>HISTORIAL DE MEDICIONES Y DATOS EN TIEMPO REAL</h4>
      </div>
    </div>
  <!--Termina Titulo-->


<div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="container-speed" style="min-width: 230px; height: 350px; margin: 0 auto">
      </div>
      <script src="{{ asset('/plugins/js/vumetro.js') }}" type="text/javascript"></script>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="container-speed" style="min-width: 230px; height: 350px; margin: 0 auto">
      </div>
      <script src="{{ asset('/plugins/js/vumetro.js') }}" type="text/javascript"></script>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="container-speed" style="min-width: 230px; height: 350px; margin: 0 auto">
      </div>
      <script src="{{ asset('/plugins/js/vumetro.js') }}" type="text/javascript"></script>
    </div>

  </div>

</div>


@endsection