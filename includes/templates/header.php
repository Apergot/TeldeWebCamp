
    <!doctype html>
    <html class="no-js" lang="">
    
    <head>
      <meta charset="utf-8">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <link rel="manifest" href="site.webmanifest">
      <link rel="apple-touch-icon" href="icon.png">
      <!-- Place favicon.ico in the root directory -->
    
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="stylesheet" href="css/lightbox.css">
      <link rel="stylesheet" href="css/colorbox.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/main.css">

      <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace('.php', '', $archivo);
      if($pagina == 'ponentes' || $pagina =='index'){
        echo '<script src ="js/jquery.colorbox-min.js"></script>';
      }else if($pagina == 'conferencias'){
        echo '<script src="js/lightbox.js"></script>';
      }
      ?>
    
      <meta name="theme-color" content="#fafafa">
    </head>
    
    <body>
      <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    
      <header class="site-header">
        <div class="hero">
          <div class="contenido-header">
            <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-pinterest-p"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
            <div class="informacion-evento">
              <div class="clearfix">
                <p class="fecha"><i class="far fa-calendar-alt" aria-hidden="true"></i> Próximamente</p>
                <p class="ciudad"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Telde, Gran Canaria</p>
              </div>
              <a href="index.php"><h1 class="nombre-sitio"> TeldeWebCamp</h1></a>
              <p class="slogan"><span> La mejor conferencia de desarrollo web </span></p>
            </div>
    
          </div>
        </div>
      </header>
    
      <div class="barra">
        <div class="contenedor clearfix">
          <div class="logo">
            <a href="index.php">
              <img src="img/logo.svg" alt="logo">
            </a>
          </div>
          <div class="menu-movil">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <nav class="navegacion-principal">
            <a href="conferencias.php">Conferencia</a>
            <a href="calendario.php">Calendario</a>
            <a href="ponentes.php">Ponentes</a>
            <a href="registro.php">Entradas</a>
          </nav>
        </div>
      </div>
