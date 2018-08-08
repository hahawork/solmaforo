@extends('layout.master')


@section('content')

      <!--***********librerias higchart-->
      <script src="{{ asset('/plugins/js/highcharts.js') }}>"></script>
      <script src="{{ asset('/plugins/js/highcharts-more.js') }}"></script>
      <script src="{{ asset('/plugins/js/modules/exporting.js') }}"></script>
      <!--***********librerias higchart-->

  <!--Empieza toda la informacion-->
    <div class="container">
          <h4 class="text-center">EL SOLMÁFORO</h4>
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify">El solmáforo<br><br>Es un  medidor instantáneo de radiación ultravioleta
            (UV), cuenta con sensores que miden el nivel de radiación ultravioleta y entregan su intensidad de manera didáctica
            mediante un código de colores establecido por la organización mundial de la salud (OMS).<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/sol1.jpg') }}" class="img-responsive center-block sol1">
        </div>
      </div>
        <br>
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><br>En el año 2004 nace en Chile el primer solmáforo, fue diseñado e implementado por los
            científicos chilenos Santibáñez y Gramsch, según Gramsch nace de la necesidad que tenía la CONAC (Corporación Nacional
            del Cáncer) de informar a la población de los peligros de la radiación ultravioleta, además para su desarrollo, contó
            con el apoyo de la corporación de fomento de la producción (CORFO).</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/ernesto.jpg') }}" class="img-responsive center-block sol1">
        </div>
      </div>
        <br>
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><br>El objetivo final que se pretende con el solmáforo es que la población mediante mensajes
            sencillos y fáciles de comprender reconozca el IUV como una información diaria y útil, de esta manera podrán tomar hábitos
            saludables de protección solar, así mismo la puesta en práctica de las recomendaciones de acuerdo al IUV mostrado y aumentar
            la concienciación, cambiar la actitud y el comportamiento de las personas sobre los riesgos de la exposición excesiva a la
            radiación UV.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/33.jpg') }}" class="img-responsive center-block sol1">
        </div>
      </div>
      <div class="row"> <!--Insertamos la segunda fila-->
          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <p class="text-center text-justify">Índice UV<br>) es una medida de la intensidad de la radiación UV solar en la superficie terrestre.
              El índice se expresa como un valor superior a cero, y cuanto más alto, mayor es la probabilidad de lesiones cutáneas y oculares y
              menos tardan en producirse esas lesiones. El índice pronostica estos niveles en una escala de 0 a +11, mediante un código de colores
              estandarizado por la organización mundial de la salud (OMS).</p>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="{{ asset('/plugins/img/12.png') }}" class="img-responsive center-block sol2">
          </div>
      </div>
      <h4 class="text-center">Como funciona</h4>
  </div>
@endsection