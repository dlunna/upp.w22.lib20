<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100554272-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-100554272-10');
    </script>
  <!-- Fin Google Analitycs -->

  <!-- Cabecera -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Universidad Politécnica de Pachuca">
    <meta name="author" content="DTIC's">
    <title>Universidad Politécnica de Pachuca - UPPachuca</title>
    <link rel="icon" href="../lib18/images/favicon.ico">
  <!-- Fin Cabecera -->

  <!-- Estilos -->
    <!-- Font Awesome -->
    <link href="../lib18/vendor/components/font-awesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../lib18/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo SEP HIDALGO -->
    <Xlink href="../lib18/seph/style.css" rel="stylesheet">
    <!-- Estilo para el boton flotante que te lleva arriba-->
    <link href="../lib18/coreFRONTx/10boton-arriba/estilo.css" rel="stylesheet">
    <link href="../lib18/coreFRONTx/xefectos/boton-arriba/boton-uppachuca.css" rel="stylesheet">
  <!-- Fin Estilos -->

  <!-- Estilo Zorm HIDALGO gob -->
  <link href="../lib18/zorm/style_nuevas.css" rel="stylesheet">
  <link href="../lib18/zorm/style.css" rel="stylesheet">
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>



  <main>

    <br />
    <!--<img src="../lib18/images/logo-upp-15.jpg" class="rounded mx-auto d-block" alt="UPPachuca">-->
    <h1 class="text-center">Universidad Politécnica de Pachuca</h1>
    <br />
    <h2 class="text-center">Dr. Marco Antonio Flores González</h2>
    <p class="text-center">Rector de la Universidad Politécnica de Pachuca</p>
    <br />
    <br />
    <h2 class="text-center">Ing. Jorge Alfredo Fernández Salas</h2>
    <p class="text-center">Secretário Administrativo</p>
    <br />
    <br />
    <h2 class="text-center">M.T.I. David Luna Cruz</h2>
    <p class="text-center">Jefe del Departamento de Tecnologías de Información y Comunicaciones</p>
    <br />
    <br />
    <h2 class="text-center">L.S.C. Francisco Moreno Vargas<br />
    Marco Antonio Rosas Barcenas<br />
    <p class="text-center">Programación y desarrollo</p>
    <br />
    <br />


    <p class="text-center">Carretera Pachuca Cd. Sahagún km 20 Ex-Hacienda de Santa Bárbara Zempoala Hidalgo, México. CP-43830<br>
      <!--Número temporal: 7712474113<br />-->
    Tel 01 (771) 54 77 510 ext 2217<br>
    Correo: <a href="sistemas@upp.edu.mx">sistemas@upp.edu.mx</a></p>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
