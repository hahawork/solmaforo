<!--Empieza Graficas-Temperatura-->
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div id="container 1" style="min-width: 230px; height: 350px; margin: 0 auto"></div>
        <script src="{{ asset('/plugins/js/grafico1_1.js') }}" type="text/javascript">

        </script>
      <br><!--Espaciado entre los graficos-->
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div id="container 2" style="min-width: 230px; height: 350px; margin: 0 auto"></div>
          <script src="{{ asset('/plugins/js/grafico3_3.js') }}" type="text/javascript">

          </script>
      </div>
    </div>
  </div>
  <br><!--Espaciado entre los graficos-->
<!-- Aqui hay un separacion para los graficos-->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div id="container 3" style="min-width: 230px; height: 350px; margin: 0 auto"></div>
        <script src="{{ asset('/plugins/js/radiacion.js') }}" type="text/javascript">

        </script>
        <br><!--Espaciado entre los graficos-->
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div id="container-speed" style="min-width: 230px; height: 350px; margin: 0 auto"></div>
          <script src="{{ asset('/plugins/js/vumetro.js') }}" type="text/javascript">

          </script>
      </div>
    </div>
  </div>