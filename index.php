<?php $titulo = "UPP" ?>

<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-27RJ656WRN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-27RJ656WRN');
</script>
  <?php

    include ('../lib20/core/10cabecera.html');
    include ('../lib20/core/20estilos.html');
    include ('../lib20/hgo/zoram_style_header.html');
  ?>
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    //include ('../lib18/seph/hf/header.html');
  	 	include ('../lib20/hgo/header.html');
  	?>
    <!-- Slider principal -->
    <?php //include ('./dotk/01header/01carousel-principal/carousel.html'); ?>
  </header>

  <?php //include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <?php //include ('./dotk/05main/contenido.html'); ?>

    <section id="contenido">

      <h1 class="text-center">Universidad Politécnica de Pachuca</h1>
      <br />
      <h2 class="text-center">Dr. Francisco Marroquín Gutiérrez</h2>
      <p class="text-center">Rector de la Universidad Politécnica de Pachuca</p>
      <br />
      <br />
      <h2 class="text-center">M.T.I. David Luna Cruz</h2>
      <p class="text-center">Web Master</p>
      <p class="text-center">Departamento de Tecnologías de Información y Comunicaciones</p>
      <br />
      <br />
      <br />


      <p class="text-center">Correo: <a href="sistemas@upp.edu.mx">sistemas@upp.edu.mx</a></p>


    </section>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <br />
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib20/core/60menufooter.php'); ?>
    </div>
  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php //include ('../lib20/seph/hf/footer.html'); ?>
    <?php include ('../lib20/hgo/footer.html'); ?>
  </footer>

  <?php
    include ('../lib20/core/80js.html');
    include ('../lib20/hgo/zoram_js_footer.html');
  ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib20/core/31script.js"></script>-->


</body>

</html>
