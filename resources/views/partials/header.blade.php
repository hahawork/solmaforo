<header>
      <div class="container 1">
         <div class="row">
           <!--Ocultamos logo para resoucion de dspositivos celulares (xs)-->
            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
              <a href="#"><img src="<?php echo asset('/plugins/img/logo.png'); ?>" class="img-responsive center-block logo"></a>
            </div>
            <div class="hidden-xs col-sm-9 col-md-9 col-lg-9" style="color: #FFFFFF">
              <h1 class="text-center text-justify">Universidad Nacional de Ingeniería<br>Recinto Universitario Simón Bolívar<br>
                Facultad de Electrotecnia y Computación </h1>
          </div>
          <div class="col-xs-12 hidden-sm hidden-md hidden-lg" style="color: #FFFFFF">
            <h4 class="text-center text-justify">Universidad Nacional de Ingeniería<br>Recinto Universitario Simón Bolívar<br>
              Facultad de Electrotecnia y Computación</h4>
          </div>
        </div>
      </div>
    </header>
    <!--Empieza Menu -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target=".navbar-ex1-collapse"><!--permite que el menú se despelegue, sin el punto no funciona-->
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Agregamos imagen al menú de navegacion y la ocultamos para resoluciones sm,md,lg-->
          <a href="#" class="navbar-brand hidden-sm hidden-md hidden-lg">
          <img src="<?php echo asset('/plugins/img/logo.png'); ?>" alt=""></a>
        </div>
        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
             otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}" ><a href="{{ url('/'); }}"><strong>Inicio</strong></a></li>
            <li class="{{ Request::is('solmaforo') ? 'active' : '' }}" ><a href="{{ url('/solmaforo'); }}"><strong>El Solmáforo</strong></a></li>
            <li class="{{ Request::is('info') ? 'active' : '' }}"><a href="<?php echo url('/info'); ?>"><strong>Información General</strong></a></li>
            <li class="{{ Request::is('galeria') ? 'active' : '' }}"><a href="<?php echo url('/galeria'); ?>"><strong>Galería</strong></a></li>
            <li class="{{ Request::is('docs') ? 'active' : '' }}"><a href="<?php echo url('/docs'); ?>"><strong>Documentos</strong></a></li>
            <li class="{{ Request::is('database') ? 'active' : '' }}"><a href="<?php echo url('/database'); ?>"><strong>Base de Datos</strong></a></li>
            <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="<?php echo url('/nosotros'); ?>"><strong>Sobre Nosotros</strong></a></li>
          </ul>
        </div>
      </div><!-- /.container-fluid -->
    </nav>
  <!--Termina Menú Menu -->