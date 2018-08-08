@extends('layout.master')


@section('content')


  <!--Empieza toda la informacion-->
    <div class="container"><!--Empieza contenedor principal-->
          <h4 class="text-center">COMPOSICIÓN Y ESTRUCTURA VERTICAL DE LA ATMÓSFERA</h4>
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>La Atmófera</strong><br>Una cobertura gaseosa compuesta principalmente por nitrógeno
            (N2) y oxígeno(O2) molecular, con pequeñas cantidades de otros gases, como vapor de agua (H2O) y dióxido de carbono (CO2).
            Además del nitrógeno, el oxígeno, el vapor de agua y el dióxido de carbono, que son los gases principales, la
            atmósfera contiene otros en menor proporción que afectan el clima. Los más importantes son el ozono (O3), el
            metano (CH4), los óxidos de nitrógeno (NOx) y los clorofluorocarbonos. Compuesta por serie de capas: Tropósfera,
            Estratósfera, Mesósfera, Termósfera (Ionósfera), Exósfera.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/5.png') }}" class="img-responsive center-block sol2">
        </div>
      </div>
    <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>El efecto invernadero</strong></br>El efecto invernadero es un fenómeno atmosférico natural que permite mantener
            una temperatura agradable en el planeta. Sin embargo “el efecto invernadero en la atmósfera constituye indiscutiblemente
            un fenómeno real y natural (entendiendo como natural una situación independiente de las actividades humanas)”.
            La radiación solar calienta la superficie de la tierra y al calentarse, el planeta emite radiación terrestre.
            Determinados gases de invernadero de la atmósfera absorben y re-emiten parte de la radiación  infrarroja.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/6.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
    <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Gases de efecto invernadero</strong><br>Los Gases de Efecto Invernadero (GEI) son los responsables
            del llamado efecto invernadero, estos gases son los que componen la atmósfera terrestre, y existen de forma natural, sin embargo,
            hoy en día, las actividades humanas están alterando la concentración atmosférica de los mismos impidiendo que el
            calor salga hacia el espacio y provocando de esta manera un calentamiento excesivo del planeta, dando como resultado
            “el calentamiento global”.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/7.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>El calentamiento global</strong><br><br>Consiste en el aumento de la temperatura de la superficie
            terrestre como consecuencia  de la potenciación del efecto invernadero natural. Gases como el CO2, ozono superficial
            (O3), óxido nitroso  (N2O) y clorofluoralcanos se acumulan en la atmósfera como resultado de las actividades humanas.<br><br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/8.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
    <br><!--salto de Linea-->
        <h4 class="text-center">RADIACIÓN ULTRAVIOLETA</h4>
      <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Radiación</strong><br>La energía proveniente del Sol se llama energía radiante o radiación. La onda consiste
            de una serie de  crestas y depresiones. La distancia entre dos crestas (o depresiones) es llamada longitud de onda y
            generalmente se indica con la letra griega (lambda). El rango total de tipos de radiación electromagnética (como la luz
            o las radiaciones ultravioleta o infrarroja o los rayos X) que difieren por sus longitudes de onda y frecuencia
            constituyen el espectro electromagnético. La radiación es el transporte o la propagación  de energía en forma de partículas
            u ondas. Si la radiación es debida a fuerzas eléctricas o magnéticas se llamada radiación electromagnética.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/9.1.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
        <br><!--salto de Linea-->
      <!--Aqui hacemos uso del anidamiento de columnas-->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('/plugins/img/espectro.png') }}" class="img-responsive center-block" alt="Espectro electromagnético">
            <br><!--salto de linea-->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <p class="text-center text-justify"><strong>Radiación Ionizante</strong><br>Las radiaciones ionizantes son fotones o partículas emitidas por elementos radioactivos
                  o en procesos atómicos que poseen energía suficiente como para ionizar átomos o moléculas, los tipos más comunes de radiación
                  ionizante son los generados por fotones con energía superior a 10keV.</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <p class="text-center text-justify"><strong>Radiación no Ionizante</strong><br>Las radiaciones no ionizantes son de baja energía, es decir, no son capaces de ionizar la
                  materia con la que interaccionan.<br><br><br></p>
              </div>
            </div>
          </div>
        </div>

    <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><br>Al igual que la luz, que es visible, la radiación ultravioleta (RUV) es una forma de radiación
            óptica de longitudes de onda más cortas y fotones  (partículas de radiación) más energéticos que los de la luz visible. La mayoría
            de las fuentes de luz emiten también algo de RUV. La RUV está presente en la luz del sol y también es emitida por  un gran número
            de fuentes ultravioleta utilizadas en la industria, la ciencia y la medicina. Se divide en tres tipos.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img  src="{{ asset('/plugins/img/10.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
    <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
      <h4 class="text-center">Bandas de radiación ultravioleta</h4>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <table class="table table-hover">
            <tr>
              <th class="text-center">Bandas UV</th>
              <th class="text-center">Descripcion</th>
            </tr>
            <tr>
              <td class="text-center" style="padding-top:75px"><strong>UVA (315-400nm)</strong></td>
              <td>Es la más próxima al espectro de radiación visible y la de mayor longitud de onda de las tres.
                  <br>Es poco absorbida por la atmósfera, por lo tanto representa aproximadamente el 95% de la radiación UV que alcanza
                  la superficie terrestre.
                  <br>Penetran más profundamente en la dermis y causan efectos a largo plazo como arrugas, marcas y manchas de edad.
                  <br>Estimulan la melanina mayormente responsable del bronceado y contribuyen a las quemaduras solares.</td>
            </tr>
            <tr>
              <td class="text-center" style="padding-top:90px"><strong>UVB (280-315nm)</strong></td>
              <td>Es bastante atenuada por la capa de ozono, y solo representa el 5% de la radiación UV y el 0.25% de toda la radiación
                  solar que alcanza la superficie terrestre.
                  <br>Penetra la epidermis (la capa externa de la piel) y es absorbida en la parte superior de la dermis.
                  <br>Responsables de las quemaduras de Sol, con la formación de eritemas en la piel.
                  <br>Daña el ADN de la piel, lo que es un factor clave en la iniciación del proceso cancerígeno.
                  <br>Responsable de la formación de la pre-vitamina D en el cuerpo humano.</td>
            </tr>
            <tr>
              <td class="text-center" style="padding-top:45px"><strong>UVC (100-280nm)</strong></td>
              <td>Es en teoría la más peligrosa para el hombre, afortunadamente es totalmente absorbida por la capa de ozono.
                  <br>La UVC solo se obtiene de fuentes artificiales, tales como lámparas germicidas, que emiten la mayor parte de su energía en los 254nm y
                  es muy eficaz para los procesos de esterilización.</td>
            </tr>
          </table>
        </div>
    </div>
      <h4 class="text-center">AGOTAMIENTO DE LA CAPA DE OZONO Y SUS EFECTOS SOBRE LA SALUD</h4>
    <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><br>El efecto que causa la disminución de la capa de ozono sobe la superficie
            terrestre es el aumento de los niveles de radiación ultravioleta-B este tipo radiación daña a los seres humanos,
            animales y plantas. Según predicciones de modelos computacionales, una disminución de la densidad del ozono
            estratosférico en un 10% podría aumentar en 300 000 los casos de cáncer de piel no melánico, en 4 500 los de
            cáncer de piel melánico y en 1,6 a 1,75 millones los casos de cataratas en todo el mundo cada año.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/12.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
    <br><!--salto de Linea-->
      <h4 class="text-center">LOS NIVELES DE RADIACIÓN ULTRAVIOLETA DEPENDEN DE VARIOS FACTORES</h4>
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>El ozono estratosférico</strong><br>
            A menor cantidad de ozono mayor radiación UV que ingresa a la superficie terrestre, está absorbe la mayor parte
            de la radiación ultravioleta dañina, pero su espesor varía según la época del año y los cambios climáticos.
            La capa de ozono ha disminuido en ciertas zonas debido a la emisión de productos químicos que destruyen el ozono.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/13.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>La hora del día</strong><br>
            El sol está en su punto más alto en el cielo alrededor del mediodía. A esa hora, la distancia que recorren los
            rayos solares dentro de la atmósfera es más corta y los niveles de UVB son los más altos. Temprano en la mañana
            y al final de la tarde, los rayos solares atraviesan la atmósfera de forma oblicua, lo cual reduce en gran
            medida la intensidad de los rayos UVB. Los niveles de radiación UVA no dependen del ozono y varían a lo largo
            del día, de la misma manera que la luz solar visible.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/14.png') }}" class="img-responsive center-block sol2">
        </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>La latitud</strong><br>
            La radiación UV varía de acuerdo con la ubicación geográfica más sobre la zona del ecuador, la radiación UV
            resulta ser más intensa en esta área, ya que el sol pasa por la parte más alta del cielo y la distancia
            recorrida por los rayos ultravioleta dentro de la atmósfera es más corta. A latitudes más  altas, el sol está
            más bajo en el cielo, por lo q ue los rayos ultravioleta deben recorrer una distancia mayor a  través de las
            capas de la atmósfera en donde hay más ozono, y en consecuencia la radiación ultravioleta es menor en esas
            latitudes.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/15.1.png') }}" class="img-responsive center-block sol2">
        </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>La altitud</strong><br><br>
            La intensidad de la radiación ultravioleta aumenta con la altitud, ya que hay menos atmósfera para absorber
            los rayos dañinos del sol. Con cada 1000 metros de incremento de la altitud, la intensidad de la radiación UV
            aumenta en un 10 a 12%.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/16.1.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la segunda fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Las condiciones climáticas</strong><br><br>
            Las nubes según su espesor tienen un impacto en la cantidad de radiación UV que recibe la superficie terrestre,
            pero no la eliminan completamente. Según el espesor de las nubes, es posible sufrir quemaduras en un día nublado.
            Los rayos UV pueden rebotar en superficies como el agua, la arena, la nieve, el pavimento, o la hierba, lo que
            lleva a un aumento en la exposición a los rayos UV.<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/17.jpg') }}" class="img-responsive center-block sol2">
        </div>
    </div>
      <br><!--salto de Linea-->
    <h4 class="text-center">TIPO DE PIEL Y DOSIS ERITEMATÓGENA</h4>
  <!--Aqui hacemos uso del anidamiento de columnas-->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="text-center text-justify">DEM (Dosis Eritematógena Mínima):<br>Es el tiempo mínimo que tarda la piel en quemarse sin fotoprotección,
          depende del nivel de radiación y del tipo de piel.<br>
          <strong>FPS:</strong> Factor de Protección Solar. Indica numéricamente las veces que, en teoría, se prolongará el tiempo de
          DEM al aplicar un fotoprotector. Un FPS 2 indica que la DEM se duplicó, FPS 10 que es 1O veces superior,
          etc. Así, se usted se quema en 20 minutos (DEM de 20), un producto con FPS 10 teóricamente aumentaría el
          tempo sin quemarse hasta 200 minutos.</p>
          <br>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
              <img class="img-responsive center-block" src="{{ asset('/plugins/img/piel1.jpg') }}" width="400px" ><figcaption class="text-center"><strong>Tabla1.-Tipos de Piel</strong></figcaption>
          </div>
          <div class="col-xs-12 col-sm-6">
              <img class="img-responsive center-block" src="{{ asset('/plugins/img/dosis1.jpg') }}" width="400px">
              <figcaption class="text-center"><strong>Tabla2.-Quemadurá solar. Tiempo requerido para quemarse sin protección</strong></figcaption>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12 col-sm12 col-md-12 col-lg-12">
            <p class="text-center text-justify">Aclaración<br>Aunque estas tablas muestran un tiempo de exposición “seguro” a la radiación UVB según el fototipo de piel,
              el Dr. López de la Fuente comenta que: <br>“Conviene recordar, que los efectos de la radiación UV sobre la salud tienen una secuencia acumulativa,
              independientemente del tipo de piel. El riesgo y daño de la salud pública ante la radiación UVB no es de un modo lineal, sino exponencial, según
              el cuadrado o incluso el cubo del crecimiento de la UVB, llegando al límite de la quema del tejido vivo”<br><br> </p>
          </div>
        </div>
      </div>
    </div>
      <br><!--salto de Linea-->
      <h4 class="text-center">EFECTOS DE LA EXPOSICIÓN A LA RADIACIÓN UV SOBRE LA SALUD</h4>
      <h4 class="text-center">EFECTOS CUTÁNEOS</h4>
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Quemaduras solares, bronceado y envejecimiento de la piel</strong><br>Tras la exposición
          excesiva de la radiación UV se presenta un enrojecimiento de la piel comúnmente conocido como quemadura solar (eritema),
          así mismo otro efecto de adaptación menos evidente en donde las capas más extensas de la piel presenta un engrosamiento.
          La exposición crónica a la radiación UV ocasiona también varios cambios de tipo degenerativo en las células, el tejido
          fibroso y los vasos sanguíneos de la piel, como las pecas y nevos (zonas pigmentadas de la piel), y los lentigos
          (pigmentación parda difusa), teniendo como resultado un envejecimiento prematuro de la piel.</p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/20.jpg') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Cánceres de piel no melánicos</strong><br>Los cánceres de piel no melánicos (CPNM) comprenden
          los carcinomas de células basales, que afecta las células basales de la epidermis  y los carcinomas de células escamosas,
          que pueden aparecer  como nódulos o como áreas rojas y escamosas. Los CPNM son más frecuentes en las partes del cuerpo
          expuestas normalmente al sol, como las orejas, la cara, el cuello y los antebrazos, sin embargo ambos canceres son más
          común en las personas de piel clara.</p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/21.jpg') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Melanoma maligno</strong><br>Cabe destacar que los MM es la principal causa de muerte por cáncer de
            piel y son más frecuentes en las personas de piel clara, ojos azules, pelo rubio o pelirrojo. Al parecer un factor muy importante
            que influye mucho en el padecimiento de MM en la población blanca es conforme disminuye la latitud, siendo la incidencia más
            alta la registrada en Australia, donde las tasas anuales de mujeres y hombres son, respectivamente, 10 y más de 20 veces
            superiores a las registradas en Europa. Otro factor importante de sufrir MM es la exposición alta e intermitente a la radiación
            UV solar, pero el principal factor de riesgo de MM en poblaciones de piel clara es la presencia de numerosos nevos (lunares)
            atípicos.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/22.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <h4 class="text-center">EFECTOS OCULARES</h4>
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Efectos Oculares</strong><br>La fotoqueratitis y la fotoconjuntivitis son efectos agudos de la exposición a la radiación UV.
          Las cataratas son la principal causa de ceguera en todo el mundo. Se produce una desnaturalización de las proteínas del cristalino,
          que se disgregan y acumulan pigmentos, aumentando la opacidad del cristalino y acabando por producir ceguera. Entre otros daños a
          la vista son los siguientes: pterigión (crecimiento de tejido en la esclerótica o blanco del ojo, que bloquea la visión); cáncer
          de piel alrededor de los ojos; y degeneración de la mácula lútea (la parte central de la retina, donde la percepción visual es
          más aguda).</p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/23.jpg') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
      <h4 class="text-center">SISTEMA INMUNOLÓGICO</h4>
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Sistema Inmunológico</strong><br>Los científicos determinaron mediante experimentos con animales y humamos, luego de una quemadura
          solar el sistema inmunológico se vuelve más débil, alterando la distribución y función de los glóbulos blancos de la sangre en los
          seres humanos durante un período de hasta 24 horas desde la exposición al sol. Sin embargo el sistema inmune es un mecanismo de defensa
          contra infecciones y otros males, reconoce y responde muy eficaz contra microorganismo invasores. En consecuencia, la exposición al
          sol puede aumentar el riesgo de infecciones víricas, bacterianas, parasitarias o fúngicas, según se ha comprobado en dichos
          experimentos.</p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/24.jpg') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
      <h4 class="text-center">RECOMENDACIONES BÁSICAS PARA PROTEGERSE DEL SOL</h4>
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Limite en lo posible el tiempo de exposición en las horas centrales del día</strong><br><br>
          Los rayos ultravioleta del sol son más fuertes entre las 10 de la mañana y las 4 de la tarde. Limite dentro de lo posible la exposición
          al sol durante esas horas. Tenga especial cuidado cuando se encuentre en la playa o en áreas donde hay nieve, ya que la arena, el agua
          y la nieve reflejan la luz solar, lo que aumenta la cantidad de radiación UV que recibe.<br><br></p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/25.png') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
    <div class="row"> <!--Insertamos la primera fila-->
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <p class="text-center text-justify"><strong>Vigile y conozca el índice UV</strong><br>El índice UV proporciona información importante para ayudarle a
          planear sus actividades al aire libre y prevenir la sobreexposición al sol  a la que nos vamos a someter. Infórmese sobre la IUV publicado
          en su región.</p>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ asset('/plugins/img/26.jpg') }}" class="img-responsive center-block sol2">
      </div>
    </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Use anteojos de sol que bloqueen un 99 a 100 por ciento de la radiación ultravioleta</strong><br>
          Los anteojos de sol con una protección UVA y UVB de 99 a 100 reducen en gran medida la exposición de los ojos al sol, que puede
          provocar cataratas y otros daños a la vista. Revise la etiqueta al comprar  anteojos de sol. Las etiquetas que indican absorción
          de rayos ultravioleta hasta 400 nm</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/27.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Póngase un sombrero</strong><br><br>Un sombrero de ala ancha o un gorro de por lo menos 10 centímetros por
            cada lado, que no solo  proteja la cara, sino también, las orejas y la región de la nuca, estas zonas son especialmente propensas
            a la sobreexposición al sol.<br><br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/28.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Proteja con ropa otras áreas del cuerpo durante períodos de exposición prolongada al sol</strong><br>
          La mejor protección contra el sol es el uso de ropa holgada, de tela tupida y que cubra todo el cuerpo y las extremidades. Esta
          ropa con protección solar puede tener una etiqueta que indica el valor del factor de protección a la radiación ultravioleta (UPF),
          el nivel de protección que provee la prenda de ropa contra los rayos ultravioleta del sol (en una escala del 15 al 50+).<br><br></p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/29.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Use siempre una crema con filtro solar cuando esté al aire libre</strong><br>
          Un filtro solar con un factor de protección solar (SPF) de al menos 15 bloquea la mayor parte de la radiación ultravioleta dañina.
          Aplique abundante crema con filtro solar sobre la piel expuesta y repita la aplicación cada 2 horas siempre que esté trabajando,
          jugando o haciendo ejercicio al aire libre. El filtro solar, aunque sea a prueba de agua, puede desprenderse de la piel al secarse
          el sudor o el agua con una toalla. Consulte con el médico acerca del tipo de filtro solar que debe usar para los niños menores de 6
          meses de edad. Use también bálsamo de labios con SPF 15.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/30.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
      <div class="row"> <!--Insertamos la primera fila-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <p class="text-center text-justify"><strong>Evite las lámparas y salones de bronceado</strong><br>Las fuentes de luz procedentes de
            lámparas para el bronceado pueden dañar la piel y los ojos si no están protegidos.  Las lámparas solares emiten UVA, y también rayos
            UVB comúnmente.Tanto los rayos UVA como los UVB pueden causar daños a la piel a largo plazo y pueden contribuir al cáncer de piel.
            Es buena idea evitar las fuentes artificiales de luz ultravioleta</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <img src="{{ asset('/plugins/img/31.jpg') }}" class="img-responsive center-block sol2">
        </div>
      </div>
      <br><!--salto de Linea-->
  </div><!--Cierra el contenedor principal-->
  <br>
  
@endsection
